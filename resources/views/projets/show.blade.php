@extends('projets.layout')
@section('content')

<div class="card" style="margin:20px">
    <div class="card-header">Details du projets</div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Nom : {{ $projets ->nom}}</h5>
            <p class="card-text">Description : {{ $projets->description}}</p>
            <p class="card-text">Date Debut : {{ $projets->date_debut}}</p>
            <p class="card-text">Date Fin : {{ $projets->date_debut}}</p>
        </div>
        <div class="card-header">
            <a href="{{ url('/projeto/'.$projets->id)}}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Ajouter une Phase</button></a>
        </div>
    </div>
</div>