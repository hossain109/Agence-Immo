.
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
    <!-- Title -->
    <title>@yield('title') | Administration</title>

    <style>
        @layer reset{
            button{
                all:unset;
            }
        }
    </style>

</head>

<body>
@php
    $route = request()->route()->getName();
    //dd(request()->url());
@endphp
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Agence</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a @class(['nav-link','active'=>str_contains($route,'property.')]) href="{{ route('admin.property.create') }}">Gerer un Bien </a>
                </li>
                <li class="nav-item ">
                    <a @class(['nav-link','active'=>str_contains($route,'option.')]) class="nav-link" href="{{ route('admin.option.create') }}">Gerer Une Option </a>
                </li>
                <li class="nav-item ">
                    <a @class(['nav-link','active'=>str_contains($route,'.upload')]) class="nav-link" href="{{ route('admin.upload') }}">Gerer image </a>
                </li>
            </ul>
            <div class="ms-auto">
                @auth
                
                    <ul class="navbar-nav">
                        <li><span class="fs-4 me-4">{{ Illuminate\Support\Facades\Auth::user()->name }}</span></li>
                        <li class="nav-item">
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="nav-link">Se déconnexion</button>
                            </form>
                        </li>
                    </ul>
                @endauth
            </div>
            </div>
        </div>
      </nav>

    <div class="container p-5">
 
        @include('flash.message')

       @yield('content')          
    </div>
    {{-- <script src="{{ asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery-3.7.1.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/axios.min.js')}}" type="text/javascript"></script>
     <script src="{{ asset('js/upload.js')}}" type="text/javascript"></script> --}}
     <script src="{{ url('public/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('public/js/jquery-3.7.1.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('public/js/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{ url('public/js/axios.min.js')}}" type="text/javascript"></script>
     <script src="{{ url('public/js/upload.js')}}" type="text/javascript"></script>
     <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
    <script>
        new TomSelect('select[multiple]',{ plugins: {remove_button: {title: "suprimmer"}}})
        new TomSelect('#alt',{plugins:{remove_button:{title:'suprimer'}}})
    </script>
</body>

</html>