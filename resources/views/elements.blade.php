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
							<h2>ESPACIO DE API</h2>
							<p>Hazlo o no lo hagas, pero no lo intentes</p>
						</header>
						<section class="wrapper style5">
							<div class="inner">

								<section>

								<!--ingresar api-->	
								
								<h2>En este apartado encontras informacion que nunca habias imaginado</h2><br>
								
								</section>

								<section>
									
								<!--ingresar otra cosa-->	
									<div>
									<div class="form-group">
										<label>Ingresa tu nombre</label>
										<input type="text" class="form-control" id="nombre" aria-describedby="" placeholder="Nombre"><br>
										
									</div>
									
									<button type="submit" class="btn btn-primary" id="calcu">Calcular</button>
									<div id="datos"><br> 
									
										<h2>Probabilidad%</h2>
									</div>
									</div>
									
								</section><br>

								
								<!--ingresar otra cosa-->	


								<section>
									
								</section>

								<section>
									

								<!--ingresar otra cosa-->	

								</section>

								<section>
									
									<div class="box alt">
										<div class="row gtr-50 gtr-uniform">
											<div class="col-12"><span class="image fit"><img src="images/banner.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
											<div class="col-4"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
										</div>
									</div>
									
								</section>

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

			<script>
				var datos = document.getElementById('datos')
                document.getElementById('calcu').addEventListener('click',predecir);
                let name = document.getElementById('nombre');
                
                function predecir(){
                        let name = nombre.value;

                        fetch('https://api.genderize.io?name='+name,{ method:'GET'})
                        .then(function(response){return response.json();})
                        .then(data => {
                            datos.innerHTML = "Tu nombre es: " + data.name + " y tu genero es: " + data.gender + " Y la probabilidad de que seas es de: " + data.probability;
                        })
                    }

				


			</script>


	</body>
</html>

