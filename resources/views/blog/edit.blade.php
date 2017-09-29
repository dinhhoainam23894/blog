<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
</head>
<body>
<div class="container">
	<div class="row">
	<form action="{{ route('blog.update',$edit['id']) }}" method="post" accept-charset="utf-8" enctype="multipart/form-data" file="true">
       
		<div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $edit['title'] }}">
		</div>
		<div class="form-group">
		            <label>Description</label>
		            <br>
		            <textarea name="description" cols="160" rows="10">{{$edit['description']}}</textarea>
		        </div>
		 <div class="form-group">
            <label>Content</label>
			<textarea name="content" class="form-control" cols="160" rows="10">{{ $edit['content'] }}</textarea>
		</div>
		<div class="form-group">
            <label>Image</label>
		  	<input type="file" name="image">
		 </div>
		<div class="form-group"> 
								<label class="control-label">User ID</label> 
								<select class="form-control" name="user_id">
								
								 @foreach ($user as $value)
							
									<option value="{{$value->id}}" @if($value->id == $edit['user_id'])
											selected='selected'
										@endif>{{$value->name}}</option>
								 @endforeach
								</select>
							</div>
		{{csrf_field()}}
        <input type="submit" name="" value="Edit">
        <input type="hidden" name="_method" value="PUT">
    </form>
    </div>
</div>
</body>
</html>