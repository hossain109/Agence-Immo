@extends('admin.admin')

@section('title',$option->exists?'Modification option':'Creation option')

@section('content')
    


<div class="container">
    <div class="text-center fs-5">
        @yield('title')
    </div>

<form action="{{ route($option->exists?'admin.option.update':'admin.option.store',$option) }}" class="mt-2" method="post">
@csrf
@method($option->exists?'put':'post')

    <label for="name" class="mb-2">Option Name</label>
    <div class="form-group">
        <input type="text" class="form-control" name="name" id="name" placeholder="Entrez Option" value="{{ old('name',$option->name) }}">
    </div>
    <div>
        <button  type="submit" class="btn btn-primary mt-2">
            @if ($option->name)
                Modifier
            @else
                Add Option
            @endif
            </button>
    </div>
</form>
</div>
<h2>Listes des Options</h2>
<a class="btn btn-primary" href="{{ route('admin.option.index')}}">Listes</a>
@endsection