
@include('components.init')
@include('components.nav')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mt-5 mb-4">Inserisci libro</h2>
                <form method="POST" action="{{route('books.store')}}">
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" class="form-control" id="title"   name="title" placeholder="Inserisci il titolo">
                    </div>
                    <div class="form-group">
                        <label for="author">Autore</label>
                        <input type="text" class="form-control" id="author"  name="author" placeholder="Inserisci l'autore"/>
                    </div>
                    <div class="form-group">
                        <label for="price">Prezzo</label>
                        <input type="number" class="form-control" id="price" name="price"  placeholder="Inserisci il prezzo"/>
                    </div>
                    <div class="form-group">
                        <label for="img">Img</label>
                        <input type="text" class="form-control" id="img" name="img"  placeholder="Inserisci url img"/>
                    </div>
                 
                    <button type="submit" class="btn bg-red mt-5">Aggiungi Libro</button>
                </form>
            </div>
        </div>
    </div>


@include('components.footer')
