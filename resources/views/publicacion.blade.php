<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>{{$pblog->Titulo}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Content -->
								<section>
									<header class="main">
										<h1>{{$pblog->Titulo}}</h1>
									</header>

									<span class="image main"><img src="{{$pblog->Imagen}}" alt="" /></span>

									<p></p>
									<p></p>
									<p></p>

									<hr class="major" />

									<p>{{$pblog->Parrafo1}}</p>
									<p>{{$pblog->Parrafo2}}</p>
									<p>{{$pblog->Parrafo3}}</p>
									<p>{{$pblog->Parrafo4}}</p>
									<p>{{$pblog->Parrafo5}}</p>
									<p>{{$pblog->Parrafo6}}</p>
									<p>{{$pblog->Parrafo7}}</p>
									<p>{{$pblog->Parrafo8}}</p>
									<p>{{$pblog->Parrafo9}}</p>
									<p>{{$pblog->Parrafo10}}</p>
									<p>{{$pblog->Parrafo11}}</p>
									<p>{{$pblog->Parrafo12}}</p>
									<p>{{$pblog->Parrafo13}}</p>
									<p>{{$pblog->Parrafo14}}</p>
									<p>{{$pblog->Parrafo15}}</p>
									<p>{{$pblog->Parrafo16}}</p>
									<p>{{$pblog->Parrafo17}}</p>
									<p>{{$pblog->Parrafo18}}</p>
									<p>{{$pblog->Parrafo19}}</p>
									<p>{{$pblog->Parrafo20}}</p>
									<p>{{$pblog->Parrafo21}}</p>
									
								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="{{route('vista.blog')}}">Inicio</a></li>
										<li>
											<span class="opener">Introduccion a la arquitectura cliente/servidor</span>
											<ul>
												@foreach($pblog1 as $publicblog1)
												<li><a href="{{route('mostrar.pub',$publicblog1['slug'])}}">{{$publicblog1['Titulo']}}.</a></li>
												@endforeach
											</ul>
											<span class="opener">Componentes y caracteristicas del Cliente/Servidor</span>
											<ul>
												@foreach($pblog2 as $publicblog2)
												<li><a href="{{route('mostrar.pub',$publicblog2['slug'])}}">{{$publicblog2['Titulo']}}.</a></li>
												@endforeach
											</ul>
											<span class="opener">Estrategias de reparto de complejidad</span>
											<ul>
												@foreach($pblog3 as $publicblog3)
												<li><a href="{{route('mostrar.pub',$publicblog3['slug'])}}">{{$publicblog3['Titulo']}}.</a></li>
												@endforeach
											</ul>
											<span class="opener">Modelo multinivel</span>
											<ul>
												@foreach($pblog4 as $publicblog4)
												<li><a href="{{route('mostrar.pub',$publicblog4['slug'])}}">{{$publicblog4['Titulo']}}.</a></li>
												@endforeach
											</ul>
											<span class="opener">Modelo Vista Controlador</span>
											<ul>
												@foreach($pblog5 as $publicblog5)
												<li><a href="{{route('mostrar.pub',$publicblog5['slug'])}}">{{$publicblog5['Titulo']}}.</a></li>
												@endforeach
											</ul>
											<span class="opener">Sockets</span>
											<ul>
												@foreach($pblog6 as $publicblog6)
												<li><a href="{{route('mostrar.pub',$publicblog6['slug'])}}">{{$publicblog6['Titulo']}}.</a></li>
												@endforeach
											</ul>
										</li>
									
									</ul>
								</nav>
						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>