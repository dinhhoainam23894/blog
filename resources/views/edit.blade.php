<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
	<div class="row">
	<form action="{{ route('home.update',$id) }}" method="post" accept-charset="utf-8" enctype="multipart/form-data" file="true">
       
		<div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $edit['title'] }}">
		</div>
		<div class="form-group">
            <label>Image</label>
		  	<input type="file" name="image">
		 </div>
		 <div class="form-group">
            <label>Content</label>
			<textarea name="content" class="form-control" cols="160" rows="10">{{ $edit['content'] }}</textarea>
		</div>
		 <div class="form-group">
            <label>Create at</label>
			<input type="text" name="create_at" class="form-control" value="{{ $edit['create_at'] }}"></div>
	
		{{csrf_field()}}
        <input type="submit" name="" value="Edit">
        <input type="hidden" name="_method" value="PUT">
    </form>
    </div>
</div>
</body>
</html>