@extends('layouts.app')


@section('content')
	<h3>Liste des commandes</h3>

	<div class="row mt-4">
		@forelse($commandes as $commande)
	    <div class="col-md-4 mt-2 mb-2">
	        <div class="card">
	            <div class="card-body">
	            	<h5 class="card-title">Commande {{$commande->id}}</h5>
	            	<p>Date Prévue pour la liraison {{$commande->date}}</p>
	            	<a class="btn btn-primary" href="{{route('show-commande', ['id' => $commande->id])}}">Détails</a>
				</div>
	        </div>
	    </div>
        @empty
            <p style="font-size: 20px; alignment: center;">Aucune commande dans la base !</p>
        @endforelse
	</div>
	<br>
	<div class="col-md-12">
		{{
			$commandes->links()
		}}
	</div>
@endsection
