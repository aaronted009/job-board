<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    {{-- Stop trying to control. --}}
    <div class="card pt-3">
        <div class="card-body">
            <div class="d-flex flex-column align-items-center">
                <a href="{{ route('register.company') }}" class="btn btn-primary mb-3">Créer un compte Entreprise</a>
                <a href="{{ route('register.user') }}" class="btn btn-secondary mb-3">Créer un compte Travailleur</a>
                <span>Vous avez déjà un compte ?<a href="{{ route('login') }}" class="btn btn-link">Connectez-vous</a></span>
            </div>
        </div>
    </div>
</div>
</div>
