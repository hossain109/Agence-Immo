@extends('admin.admin')

@section('title','Tous nous option')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            @yield('title')
            <a href="{{route('admin.option.create')}}" class="btn btn-primary">Ajouter une Otpion</a>
        </div>
       
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Option</th>
                    <th class="text-end">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($options as $option)
                    <tr>
                        <td>{{ $option->name }}</td>
                        <td>
                            <div class="gap-2 text-end">
                                <a class="btn btn-primary" href="{{route('admin.option.edit',$option)}}"> Modification</a> 
                                <form class="d-inline" action="{{ route('admin.option.destroy',$option) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Suprimmer</button>
                                </form>
                                
                            </div>
  
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $options->links() }}

    </div>

@endsection
    