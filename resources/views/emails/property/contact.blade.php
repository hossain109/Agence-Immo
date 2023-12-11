<x-mail::message>
# Nouvelle demande de contact

Une Nouvelle demande de contact a ete envoyé pour le bien <a href="{{ route('biens.show',['slug'=>$property->getSlug(),'property'=>$property]) }}">{{ $property->title }}</a>

-Prenom: {{$data['prenom']}}
-Nom: {{$data['nom']}}
-Téléphone: {{$data['telephone']}}
-Email: {{$data['email']}}

**Message**<br>

Message:{{$data['message']}}


</x-mail::message>
