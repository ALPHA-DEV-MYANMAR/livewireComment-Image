<?php

namespace App\Http\Livewire;

use App\Models\Comment as ModelsComment;
use Livewire\Component;

class Comment extends Component
{

    public $comments;
    public $inputcomment;

    public function mount(){
        $this->comments = ModelsComment::latest()->get();
    } 

    public function remove($id){
        $removeComment = ModelsComment::find($id);
        //Delete from DB
        $removeComment->delete();
        //Delete from Font-end
        $this->comments = $this->comments->except($id);

        session()->flash('message', 'Comment successfully Deleted ❎');
    }

    public function addcomment(){

        $this->validate([
            'inputcomment' => 'required'
        ]);
        
        $createComment = ModelsComment::create(
            [
                'comment' => $this->inputcomment,
                'user_id' => '1',
            ]
        );

        //Prepend latest
        $this->comments->prepend($createComment);
        $this->inputcomment = '';
    }

    public function render()
    {
        return view('livewire.comment',[
            'comments' => $this->comments
        ]);
    }
}
