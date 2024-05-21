@include('components.init')

@include('components.nav')

<div class="container">
    <h1 class="mt-2">Lista libri</h1>
    @session('operation_success')
        <div class="alert alert-success" role="alert">
           {{ session('operation_success') }}
        </div>
    @endsession


    @if($books->count())
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Titolo</th>
                    <th>Prezzo</th>
                    <th>Autore</th>
                    <th>Immagine</th>
                    <th>user_id</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $element)
                    <tr>
                        <td>{{$element->id}}</td>
                        <td><a href="{{route('details', ['id' => $element])}}" class="text-decoration-none fw-bold">{{strtoupper($element->title)}}</a> </td>
                        <!-- <td><a href="/details/{{$element->id}}">{{$element->title}}</a> </td> -->
                        <td>{{$element->price}}</td>
                        <td>{{$element->author}}</td>
                        <td><img src="{{$element->img}}" alt="Immagine del libro" style="max-width: 100px;"></td>
                        <td>{{$element->user_id}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Nessun libro</p>
    @endif

    <div class="pagI mt-3">
        {{$books->links()}}
    </div>
</div>

@include('components.footer')

