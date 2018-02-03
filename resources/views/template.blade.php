<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


	@yield('styles')
</head>
<body>
		<nav class="navbar navbar-default navbar-fixed-top">
		</nav>

		<h1 class="titulo" align="center">@yield('title')</h1>
		<div>
		@yield('contenido')
		</div>
		

		<footer>
			<div class="container text-center">
				<div class="row">
					<p class="copyright"> UASLP
						Universidad Autónoma de San Luis Potosí
						Álvaro Obregón #64, Col. Centro, C.P. 78000
						San Luis Potosí, S.L.P. México
						Tel. +52 (444) 826 2300
						© 2017 Todos los derechos reservados
					</p>
				</div>		
			</div>
		</footer>

		<script type="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

		@yield('scripts')
</body>
</html>