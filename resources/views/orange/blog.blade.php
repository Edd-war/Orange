@extends('layouts.orange')

@section('content')
	<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				@foreach($posts as $item)
					<div class="col-lg-4 col-md-4">
						<div class="fh5co-blog animate-box">
							<img class="img-responsive" style="height: 250px" src="images/posts/{{$item->id}}.{{$item->image}}" alt="">
							<div class="blog-text">
								<h3><a href=""#>{{$item->title}}</a></h3>
								<span class="posted_on">{{$item->date}}</span>
								<span class="comment"><a href="">{{Arr::random([2,6,11,12,15,16,17,18,19,20,21,22,25,28])}}<i class="icon-speech-bubble"></i></a></span>
								<p>{{Str::limit($item->content, 70, '...')}}</p>
								<a href="{{route('post', $item->id)}}" class="btn btn-primary">Read More</a>
								<hr>
								<div class="row">
									<div class="col-6 text-left">
										<span class="card-txt-author">{{$item->author}}</span>
									</div>
								</div>
							</div> 
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection
