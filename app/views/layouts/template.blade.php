<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>

	{{HTML::style('assets/css/bootstrap.min.css')}}
	{{HTML::style('assets/css/dashboard.min.css')}}
	{{HTML::style('assets/css/normalize.css')}}
	{{HTML::style('assets/js/jquery.js' )}}
	{{HTML::style('assets/js/bootstrap.min.js' )}}
	{{HTML::style('assets/js/jquery.js' )}}
</head>
<body class="">
    @include('menu.menu')
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <ul class="nav nav-sidebar">
            <li>{{link_to('principal', 'Principal')}}</li>
            <li class="active"><a href="#">Novo post</a></li>
            <li><a href="#">Usuarios</a></li>
            <li>{{link_to('comentario', 'Comentarios')}}</li>
          </ul>
        </div> {{--col-sm-3--}}
    <div class="col-sm-9 col-md-10 main">
    <p>
    {{--<header><h2>Blog</h2></header>--}}
	<div id='content'>
    @yield('content')
	</div> {{--/id content --}}

	</div> {{--col-md-9 --}}
	</div> {{--/row --}}
</div> {{--fim container--}}
</body>
</html>