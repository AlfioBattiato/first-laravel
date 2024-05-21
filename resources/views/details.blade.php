@include('components.init')
@include('components.nav')

<div class="container">

    <h1 class="mt-2">Libro</h1>
    @session('operation_success')
        <div class="alert alert-success" role="alert">
            {{ session('operation_success') }}
        </div>
    @endsession

    <div class="card" style="width: 18rem;">
        <img src="{{$books->img}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$books->title}}</h5>
            <p class="card-text">Price: {{$books->price}}</p>

        </div>
    </div>

    <!-- <div class="btn btn-danger mt-5"><a class="text-decoration-none text-white"
            href="{{route('delete', ['id' => $books])}}">Delete book</a></div> -->

    @auth
        @if (Auth::user()->id === $books->user_id)

            <div class="d-flex gap-2 mt-3">
                <a class="btn btn-warning " href="{{ route('modify', ['id' => $books]) }}">Modifica</a>

                <form action="{{ route('delete', ['id' => $books]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Elimina</button>
                </form>

            </div>
        @endif
    @endauth

</div>


@include('components.footer')
