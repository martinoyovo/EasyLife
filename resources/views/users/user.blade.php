<div class="row mt-4">
	@foreach($users as $user)
		<div class="col-md-4 mb-2">
			<div class="card">
				<h5 class="card-title">
					{{$user->name}}
				</h5>
			</div>
		</div>
	@endforeach
</div>