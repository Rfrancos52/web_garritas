<!DOCTYPE HTML>

<html>
	<head>
		<title>Garritas CRUD</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="icon" href="images/logo.png" >
	</head>
	<body class="left-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">

					<!-- Logo -->

					<img src="images/logo.png">
						<h1><a href="index.html">Garritas</a></h1>

					<!-- Nav -->
					<nav id="nav">
						<ul>
							<li class="current"><a href="index.html">Inicio</a></li>
							<li>
								<a href="#">Variedades</a>
							<ul>
								<li>
										<a href="#">Animales domesticos</a>
									<ul>
										<li><a href="#firulais">Perros</a></li>
										<li><a href="#michis">Gatos</a></li>
										<li><a href="#">Conejos</a></li>
									</ul>
								</li>
								<li>
										<a href="#">Animales rurales</a>
									<ul>
										<li><a href="#">Caballos</a></li>
										<li><a href="#">Patos</a></li>
										<li><a href="#">Vacas</a></li>
										<li><a href="#">Cerdos</a></li>
										<li><a href="#">Gallinas</a></li>
									</ul>
								</li>
									
							</ul>
							</li>
							<li><a href="CrudPHP/crud.php">CRUD</a></li>
							<li><a href="notas.html">Notas</a></li>
							<li><a href="info.html">Info</a></li>
						</ul>
					</nav>

				</section>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">
							<h1 class="text-center p-3">Añadir adopción</h1>
							<?php
							include "control/eliminar.php";
							?>
							<div class="container-fluid row">
								<form class="col-3 p-3" method="POST">
									<h3 class="text-right text-secondary">Registro de perfiles añadidos</h3>
									<?php
									include "modelo/conexion.php";
									include "control/añadir.php";
						
									?>
									<div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Nombres</label>
										<input type="text" class="form-control" name="Nombres">
									</div>
									<div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Apellidos</label>
										<input type="text" class="form-control" name="Apellidos">
									</div>
									<div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Número cel/tel</label>
										<input type="text" class="form-control" name="NumCel">
									</div>
									<div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Correo</label>
										<input type="email" class="form-control" name="Correo">
									</div>
									<div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Documento de identificación</label>
										<input type="text" class="form-control" name="Identificacion">
									</div>
									<div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Nombre del animal</label>
										<input type="text" class="form-control" name="Animal">
									</div>
									<div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Foto imagen referencia</label>
										<input type="file" name="Foto" accept="image/*">
									</div>
									<button type="submit" class="btn btn-primary" name="registrar" value="ok">Registrar</button>
								</form>
								<div class="col-9 p-4">
									<table class="table">
										<thead class="bg-primary.bg-gradient">
											<tr>
											<th scope="col">Nombres</th>
											<th scope="col">Apellidos</th>
											<th scope="col">#Cel</th>
											<th scope="col">Correo</th>
											<th scope="col">Identificacion</th>
											<th scope="col">Animal</th>
											<th scope="col">Foto</th>
											</tr>
										</thead>
										<tbody>
											<?php
											include "modelo/conexion.php";
											$sql = $conexion->query("SELECT * FROM mascotas");
											while ($datos = $sql->fetch_object()) { ?>
												<tr>
													<td><?php echo $datos->Nombres; ?></td>
													<td><?php echo $datos->Apellidos; ?></td>
													<td><?php echo $datos->NumCel; ?></td>
													<td><?php echo $datos->Correo; ?></td>
													<td><?php echo $datos->Identificacion; ?></td>
													<td><?php echo $datos->Animal; ?></td>
													<td><?php echo $datos->Foto; ?></td>
													<td>
														<a href="editar.php?id=<?= $datos->Nombres ?>" class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
														<a href="eliminar.php?id=<?= $datos->Nombres ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-delete-left"></i></a>
													</td>
												</tr>
											<?php } 
											?>
							<div class="col-4 col-12-medium">
								<!-- Sidebar -->
									<section class="box">
										<a href="#" class="image featured"><img src="images/pic09.jpg" alt="" /></a>
										<header>
											<h3>Sed etiam lorem nulla</h3>
										</header>
										<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
										<footer>
											<a href="#" class="button alt">Magna sed taciti</a>
										</footer>
									</section>
									<section class="box">
										<header>
											<h3>Feugiat consequat</h3>
										</header>
										<p>Veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat sed lorem consequat feugiat lorem dolore.</p>
										<ul class="divided">
											<li><a href="#">Sed et blandit consequat sed</a></li>
											<li><a href="#">Hendrerit tortor vitae sapien dolore</a></li>
											<li><a href="#">Sapien id suscipit magna sed felis</a></li>
											<li><a href="#">Aptent taciti sociosqu ad litora</a></li>
										</ul>
										<footer>
											<a href="#" class="button alt">Ipsum consequat</a>
										</footer>
									</section>

							</div>
							<div class="col-8 col-12-medium imp-medium">

								<!-- Content -->
									<article class="box post">
										<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
										<header>
											<h2>Left Sidebar</h2>
											<p>Lorem ipsum dolor sit amet feugiat</p>
										</header>
										<p>
											Vestibulum scelerisque ultricies libero id hendrerit. Vivamus malesuada quam faucibus ante dignissim auctor
											hendrerit libero placerat. Nulla facilisi. Proin aliquam felis non arcu molestie at accumsan turpis commodo.
											Proin elementum, nibh non egestas sodales, augue quam aliquet est, id egestas diam justo adipiscing ante.
											Pellentesque tempus nulla non urna eleifend ut ultrices nisi faucibus.
										</p>
										<p>
											Praesent a dolor leo. Duis in felis in tortor lobortis volutpat et pretium tellus. Vestibulum ac ante nisl,
											a elementum odio. Duis semper risus et lectus commodo fringilla. Maecenas sagittis convallis justo vel mattis.
											placerat, nunc diam iaculis massa, et aliquet nibh leo non nisl vitae porta lobortis, enim neque fringilla nunc,
											eget faucibus lacus sem quis nunc suspendisse nec lectus sit amet augue rutrum vulputate ut ut mi. Aenean
											elementum, mi sit amet porttitor lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor
											sit amet nullam consequat feugiat dolore tempus.
										</p>
										<section>
											<header>
												<h3>Something else</h3>
											</header>
											<p>
												Elementum odio duis semper risus et lectus commodo fringilla. Maecenas sagittis convallis justo vel mattis.
												placerat, nunc diam iaculis massa, et aliquet nibh leo non nisl vitae porta lobortis, enim neque fringilla nunc,
												eget faucibus lacus sem quis nunc suspendisse nec lectus sit amet augue rutrum vulputate ut ut mi. Aenean
												elementum, mi sit amet porttitor lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor
												sit amet nullam consequat feugiat dolore tempus.
											</p>
											<p>
												Nunc diam iaculis massa, et aliquet nibh leo non nisl vitae porta lobortis, enim neque fringilla nunc,
												eget faucibus lacus sem quis nunc suspendisse nec lectus sit amet augue rutrum vulputate ut ut mi. Aenean
												elementum, mi sit amet porttitor lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor
												sit amet nullam consequat feugiat dolore tempus.
											</p>
										</section>
										<section>
											<header>
												<h3>So in conclusion ...</h3>
											</header>
											<p>
												Nunc diam iaculis massa, et aliquet nibh leo non nisl vitae porta lobortis, enim neque fringilla nunc,
												eget faucibus lacus sem quis nunc suspendisse nec lectus sit amet augue rutrum vulputate ut ut mi. Aenean
												elementum, mi sit amet porttitor lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor
												sit amet nullam consequat feugiat dolore tempus. Elementum odio duis semper risus et lectus commodo fringilla.
												Maecenas sagittis convallis justo vel mattis.
											</p>
										</section>
									</article>

							</div>
						</div>
					</div>
				</section>

			<!-- Footer -->
				<section id="footer">
					<div class="container">
						<div class="row">
							<div class="col-8 col-12-medium">
								<section>
									<header>
										<h2>Calendario de eventos</h2>
									</header>
									<ul class="dates">
										<li>
											<span class="date">Junio <strong>27</strong></span>
											<h3><a href="#">Jornada de vacunación</a></h3>
											<p>El proximo Junio 27 tendremos una jornada de vacunación gratuita.</p>
										</li>
										<li>
											<span class="date">Julio <strong>23</strong></span>
											<h3><a href="#">Caminata perruna</a></h3>
											<p>Invitamos a la comunidad de Pereira a la caminata perruna masiva que tendrá lugar en la 30 de Agosto.</p>
										</li>
										<li>
											<span class="date">Agosto <strong>15</strong></span>
											<h3><a href="#">Jornada de adopcion</a></h3>
											<p>Tenemos mas de 50 peluditos esperando por una familia, animate!.</p>
										</li>
										<li>
											<span class="date">Agosto <strong>20</strong></span>
											<h3><a href="#">Donaciones</a></h3>
											<p>Dona a nuestro espacio cuido, cobijas o la operación de peluditos enfermos.</p>
										</li>
										<li>
											<span class="date">Sept<strong>10</strong></span>
											<h3><a href="#">Jornada de rescate animal</a></h3>
											<p>En conjunto con la policia estaremos realizando redadas para rescatar animales. Denuncia tu caso en nuestras redes sociales.</p>
										</li>
									</ul>
								</section>
							</div>
							<div class="col-4 col-12-medium">
								<section>
									<header>
										<h2>Contactanos</h2>
									</header>
									<ul class="social">
										<li><a class="icon brands fa-facebook-f" href="#"><span class="label">Facebook</span></a></li>
										<li><a class="icon brands fa-twitter" href="#"><span class="label">Twitter</span></a></li>
										<li><a class="icon brands fa-dribbble" href="#"><span class="label">Dribbble</span></a></li>
										<li><a class="icon brands fa-tumblr" href="#"><span class="label">Tumblr</span></a></li>
										<li><a class="icon brands fa-linkedin-in" href="#"><span class="label">LinkedIn</span></a></li>
									</ul>
									<ul class="contact">
										<li>
											<h3>Dirección</h3>
											<p>
												Garritas Corp<br />
												1234 La calle de los perros<br />
												Risaralda, TN 00000-0000
											</p>
										</li>
										<li>
											<h3>Mail</h3>
											<p><a href="#">garritascorp@org.com</a></p>
										</li>
										<li>
											<h3>Telefono</h3>
											<p>(+57) 123456984</p>
										</li>
									</ul>
								</section>
							</div>
						</div>
					</div>
				</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>