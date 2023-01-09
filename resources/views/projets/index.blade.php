@extends('projets.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Devoir (Gestion de Projet)</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/projet/create') }}" class="btn btn-success btn-sm " title="Ajouter un Projet">
                            Ajouter
                        </a>
                        <br> <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Date Debut</th>
                                        <th>Date de Fin</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($projets as $item)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $item->nom}}</td>
                                        <td>{{ $item->date_debut}}</td>
                                        <td>{{ $item->date_fin}}</td>
                                        <td>
                                            <a href="{{ url('/projet/'.$item->id)}}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Information</button></a>
                                        </td>
                                    </tr>
                                   @endforeach 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection    