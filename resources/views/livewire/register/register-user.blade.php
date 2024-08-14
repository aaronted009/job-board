<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    {{-- Do your work, then step back. --}}
    <div class="card pt-3">
        <div class="card-body">
            <div class="d-flex flex-column align-items-center">
                <form action="{{ route('users.store') }}" method="POST">
                    <div class="form-group">
                        <h3>Compte Travailleur</h3>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group mt-2">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group mt-2">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-secondary mt-3">Soumettre</button>
                </form>
            </div>
        </div>
    </div>
</div>
