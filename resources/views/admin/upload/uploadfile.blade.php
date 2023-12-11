@extends('admin.admin')

@section('title','Upload image')
    
@section('content')
<div class="container">
    <div class="text-center fs-3 mb-3">
        @yield('title')
    </div>

@include('flash.message')
<div class="text-center form-group">
    <p class="h5" id="error" name="error"></p>
<form action="javascript:void(0)" method="post" enctype="multipart/form-data">
    <div class="form-group ">
        <label for="alt">Nom de Image: </label>
        <input type="text" name="alt" id="alt" class="form-control w-50 d-inline mb-2" value="{{old('alt',$image->alt)}}"  required >
    </div>
    <input class="form-control w-50 d-inline" type="file" name="path" id="path" >
   <button class="btn btn-primary"  onclick="uploadFile()" id="btnSubmit" name="btnSubmit">

    @if ($image->id)
        Modification
    @else
        Ajouter Image
    @endif

</button>
</form> 
   <p class="fs-5" id="onUploadProgress"></p>
</div>

<div class="text-right mt-5">
<h2>Listes des Images</h2>
<a class="btn btn-primary" href="{{ route('admin.image.display')}}">Listes</a>  
</div>
@endsection