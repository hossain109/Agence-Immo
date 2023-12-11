@php
    $currentroute = request()->route()->getName();
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
            <a  @class(['nav-link', 'active' =>str_contains ( $currentroute,'.index')]) href="{{route('biens.index')}}"> Biens </a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link text-white rounded-circle border me-2 socialIcon" href="http://"><i class="fa-brands fa-linkedin fa-fade"></i></a></li>
            <li class="nav-item"><a class="nav-link text-white rounded-circle border me-2 socialIcon" href="http://"><i class="fa-brands fa-facebook fa-fade"></i></a></li>
            <li class="nav-item"><a class="nav-link text-white rounded-circle border me-2 socialIcon" href="http://"><i class="fa-brands fa-twitter fa-fade"></i></a></li>
        </ul>
        </div>
    </div>
  </nav>