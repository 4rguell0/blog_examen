<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP

	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Blog sobre Cliente/Servidor</title>
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

							<!-- Header -->
							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>Bienvenido a nuestro blog<br />
											Cliente/Servidor</h1>
											<p>¿Conoces la estructura y componentes del Cliente/Servidor?</p>
										</header>
										<p>En este blog, encontraras todos aquellos temas referentes a la estructura del Cliente/Servidor
											asi como temas los cuales cuentan con sus respectivos subtemas.
										</p>
									</div>
									<span class="image object">
										<img src="https://jarroba.com/wp-content/uploads/2015/11/Cliente-Servidor-www.Jarroba.com_.png	" alt="" />
									</span>
								</section>


							<!-- Section -->
								<section>
									<header class="major">
										<h2>Temas</h2>
									</header>
									<div class="posts">
									@php
									$count=0;
									@endphp
									@foreach($pblog as $arregloblog)
									@break($count==4)
										<article>
											<a  class="image"><img src="{{$arregloblog['Imagen']}}" alt="" /></a>
											<h3>{{$arregloblog['Titulo']}}</h3>
											<p>{{$arregloblog['Descripcion']}}</p>
											<p>{{$arregloblog['Parrafo1']}}</p>

											<ul class="actions">
												<li><a href="{{route('mostrar.pub', $arregloblog['slug'])}}" class="button">Leer mas</a></li>
											</ul>
										</article>
										@php
										$count++;
										@endphp
									@endforeach
									</div>
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

							<!-- Section -->
								<section>
								</section>
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