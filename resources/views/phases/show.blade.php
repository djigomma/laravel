@extends('projets.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Ajouter une Phase
    </div>
    <div class="card-body">
        <form action="{{ url('projet')}}" method="post">
            {!! csrf_field() !!}
            <label for="">Nom</label> <br>
            <input type="text" name="nom" id="nom" class="form-control"> <br>
            <label for="">Description</label> <br>
            <input type="text" name="description" id="description" class="form-control"> <br>
            <label for="">Date Debut</label>
            <input type="date" name="date_debut" id="date_debut" class="form-control"> <br>
            <label for="">Date Fin</label>
            <input type="date" name="date_fin" id="date_fin" class="form-control"> <br>
            <input type="submit" value="Enregistrer" class="btn btn-success"> <br>
        </form>
    </div>
</div>

@stop