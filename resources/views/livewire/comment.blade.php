<div>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
                <div class="col-md-8">
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @endif
                    <h3>Comment</h3>
                    <div>
                        <form wire:submit.prevent='addcomment'>

                            <input type="text" class="form-control" wire:model="inputcomment">
                            @error('inputcomment') <span class="error">{{ $message }}</span> @enderror
                            <button type="button" class="btn btn-dark btn-sm" wire:click.prevent='addcomment'>Comment</button>
    
                        </form>
                    </div>
                    <div>

                        @foreach ($comments as $comment)
                        
                            <div class="card">
                                <div class="card-body">
                                    <div id="close">
                                        <i class="fas fa-times" wire:click="remove({{ $comment->id }})"></i>
                                    </div>
                                    <h4>{{ $comment->creator->name }}</h4>
                                    <span class="badge bg-dark">{{  $comment->created_at->diffForHumans() }}</span>
                                    <p>{{ $comment->comment }}</p>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>

<style>
    .container {
        padding: 20px
    }
    #close{
        text-align: right;
    }

</style>
