@extends('admin.admin')

@section('title', 'Listes des image')

@section('content')
  
<div class="container">
    <div class="d-flex justify-content-end align-items-center mt-5">
        <a href="{{ route('admin.upload') }}" class="btn btn-primary">Ajouter Un image </a>
    </div>

    <h3 class="text-center mt-3 mb-3">@yield('title')</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom de image</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($images as $image)
            <tr>
                <td>{{$image->alt}}</td>
                <td>
                    <div class="text-end">
                        <a href="{{route('admin.image.edit',$image)}}" class="btn btn-info">Modifiction</a>
                    <form action="{{route('admin.image.delete',$image)}}" action="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

{{ $images->links() }}
</div>

@endsection