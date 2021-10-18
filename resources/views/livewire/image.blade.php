<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
            <div class="col-md-4">

                <p>Preview Image</p>

                <img src="{{ $image }}" alt="" width="200">
                
                <input type="file" id="image" wire:change="$emit('fileChoosen')">

                <button type="button" wire:click.prevent="upload" class="btn btn-dark">Upload</button>

                @foreach ($images as $image)
                <div class="container" >
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">

                                    <i class="fas fa-window-close" wire:click="remove({{ $image->id }})"></i>
        
                                    <img src="{{ 'storage/'.$image->image }}" style="width:100%" alt="" >
        
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
            @endforeach

            </div>
        <div class="col-md-4"></div>
    </div>
</div>

<style>
    .container{
        padding: 20px
    }
</style>

