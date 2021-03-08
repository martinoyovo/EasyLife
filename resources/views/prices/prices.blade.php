@extends('layouts.app')


@section('content')
	<div class="row">
		@forelse($prices as $price)
	    <div class="col-md-3 mt-2 mb-2">
	        <div class="card">
	            <div class="card-body" style="font-size: 22px;">
	                Prix : {{$price->item}}
				</div>
                <div style="font-size: 14px;" class="card-body">
                    Service correspondant : {{$price->parent_service}}
                </div>
	        </div>
	    </div>
            @empty
            <center style="font-size: 23px; alignment: center;">Aucun prix dans la base !</center>
	    @endforelse
	</div>
	<br>
@endsection
