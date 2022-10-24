<div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form wire:submit.prevent="loginUser">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" wire:model.defer="email">
                          
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="********" wire:model.defer="password">
                          
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                         <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" wire:model.defer="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <a href="{{ route('password.request') }}" class="d-block text-primary">Lupa Kata Sandi?</a>
                        <a href="{{ route('register') }}" class="text-primary">Belum punya akun ?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
