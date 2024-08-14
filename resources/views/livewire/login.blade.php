<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="card pt-3">
        <div class="card-body">
            <div class="d-flex flex-column align-items-center">
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <form wire:submit="login">
                    <div class="form-group">
                        <h3>Connexion</h3>
                    </div>
                    <hr>
                    <div class="form-group mt-2">
                        <label for="email">Email</label>
                        <input type="email" wire:model="email" class="form-control" id="email" name="email">
                        <div>
                            @error('email')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <label for="password">Mot de passe</label>
                        <input type="password" wire:model="password" class="form-control" id="password"
                            name="password">
                        <div>
                            @error('password')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark mt-3">Se connecter</button>
                </form>
            </div>
        </div>
    </div>
</div>
