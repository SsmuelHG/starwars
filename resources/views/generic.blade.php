<!DOCTYPE HTML>

<html>
	<head>
		<title>🌌 Star Wars</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
		<noscript><link rel="stylesheet" href="/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="{{Route('index')}}">STAR WARS</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="{{Route('index')}}">INICIO</a></li>
											<li><a href="{{Route('generic')}}">PERSONAJES</a></li>
											<li><a href="{{Route('elements')}}">API</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main">
						<header>
							<h2>PERSONAJES MAS IMPORTANTES</h2>
							<p>¿Quieres saber la diferencia entre un maestro y un aprendiz?</p>
						</header>
						<section class="wrapper style5">
							<div class="inner">

								<h3>PERSONAJES</h3>
								<div>
								
								<!----INGRESAR FOPREACH PARA PERSONAJES----->
								@foreach ($informacion as $informacion)
								
								<table class="table">
										<thead>
											<tr>
											<th scope="col">#</th>
											<th scope="col">Nombre</th>
											<th scope="col">Vestimenta</th>
											<th scope="col">Arma</th>
											<th scope="col">Planeta</th>

											</tr>
										</thead>
										<tbody>
											<tr>
											<th scope="row"></th>
											<td><h2>{{$informacion['name']}}</h2></td>
											<td><h2>{{$informacion['colour']}}</h2></td>
											<td><h2>{{$informacion['weapon']}}</h2></td>
											<td><h2>{{$informacion['planet']}}</h2></td>
											</tr>
										</tbody>
										</table>


								@endforeach
								
								</div>
						</section>
					</article>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						
					</footer>

			</div>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/jquery.scrollex.min.js"></script>
			<script src="/js/jquery.scrolly.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>