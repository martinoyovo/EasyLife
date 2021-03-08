@extends('layouts.app')


@section('content')
		<form action="{{route('save-pub')}}" method="post" enctype="multipart/form-data">
		@csrf
			<div class="form-group row">
				<label for="pub_title" class="col-md-2 col-form-label">Enter title or comment</label>
				<div class="col-md-10">
					<input type="text" class="form-control" id="pub_title" name="pub_title" required="" placeholder="Enter title or comment">
				</div>
			</div>
			<div class="form-group row">
				<label for="pub_url" class="col-md-2 col-form-label">Enter image url</label>
				<div class="col-md-10">
					<input type="file" class="form-control" id="pub_url" name="pub_url" required="" placeholder="Enter image url">
				</div>
			</div>
			<div class="form-group row">
				<label  class="col-md-2 col-form-label"></label>
				<div class="col-md-10">
                    <button class="btn btn-primary" type="submit">
                        Save New Pub
                    </button>
			    </div>
			</div>
		</form>
	<div class="row">
		@forelse($pubs as $pub)
	    <div class="col-md-3 mt-2 mb-2">
	        <div class="card">
	        	<img class="card-img-top img-responsive" src="{{asset($pub->url)}}" style="height: 200px;">
	            <div class="card-body" style="font-size: 16px;">
	                {{$pub->title}}
				</div>
	        </div>
	    </div>
        @empty
            <h5>Aucune publicité enrégistrée !</h5>
	    @endforelse
	</div>
	<br>
@endsection
