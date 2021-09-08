@extends('layouts.orange')

@section('content')
	<div id="fh5co-services" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				@foreach($services as $item)
					<div class="col-md-4 col-sm-4">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i class="{{$item->icon}}"></i>
							</span>
							<h3>{{$item->name}}</h3>
							<p>{{$item->description}}</p>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection