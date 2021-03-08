@extends('layouts.app')
@section('content')
    <form action="{{route('save-price')}}" method="post">
        @csrf
        <div class="form-group row">
            <label for="price_item" class="col-md-2 col-form-label">Enter price</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="price_item" name="price_item" required="" placeholder="Enter price to save">
            </div>
        </div>
        <div class="col-form-group row mt-2">
            <label for="parent_service" class="col-md-2 col-form-label">Correspondant service for the price </label>
            <div class="col-md-10">
                <select class="form-control" name="parent_service" id="parent_service">
                    @forelse($services as $service)
                        <option value="{{$service->id}}">{{$service->title}}</option>
                    @empty
                        <center>No price in the database</center>
                    @endforelse
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-md-2 col-form-label"></label>
            <div class="col-md-10">
                <button class="btn btn-primary" type="submit">
                    Save New price
                </button>
            </div>
        </div>
    </form>
@endsection
