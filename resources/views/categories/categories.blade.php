@extends('layouts.app')

@section('content')
		<form action="{{route('save-category')}}" method="post">
		@csrf
			<div class="form-group row">
				<label for="category_title" class="col-md-2 col-form-label">Category Title</label>
				<div class="col-md-10">
					<input type="text" class="form-control" id="category_color" name="category_title" required="" placeholder="Category Title">
				</div>
			</div>
			<div class="form-group row">
				<label for="category_color" class="col-md-2 col-form-label">Category Color</label>
				<div class="col-md-10">
					<input type="color" class="form-control" id="category_color" name="category_color" required="" placeholder="Category Color">
				</div>
			</div>
			<div class="form-group row">
				<label  class="col-md-2 col-form-label"></label>
				<div class="col-md-10">
				<button class="btn btn-primary" type="submit">
					Save New category
				</button>
			</div>
			</div>
		</form>
	<div class="row">
		@foreach($categories as $category)
	    <div class="col-md-3 mt-2 mb-2">
	        <div class="card">
	            <div class="card-body">
	                {{$category->title}}
		            <div style="background-color: {{
						$category->color}}; width: 50px; height: 25px;" class="mt-2">
					</div>
				</div>
	        </div>
	    </div>
	    @endforeach
	</div>
@endsection
