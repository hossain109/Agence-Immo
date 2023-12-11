
@extends('Base')

@section('title',$property->title)

@section('content')

<div class="card mt-4">
    <div class="card-title">
        <h3>@yield('title')</h3>
    </div>
    <div class="card-body">
        <p>{{$property->rooms}} pièce(s) - {{$property->surface}} m² </p>

        <div class="bold text-primary">
            {{ number_format($property->price ,thousands_separator:'') }}€
        </div>
    </div>
</div>

<hr>

@include('flash.message')

<div class="mt-4">
 <h4>Intéressé par ce bien ?</h4>
 <form action="{{ route('biens.contact',$property) }}" method="post" class="vstack gap-3 mb-5">
    @csrf
    <div class="row form-group">
        <div class="col">
            <label for="prenom">Prenom</label>
            <input type="text" class="form-control" name="prenom" id="prenom">
        </div>
        <div class="col">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" name="nom" id="nom">
        </div>
    </div>
        <div class="row form-group">
            <div class="col">
                <label for="telephone">Téléphone</label>
                <input type="number" class="form-control" name="telephone" id="telephone">
            </div>
            <div class="col">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="message">Votre message</label>
                <textarea  class="form-control" row="3" col="30" name="message" id="message"></textarea>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Nous contacter</button>
        </div>
      
 </form>
</div>
<div class="mt-4">
    <p>{{ nl2br($property->description) }}</p>
</div>
<div class="row mb-5">
    <div class="col-8">
        <h2>Caractéristique</h2>
        <table class="table table-striped">
            <tr>
                <td>Surface habitable</td>
                <td>{{ $property->surface }}m²</td>
            </tr>
            <tr>
                <td>Pièces</td>
                <td>{{ $property->rooms }}</td>
            </tr>
            <tr>
                <td>Chambres</td>
                <td>{{ $property->bedrooms }}</td>
            </tr>
            <tr>
                <td>Etage</td>
                <td>{{ $property->floor?: 'rez de chaussez' }}</td>
            </tr>
            <tr>
                <td>Localisation</td>
                <td>
                    {{$property->address}}
                    {{$property->city}}-{{$property->postal_code}}
                </td>
            </tr>
        </table>
    </div>
    <div class="col-4">
        <h2>Spécification</h2>
        <ul class="list-group">
            @foreach ($property->options as $option)
                <li class="list-group-item">{{ $option->name }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection



