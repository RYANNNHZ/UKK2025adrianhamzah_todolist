<div class="container-fluid">
    <div class="container">
        <div class="row my-5">
            <div class="col-12 col-md-8 col-lg-6 offset-md-2 offset-lg-3 ">
                <div class="card text-dark w-100 rounded-3">
                    <div class="card-body">
                        <div class="mb-4 text-center">
                                <img src="favicon.png" style="width: 5em" alt="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">username</label>
                            <input type="text" class="form-control rounded-3" wire:model='username'
                                aria-describedby="helpId" placeholder="username..." />
                                @error('record')
                                <small id="helpId" class="form-text text-danger">error massage here...</small>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">email</label>
                            <input type="email" class="form-control rounded-3" wire:model='email'
                                aria-describedby="helpId" placeholder="email..." />
                                @error('record')
                                <small id="helpId" class="form-text text-danger">error massage here...</small>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">password</label>
                            <input type="password" class="form-control rounded-3" wire:model='password'
                                aria-describedby="helpId" placeholder="password..." />
                                @error('record')
                                <small id="helpId" class="form-text text-danger">error massage here...</small>
                                @enderror
                        </div>

                        <div class="my-5 d-flex align-items-end justify-content-between">
                            <button type="button" class="btn btn-dark rounded-5">
                                register
                            </button>
                            <p>have an account <a href="">register</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
