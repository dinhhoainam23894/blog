<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
</div>
<script src="{{ asset('js/app.js') }}"></script>
<a href="{{ route('blog.create')}}" class="btn btn-primary">Add</a>
	<table class="table table-hover">
		<thead>

			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Description</th>
				<th>Content</th>
				<th>Image</th>
				<th>Author</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($data as $list)
			<tr>
				<td>{{$list->id}}</td>
				<td>{{$list->title}}</td>
				<td>{{$list->description}}</td>
				<td>{{$list->content}}</td>
				<td><img src="{{url("$list->image")}}" alt="" width="100px" height="100px"></td>
				<td>{{ $list->user['name'] }}</td>
				<td><a href="{{ route('blog.edit',$list['id'])}}" class="btn btn-warning">Edit</a></td>
				<td><form action="{{ route('blog.destroy',$list['id'])}}" method="post">
					{{ csrf_field()}}
					<input type="submit" value="Delete">
					<input type="hidden" value="DELETE" name="_method">
				</form></td>
			</tr>
		@endforeach
		</tbody>
	</table>
	{{$data->links()}}
</body>
</html>