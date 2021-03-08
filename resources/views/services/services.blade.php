@extends('layouts.app')

@section('content')
    <div class="row">
        @forelse($services as $service)
            <div class="col-md-4 mt-2 mb-2">
                <div class="card">
                    <img src="{{asset($service->image)}}" class="img img-responsive">
                    <div class="card-title ml-1 mt-2">
                        Libellé : {{$service->title}}
                    </div>
                    <div style="font-size: 14px;" class="card-text ml-1">
                        Decription : {{$service->description}}
                    </div>
                    <a class="mt-2 mr-auto mb-2 ml-2 btn btn-primary" href="{{route('show-service', ['id' => $service->id])}}">Détails</a>
                </div>
            </div>
        @empty
            <center style="font-size: 23px; alignment: center;">
                Aucun service dans la base
            </center><br>
            <a href="{{route('add-service')}}" class="ml-4 btn btn-primary">
                New service
            </a>
        @endforelse
    </div>
    <br>
    <div class="col-md-12">
        {{
            $services->links()
        }}
    </div>
@endsection
