@extends('Base')

@section('title','Nous dernier biens')


@section('content')

<form action="" class="mt-3 mb-3" method="get">

    <input class=" w-23" type="number" value="{{ $surface['surface']?? '' }}" name="surface" id="surface" placeholder="Surface minimum">
    <input class=" w-23" type="number" value="{{ $rooms['rooms']?? '' }}" name="rooms" id="rooms" placeholder="Nombre de Piece min">
    <input class=" w-23" type="number" value="{{ $input['price']?? '' }}" name="price" id="price" placeholder="Budget max">
    <input class=" w-23" value="{{ $title['title']?? '' }}" name="title" id="title" placeholder="Mot clef">
    <button type="submit" class="btn btn-primary btn-sm flex-grow-0">Recherce</button>
</form>

<div class="container text-center p-5">
    <h1>@yield('title')</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur minus, totam impedit cumque fugit sunt commodi cum beatae iusto repellendus obcaecati doloribus quis? Maxime eveniet aspernatur laudantium architecto molestias error.</p>
</div>



<div class="row mb-3">

@forelse ($properties as $property)
    <div class="col-md-3">
        @include('biens.card')
    </div>
@empty
    <div class="mb-4 col-3">
        Aucun bien à trouvé a votre recherche
    </div>
@endforelse

</div>

{{ $properties->links() }}
@endsection