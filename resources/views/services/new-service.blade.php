@extends('layouts.app')
@section('content')
<form action="{{route('save-service')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label for="service_title" class="col-md-2 col-form-label">Enter Service Title</label>
        <div class="col-md-10">
            <input type="text" class="form-control" id="service_title" name="service_title" required="" placeholder="Enter service title">
        </div>
    </div>

    <div class="form-group row">
        <label for="service_image" class="col-md-2 col-form-label">Enter Service Image</label>
        <div class="col-md-10">
            <input type="file" class="form-control" id="service_image" name="service_image" required placeholder="Enter image url">
        </div>
    </div>
    <div class="col-form-group row mb-2">
        <label for="service_category" class="col-md-2 col-form-label">Enter service category</label>
        <div class="col-md-10">
            <select class="form-control" name="service_category" id="service_category">
                <option value="">Sélectionner la catégorie</option>
                @forelse($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @empty
                    <center>Any category in the database</center>
                @endforelse
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="service_description" class="col-md-2 col-form-label">Enter Service Description</label>
        <div class="col-md-10">
            <textarea placeholder="Enter service description here" class="form-control" name="service_description" id="service_description" cols="30" rows="10"></textarea>
        </div>
    </div>
    <div class="form-group row mt-10">
        <label  class="col-md-2 mt-2 col-form-label"></label>
        <div class="col-md-10">
            <button class="btn btn-primary" type="submit">
                Save New Service
            </button>
        </div>
    </div>
</form>
@endsection
