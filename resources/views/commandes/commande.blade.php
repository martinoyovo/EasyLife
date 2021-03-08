@extends('layouts.app')

@section('content')
	<!-- <div class="row mt-4">
		<div class="col-md-4 mb-2">
	        <div class="card">
	            <div class="card-body">
	                <h5 class="card-title">{{$command->date}}</h5>
	                <p>{{$command->adress}}</p>
				</div>
	        </div>
	    </div>
	</div -->
	<br>
	<h3>Détails de la livraison N°{{$command->id}}</h3>
	<br>

	<ul>
		<ol style="font-size: 20px;">Commandé par {{$command->user->name}}</ol>

		<ol>Adresse de livraison {{$command->adress}}</ol>
		<ol>
			Type de service {{$command->service}}
		</ol>
		<ol>
			Date de livraison {{$command->date}}
		</ol>
		<ol>
			Mode de paiement {{$command->payment->payment_type}}
		</ol>
		<ol>
			Prix du service {{$command->prix->item}}
		</ol>
	</ul>
	<p>Mise à jour le {{$command->updated_at}}</p>
@endsection
