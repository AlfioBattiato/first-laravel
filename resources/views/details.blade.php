@include('components.init')
@include('components.nav')

<div class="container">

    <h1 class="mt-2">Libro</h1>

    <div class="card" style="width: 18rem;">
        <img src="{{$books->img}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$books->title}}</h5>
            <p class="card-text">Price: {{$books->price}}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

   



</div>
</div>

@include('components.footer')
