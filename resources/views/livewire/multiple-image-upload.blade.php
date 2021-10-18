

<form wire:submit.prevent="save">
    <input type="file" wire:model="photos" multiple>
 
    @error('photo') <span class="error">{{ $message }}</span> @enderror
 
    <button type="submit">Save Photo</button>

    <div>
        @if ($photos)
        @foreach ($photos as $photo)
            <img src="{{ $photo->temporaryUrl() }}" width="200">
        @endforeach
        @endif
    </div>

</form>


