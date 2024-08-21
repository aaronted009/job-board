<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    {{-- Be like water. --}}
    @if ($companyOffers->isEmpty())
        <div class="card pt-3 mx-2">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center">
                    <div class="offer">
                        <h2>Vous n'avez pas encore créé d'offre</h2>
                        <a href="{{ route('offers.create', ['id' => $company]) }}" class="btn btn-primary mb-3">Créer une
                            offre</a>
                    </div>
                </div>
            </div>
        </div>
    @else
        @foreach ($companyOffers as $offer)
            <div class="card pt-3 mx-2">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center">
                        <div class="offer">
                            <h2>{{ $offer->title }}</h2>
                            <p>{{ $offer->description }}</p>
                            <p>Salary: {{ $offer->salary }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
