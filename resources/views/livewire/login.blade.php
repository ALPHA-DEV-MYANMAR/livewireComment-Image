<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card" id="form">
                    <div class="card-body">
                        <form wire:submit.prevent='login'>
                            <div>
                                <label for="">Email</label>
                                <input type="email" class="form-control" wire:model="email">
                            </div>

                            <div>
                                <label for="">Password</label>
                                <input type="password" class="form-control" wire:model="password">
                            </div>
    
                            <div>
                                <button type="submit" class="btn btn-primary">Login</button>
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