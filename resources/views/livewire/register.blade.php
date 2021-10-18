<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
            <div class="col-md-4">

                @if($message)
                    {{-- Message --}}
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ $message }}</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    {{-- Message --}}
                @endif

                <div class="card" id="form">
                    <div class="card-body">
                        <form wire:submit.prevent='register'>
                            <div>
                                <label for="">Name</label>
                                <input type="name" class="form-control" wire:model='name'>
                            </div>
        
                            <div>
                                <label for="">Email</label>
                                <input type="email" class="form-control"    wire:model='email'>
                            </div>

                            <div>
                                <label for="">Password</label>
                                <input type="password" class="form-control" wire:model='password'>
                            </div>
        
                            <div>
                                <label for="">Comfrim Password</label>
                                <input type="password" class="form-control" wire:model='password_comfirmation'>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <div class="col-md-4"></div>
    </div>
</div>

<style>
    #form{
        margin-top: 50px;
    }
</style>