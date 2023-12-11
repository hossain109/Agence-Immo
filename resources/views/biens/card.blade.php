

<div class="card mb-2">
    <a  href="{{ route('biens.show',['slug'=>$property->getSlug(),$property]) }}"> <img class="w-100" src="{{asset('storage/'.$property->picture->path)}}" alt="{{$property->picture->alt}}"></a>
   
    <div class="card-title text-center mt-3">
        <a class="text-decoration-none fs-4 pt-2" href="{{ route('biens.show',['slug'=>$property->getSlug(),$property]) }}">{{ $property->title }}</a>

    </div>
    <div class="card-body">
        <p class="card-text text-justify">{{ $property->description }}</p>
        <p>{{ $property->surface }} m² - {{ $property->city }}({{ $property->postal_code }})</p> 
        <p>{{ $property->address }}</p> 
        <div class="text-primary bold" style="font-size: 1.4rem">
           {{ number_format($property->price,thousands_separator:'') }}€
        </div><span class="pe-0">{{$property->sold?'Vendu':''}}</span>
    </div>
</div>