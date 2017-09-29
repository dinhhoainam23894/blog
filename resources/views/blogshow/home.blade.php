@extends('blogshow.header-footer')
@section('container')
	<div class="container">
	<div class="wrapsite-content">
		<div class="main-content">
			<div class="content-left col-md-8">
				@foreach($data as $list)
					<div class="post-outer">
						<div class="images-left">
							<img src="{{ $list['image']}}" alt="">
						</div>
						<div class="detais-left">
							<div class="post-info2">
								{{ $list['id'] }}
							</div>
							<div class="title-info">
								<a href="{{ route('blog.show',$list['id'])}}"><h3>
								{{ $list['title']}}</h3></a>
							</div>
							<div class="post-info">
								<span class="time-info">{{$list['created-at']}}</span>
							</div>
							<div class="content-info">
								<p>{{ $list['content']}}</p>
							</div>
						</div>
					</div>
				@endforeach
			
			</div>
			@include('blogshow.first_recent')
		</div>
		{{$data->links()}}
	</div>
</div>
				
				
@endsection