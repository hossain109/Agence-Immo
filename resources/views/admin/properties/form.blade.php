@extends('admin.admin')

@section('title', $property->exists?"Modifier mon bien":"Creer un bien")

@section('content')
    
<h1>@yield('title')</h1>

<form class="vstack gap-2" action="{{ route($property->exists? 'admin.property.update':'admin.property.store',$property) }}" method="post">

@csrf
@method($property->exists? 'put':'post')

<div class="row">
    @include('shared.input',['label'=>'Titre','class'=>'col mb-2','placeholder'=>'Entrez titre' ,'name'=>'title','id'=>'title', 'value'=>$property->title])

    <div class="col row">
        @include('shared.input',['label'=>'Surface','type'=>'number','class'=>'col','placeholder'=>'Entrez surface','name'=>'surface','id'=>'surface','value'=>$property->surface])
        @include('shared.input',['label'=>'Price','class'=>' col ','type'=>'number','placeholder'=>'Entrez price', 'name'=>'price','id'=>'price','value'=>$property->price])
    </div>
</div>

    @include('shared.input',['label'=>'Description','type'=>'textarea', 'placeholder'=>'Entrez Description','name'=>'description','id'=>'description', 'value'=>$property->description])

<div class="row">
    @include('shared.input',['label'=>'Rooms','type'=>'number','class'=>'col','placeholder'=>'Entrez rooms', 'name'=>'rooms','id'=>'rooms','value'=>$property->rooms])
    @include('shared.input',['label'=>'Bedrooms','type'=>'number','class'=>'col','placeholder'=>'Entrez bedrooms', 'name'=>'bedrooms','id'=>'bedrooms','value'=>$property->bedrooms])
    @include('shared.input',['label'=>'Floor','type'=>'number','class'=>'col','placeholder'=>'Entrez floor', 'name'=>'floor','id'=>'floor','value'=>$property->floor])
</div>

<div class="row">
    @include('shared.input',['label'=>'City','class'=>'col','placeholder'=>'Entrez city', 'name'=>'city','id'=>'city','value'=>$property->city])
    @include('shared.input',['label'=>'Address','class'=>'col','placeholder'=>'Entrez address', 'name'=>'address','id'=>'address','value'=>$property->address])
    @include('shared.input',['label'=>'Postal code','class'=>'col','placeholder'=>'Entrez postal code', 'name'=>'postal_code','id'=>'postal_code','value'=>$property->postal_code])
</div>
@php
    $idsoption = $property->options()->pluck('id');
@endphp
<div class='form-group' >
    <label for="option" class="mb-2">Option Name</label>
    <select name="option[]" id="option" class="form-control @error('option') is-invalid @enderror" multiple>
        @foreach ($options as $option)
            <option value="{{ $option->id }}" @selected($idsoption->contains($option->id))  >{{ old('name',$option->name)}}</option>
        @endforeach
    </select>
</div>
<div>
 @error('option')
    <div class="valid-feedback">{{ $message }}</div>
    @enderror
</div>
@php
    $idsimage = $images->pluck('id');
@endphp
<div class='form-group' >
    <label for="alt" class="mb-2">Nom de image</label>
    <select name="picture_id" id="alt" class="form-control">
        @foreach ($images as $image)
            <option value="{{ $image->id }}" @selected($image->id == $property->picture_id) >{{ old('alt',$image->alt)}}</option>
        @endforeach
    </select>
</div>

@include('shared.checkbox',['label'=>'Vendu', 'name'=>'sold','id'=>'sold','value'=>$property->sold])

<div>
    <button type="submit" class="btn btn-primary">
        @if ($property->exists)
            modifier
        @else 
        Créer
        @endif
    </button>
</div>

</form>

<h2>Listes des Biens</h2>
<a class="btn btn-primary" href="{{ route('admin.property.index')}}">Listes</a>

@endsection