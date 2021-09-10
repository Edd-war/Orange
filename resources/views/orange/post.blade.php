@extends('layouts.orange')

@section('content')
    <div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
                <h1>{{$post->title}}</h1>
                <hr>
                <img class="img-responsive" src="{{asset('images/posts/')}}/{{$post->id}}.{{$post->image}}" alt="">
                <p class="text-left mt-3 post-txt">
                    <span>Author: {{$post->author}}</span>
                    <span class="float-right">Publicado: {{$post->date}}</span>
                </p>
                <p class="text-left">
                    {{$post->content}}
                </p>
            </div>
        </div>
    </div>
@endsection
