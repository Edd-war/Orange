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
            <div class="col-md-12">
                <br><br>
                    <div class="panel panel-success">
                        <div class="panel-heading">Leave a comment:</div>
                        <div class="panel-body">
                            <form method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="commenter">Commenter</label>
                                    <input type="text" name="commenter" value="" placeholder="your name" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label for="comment">Comment</label>
                                    <textarea name="comment" rows="3" value="" placeholder="type your comment..." class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="send" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                <br><br>
                @foreach($comments as $item)
                    <div class="media">
                        <div class="media-left">
                            <img src="https://www.w3schools.com/bootstrap/img_avatar1.png" class="media-object" style="width:60px">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">{{$item->commenter}}</h4>
                            <p>{{$item->comment}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
