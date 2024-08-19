<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="card pt-3">
        <div class="card-body">
            <div class="d-flex flex-column align-items-center">
                <form action="{{ route('offers.store') }}" method="POST">
                    <div class="form-group">
                        <h3>Créer une offre</h3>
                    </div>
                    <hr>
                    <div class="form-group">
                        <input type="hidden" name="company_id" value="{{$company->id}}">
                    </div>
                    <div class="form-group">
                        <label for="name">Titre</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group mt-2">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <label for="salary">Salaire</label>
                        <input type="text" class="form-control" id="salary" name="salary">
                    </div>
                    <button type="submit" class="btn btn-secondary mt-3">Soumettre</button>
                </form>
            </div>
        </div>
    </div>
</div>
