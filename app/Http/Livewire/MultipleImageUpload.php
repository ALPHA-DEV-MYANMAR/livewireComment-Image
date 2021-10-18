<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class MultipleImageUpload extends Component
{
    use WithFileUploads;

    public $photos = [];
    public $photo;

    public function remove($index){
        $this->photos = array_splice($this->photos,$index,1);
    }
 
    public function save()
    {
        $this->validate([
            'photos.*' => 'image|max:1024', // 1MB Max
        ]);
 
        foreach ($this->photos as $photo) {
            $photo->store('photos');
        }
    }

    public function render()
    {
        return view('livewire.multiple-image-upload');
    }
}
