@extends('layouts.app')
@section('content')
    <div class="row mt-4">
        <div class="col-md-8 mb-2">
            <div class="card">
                <h5 class="card-title">
                    {{$mode_payment->payment_type}}
                </h5>
                <h6 class="card-subtitle">
                    N° {{$mode_payment->id}}
                </h6>
            </div>
        </div>
    </div>
@endsection
