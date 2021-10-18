<?php

namespace App\Http\Livewire;

use App\Models\Image as ModelsImage;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Image extends Component
{
    use WithFileUploads;
    public $image;
    protected $listeners = ['fileUpload' => 'handleFileUpload'];

    public function handleFileUpload($imageData){
        // dd($imageData);
        $this->image = $imageData;
    }

    public function upload(){
        // dd($this->image);


        $img = ImageManagerStatic::make($this->image)->encode('jpg');//Encode base64 
        
        $name = Str::random().'.jpg';
        Storage::disk('public')->put($name,$img);
        
        ModelsImage::create([
            'image' => $name
        ]);

        $this->image = null;

    }

    public function remove($id){
        $removeImage = ModelsImage::find($id);
        $removeImage->delete();
    }

    public function render()
    {
        return view('livewire.image',[
            'images' => ModelsImage::latest()->get()
        ]);
    }
}
