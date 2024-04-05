@extends('Base')

@section('title',"accueil")
    
@section('content')
    
<div class="parallax text-center">

<div class="" style="transform: translate(0%, 80%)">
    <h1 class="align-middle display-4 text-white fw-bold mb-5">Agence immobiliere</h1>
    <p class="display-3 "><span class="ms-5 text-uppercase fw-bold text-primary">Acheter</span><span class="ms-5 text-uppercase fw-bold text-primary">Vendre</span><span class="ms-5 text-uppercase fw-bold text-primary">Louer</span></p>
</div>

</div>
<p class="text-uppercase fw-bold display-6 p-5">
    On ne va pas se mentir, louer c'est en attendant d'acheter et on va pas y passer toute sa vie ; néanmoins on veut quand même s'y sentir bien et faire le bon choix !
</p>
<div class="p-5">
    <p>Voici les étapes clés pour trouver sa location :</p>
<ul>
    <li>
        <span><strong>Choisir une location meublée, non-meublée, une colocation ?</strong></span>
    </li>
</ul>
<p>Cette décision vous permettra de vous orienter et de décider du budget alloué à votre futur chez-vous</p>
<ul>
    <li>
        <span><strong>Etablir un budget</strong></span>
    </li>
</ul>
<p>Quand on établit un budget il faut bien penser à vos finances habituelles et surtout s’assurer que vous pourrez couvrir des frais inhabituels en cas de problèmes liés à votre location</p>
<ul>
    <li>
        <span><strong>Déterminer des critères réalistes de recherche en fonction de ce que vous permet votre budget par rapport au marché </strong></span>
    </li>
</ul>
<p>Critères impératifs à respecter et ceux sur lesquels vous êtes en mesure de faire des concessions.</p>
<ul>
    <li>
        <span><strong>Préparer son dossier de location</strong></span>
    </li>
</ul>
<p>Pièce d’identité, justificatif de domicile, document attestant votre activité professionnelle et un autre prouvant vos ressources (bulletins de salaires, bourse, avis d’imposition…)</p>
<ul>
    <li>
        <span><strong>Effectuer des visites</strong></span>
    </li>
</ul>
<p>Commencez par sélectionner avec votre conseiller agence immobiliere les biens qui vous plaisent et qui sont dans vos prix. Il est très important de se créer des alertes pour être sûr de ne pas louper une opportunité. Selon la ville dans laquelle se base votre recherche et votre budget, les biens correspondant à votre recherche peuvent être rares et/ou disparaitre du marché rapidement !</p>
<ul>
    <li>
        <span><strong>Etat des lieux d'entrée et de sortie et signature de bail</strong></span>
    </li>
</ul>
<p>Nos agents agence immobiliere seront présents pour vous accompagner durant ces étapes.</p>

<p class="text-center p-3"><img src="{{url('public/images/house.jpg')}}" height="50%" width="70%" alt="house"></p>

<p>Vous souhaitez louer un bien immobilier en France ou dans les DROM COM ? Nos conseillers agence immobiliere l’Immobilier vous accompagnent dans votre recherche de location (étudiante, colocation, saisonnière.). Parmi un large choix de maisons, appartements, parkings, locaux commerciaux… vous trouverez sûrement votre bonheur !</p>

<p><strong>Quels sont les avantages à passer par une agence agence immobiliere ?</strong></p>

<p>Le réseau, fort de son concept d'immobilier garanti propose des solutions qui vous permettront de réaliser votre projet en toute sérénité. Accompagné par l’un de nos professionnels formés, votre projet sera étudié et suivi par un expert dédié afin que votre expérience agence immobiliere soit optimale.<br />
    Votre agent est là pour vous conseiller précisément sur le meilleur équilibre entre vos recherches, vos critères, vos besoins et votre budget …</p>

<p><strong>En bref, agence immobiliere s'occupe de tout pour vous et avec vous !</strong></p>
</div>

<p class="text-center"><a class="btn btn-primary" href="{{route('biens.index')}}">Contactez-nous</a></p>

@endsection
