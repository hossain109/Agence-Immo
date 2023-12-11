<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Fonts Links (Roboto 400, 500 and 700 included) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


    <!-- Title -->
    <title>@yield('title')|Mon Agence</title>
</head>

<body>
   @include('layout.header')
   <div class="container mt-5 mb-5">
    @yield('content')
   </div>

    @include('layout.footer')

</body>

</html>