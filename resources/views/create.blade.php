
@include('components.init')
@include('components.nav')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mt-5 mb-4">Nuova Attività</h2>
                <form>
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" class="form-control" id="title" placeholder="Inserisci il titolo dell'attività">
                    </div>
                    <div class="form-group">
                        <label for="description">Descrizione</label>
                        <textarea class="form-control" id="description" rows="3" placeholder="Inserisci la descrizione dell'attività"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="deadline">Scadenza</label>
                        <input type="date" class="form-control" id="deadline">
                    </div>
                    <button type="submit" class="btn bg-red mt-5">Aggiungi Attività</button>
                </form>
            </div>
        </div>
    </div>


@include('components.footer')
