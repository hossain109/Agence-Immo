@extends('admin.admin')

@section('title',"Tous nos bien")

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>@yield('title')</h1>
    <a href="{{ route('admin.property.create') }}" class="btn btn-primary">Ajouter Un bien </a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Surface</th>
            <th>Prix</th>
            <th>Ville</th>
            <th>Image</th>
            <th class="text-end">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($properties as $property)
            <tr>
                <td>{{ $property->title }}</td>
                <td>{{ $property->surface }} m²</td>
                <td>{{ number_format($property->price, thousands_separator:'') }}</td>
                <td>{{ $property->city }}</td>
                <td>{{$property->picture->alt}}</td>
                <td>
                    <div class="gap-2 text-end w-100">
                        <a class="btn btn-primary" href="{{ route('admin.property.edit',['property'=>$property]) }}">Modifier</a>
                        <form action="{{ route('admin.property.destroy',$property) }}" class="d-inline" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Suprimer</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


{{ $properties->links() }}


@endsection