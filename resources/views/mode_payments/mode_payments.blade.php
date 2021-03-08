@extends('layouts.app')


@section('content')
    <form action="{{route('save-payment')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="mode_payment" class="col-md-2 col-form-label">Enter payment mode</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="mode_payment" name="mode_payment" required placeholder="Enter new payment mode">
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-md-2 col-form-label"></label>
            <div class="col-md-10">
                <button class="btn btn-primary" type="submit">
                    Save Payment Mode
                </button>
            </div>
        </div>
    </form>
    <div class="row">
        @forelse($mode_payments as $mode_payment)
            <div class="col-md-2 mt-2 mb-2">
                <div class="card">
                    <div class="card-body">
                        {{$mode_payment->payment_type}}
                    </div>
                </div>
            </div>
        @empty
            <center style="font-size: 23px; alignment: center;">Aucun mode de payement ajouté !</center>
        @endforelse
    </div>
    <br>
@endsection
