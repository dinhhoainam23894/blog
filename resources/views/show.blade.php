<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>User Edit In ID = {{ $id }}</h1>
	@foreach ($edit as $list => $value)
		<li>{{ $list }} : {{ $value }}</li>
	@endforeach
</body>
</html>