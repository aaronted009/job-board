<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    {{-- Do your work, then step back. --}}
    @if ($offers->isEmpty())
        <div class="card pt-3 mx-2">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center">
                    <div class="offer">
                        <h2>Il n'y a pas encore d'offres</h2>
                    </div>
                </div>
            </div>
        </div>
    @else
        @foreach ($offers as $offer)
            <div class="card pt-3 mx-2">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center">
                        <div class="offer">
                            <h2>{{ $offer->title }}</h2>
                            <p>{{ $offer->description }}</p>
                            <p>Salary: {{ $offer->salary }}</p>
                            @auth
                                @if ($applications->contains('offer_id', $offer->id) && $applications->contains('user_id', auth()->user()->id))
                                    <button class="btn btn-secondary" disabled>Already applied</button> 
                                    
                                @else
                                    <form action="{{ route('applications.store') }}" method="POST">
                                        <input type="hidden" wire:model="offer_id" value="{{ $offer->id }}">
                                        <input type="hidden" wire:model="user_id" value="{{ auth()->user()->id }}">
                                        <button type="submit" class="btn btn-success">Apply</button>
                                    </form>                                    
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
