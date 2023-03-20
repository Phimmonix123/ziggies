@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) >0)
        <div class="card">
        <ul class="list-group list-group-flush">
            @foreach($posts as $nupost)
                <div class="row">
                    <div class="row">
                        <div class="col-md-4">

                            <img style="width: 100%" src="/storage/cover_images/{{$nupost->cover_image}}" alt="">
                        </div>

                    <div class="col-md-8">
                        <h3><a href="/nuposts/{{$nupost->id}}">{{$nupost->title}}</a></h3>
                        <small>Written on {{$nupost->created_at}}</small>
                    </div>
                </div>
            @endforeach
        </ul>
        </div>
    @else

    @endif

@endsection
