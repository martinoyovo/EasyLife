@extends('layouts.app')
@section('content')
<form action="{{route('save-commande')}}">
	@csrf
	<div class="row mt-4">
        <div class="col-md-12 mb-2">
            <div class="card">
                <div class="card-body">
                    <div class="col-form-group row mt-2">
                        <label for="command_address" class="col-md-2 col-form-label">Command Address</label>
                        <div class="col-md-10">
                            <input type="text" required name="command_address" class="form-control" id="command_address" placeholder="Command adress here">
                        </div>
                    </div>
                    <div class="col-form-group row mt-2">
                        <label for="command_date" class="col-md-2 col-form-label">Command Date</label>
                        <div class="col-md-10">
                            <input type="date" required name="command_date" class="form-control" id="command_date" placeholder="Command date here">
                        </div>
                    </div>
                    <div class="col-form-group row mt-2">
                        <label for="command_service_type" class="col-md-2 col-form-label">Command Service Type</label>
                        <div class="col-md-10">
                            <select class="form-control" name="command_service_type" id="command_service_type">
                                @foreach($services as $service)
                                    <option value="{{$service->id}}">{{$service->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-form-group row mt-2">
                        <label for="command_price" class="col-md-2 col-form-label">Command Service Price</label>
                        <div class="col-md-10">
                            <select class="form-control" name="command_price" id="command_price">
                                @foreach($prices as $price)
                                    <option value="{{$price->id}}">{{$prices->item}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-form-group row mt-2">
                        <label for="mode_payment" class="col-md-2 col-form-label">Payment Mode</label>
                        <div class="col-md-10">
                            <select class="form-control" name="mode_payment" id="mode_payment">
                                @foreach($mode_payments as $mode_payment)
                                    <option value="{{$mode_payment->id}}">{{$mode_payment->payment_type}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-md-2 col-form-label"></label>
                    <div class="col-md-10">
                        <button class="btn btn-primary" type="submit">
                            Save New Ship
                        </button>
                    </div>
                </div>
            </div>
        </div>
	</div>
</form>
@endsection
