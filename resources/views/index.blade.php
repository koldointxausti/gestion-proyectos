<!DOCTYPE html>
<html>
<head>
	<title>Koldo Intxausti</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <script src="{{asset('/lib/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap/bootstrap.min.js')}}"></script>
    <style>
    	*{margin:0;padding:0;}
    	h1{
    		text-align: center;
    		height:20vh;
    		display: flex;
    		align-items: center;
    		justify-content: center;
    	}
    	ul{
    		height:60vh;
    		justify-content: space-around;
    		display: flex;
    		align-items: center;
    	}
    	li{
    		list-style-type: none;
    		height:5em;
    		width:max-content;
    		margin: 1em auto;
    		display: flex;
    		align-items: center;
    	}
    	a{
    		width:100%;
    		height: 100%;
    		display: flex;
    		align-items: center;
    		box-shadow: 1px 1px 7px gray;
    		padding:1em 2em;
    		border-radius: 2em;
    		color:#7d7d7d;
    		font-weight: bold;
    	}
    	a:hover{
    		background-color: #cccccc;
    		color:black;
    		text-decoration: none;
    	}
    	img{
    		height:5em;
    	}
    </style>
</head>
<body>
  <h1>Koldo Intxausti</h2>
  <ul>
	  <li class="logo"><a href="{{route('index')}}"><img src="{{asset('/img/logo.svg')}}"  ></a></li>
	  <li><a href="{{route('empleados')}}">Empleados</a></li>
	  <li><a href="{{route('proyectos')}}">Proyectos</a></li>
	  <li><a href="{{route('departamentos')}}">Departamentos</a></li>
  </ul>
</body>
</html>
