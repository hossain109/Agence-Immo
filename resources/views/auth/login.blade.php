@extends('Base')

@section('title','Authentificion')

@section('content')

<div class="container ">
<h1 class="text-center">@yield('title')</h1>

@include('flash.message')

    <form action="{{ route('biens.dologin') }}" class="mt-4 mb-4" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" placeholder="Entrez email" name="email" id="email" class="form-control w-50 mt-2">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" placeholder="Entrez password" name="password" id="password" class="form-control w-50 mt-2">
        </div>
        <div class="form-group mt-2">
        <button type="submit" class="btn btn-primary">Connexion</button>
        </div>

    </form>
</div>

@endsection