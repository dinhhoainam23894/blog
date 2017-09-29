<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="_token" content="{!! csrf_token() !!}" />
	<title>Create</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
	<script src="{{ asset('js/jquery.min.js') }}"></script>
</head>
<body>
<div class="container">
	<div class="row">
	<h2>New Post</h2><br>

		<form action="{{ route('blog.store')}} " method="POST" enctype="multipart/form-data" file="true" class="form-horizontal" role="form" id="form">
				<div class="form-group">
		            <label>Title</label>
		            <input type="text" name="title" class="form-control" placeholder="title" id="title">
		        </div>
		         <div class="form-group">
		            <label>Description</label>
		            <br>
		            <textarea name="description" cols="160" rows="10" id="description"></textarea>
		        </div>
		        <div class="form-group">
		            <label>Content</label>
		            <br>
		            <textarea name="content" cols="160" rows="10" id="content"></textarea>
		        </div>
		       
		        <div class="form-group">
		        <select class="form-control" name="user_id">
								@foreach($data as $row){

								 ?>
									<option value="{{$row->id}}">{{$row->name}}</option>
								@endforeach
								</select>
				</div>
		       {{--  {{ csrf_field() }} --}}
       			<button type="submit" class="btn btn-primary" id="tes">Add</button>
				
		</form>
	</div>
</div>
</body>
	

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}

<script>
	$(document).ready(function(){
		$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

		$('#form').submit(function(e){
			e.preventDefault();
			var title = $('#title').val();
			var description = $('#description').val();
			var content = $('#content').val();
			var user_id = $('select[name=user_id]').val();

			$.ajax({
				url: '{{ route('blog.store' )}}',
				type: 'POST',
				dataType: 'JSON',
				data: {'title': title,'description':description,'content':content,'user_id':user_id},
			})
			.done(function(data) {
				console.log(data);
			})
			.fail(function() {
				console.log("error");
			});
			
			
			

		});


	});	

</script>

</html>

