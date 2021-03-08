@extends('layouts.app')

@section('content')
    <h3>Détails du service {{$service->id}}</h3>
    <br>
    <div class="col-md-8">
        <img class="img img-responsive" src="{{asset($service->image)}}" width="100%" height=400>
    </div>
    <ul>
        <br>
        <ol ><h5>Nom du service : {{$service->title}}</h5> </ol>

        <ol>
            <p>
                <h5>Description</h5>
                {{$service->description}}
            </p>
        </ol>

        <ol>
            <h5>Catégorie d'appartenance : {{$service->category->title}}</h5>
        </ol>
        <ol>
            <p>
                <h5>Tous les prix du service </h5>
                <ul>
                    @forelse($prices as $price)
                        <li>{{$price->item}}</li>
                    @empty
                        Aucun prix pour l'instant <br>
                        <a href="{{route('add-price')}}">Ajouter un prix</a>
                    @endforelse
                </ul>
            </p>
        </ol>
    </ul>
    <p>Mis à jour le {{$service->updated_at}}</p>
@endsection
