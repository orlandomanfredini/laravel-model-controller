@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center py-4">
        @foreach ($movies as $movie)
            <div class="col-5 d-flex justify-content-center py-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$movie->title}}</h5>
                        <span>{{$movie->vote}}</span>
                        <span>{{$movie->nationality}}</span>
                        <h5>{{$movie->original_title}}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection