<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
	<div class="row">
	<h2>New Post</h2><br>
		<form action="{{ route('home.store') }}" method="POST" enctype="multipart/form-data" file="true" class="form-horizontal" role="form">
				<div class="form-group">
		            <label>Title</label>
		            <input type="text" name="title" class="form-control" placeholder="title">
		        </div>
		        <div class="form-group">
		            <label>Images:</label>
		            <input type="file" name="image">
		        </div>
		        <div class="form-group">
		            <label>Content</label>
		            <br>
		            <textarea name="content" cols="160" rows="10"></textarea>
		        </div>
		        <div class="form-group">
		            <label>Create At</label>
		            <input type="text" name="create_at" class="form-control" placeholder="Email">
		        </div>
		        {{ csrf_field() }}
       			<button type="submit" class="btn btn-primary">Add</button>
				
		</form>
	</div>
</div>
</body>

</html>