<!DOCTYPE html>
<HTML lang="es">
	<HEAD>
		<TITLE>Titulo del sitio</TITLE>
		<?php //Metaetiquetas globales importadas
				include ('metaetiquetas-generales.php');
			?>
		<META name="keywords" content="etiquetas, clave, plantilla, web, fryntiz" />
		<META name="subject" content="Descripción muy muy muy breve" />
		<META name="description" content="Breve Resumen de la página WEB" />
		<META name='revised' content='Tuesday, February 12th, 2017, 13:22 pm' /><!--Última revisión del sitio-->

		<!--Metaetiquetas para mostrar WEB en Facebook-->
		<META property='og:title' content='Titulo de la página' />
		<META property='og:description' content='Descripción' />
		<META property='og:image' content='http://www.dominioDelSitioWEB.es/img/logo.png' /><!--Miniatura que se mostrará junto al enlace-->

		<!--Metaetiquetas para mostrar WEB en Twitter-->
		<META name="twitter:title" content="Nombre de la publicación en twitter" />
		<META name="twitter:description" content="Descripción de la página, máximo 200 caracteres" />

	</HEAD>

	<BODY>
		<?php
			include ('titulo.php');
			include ('menuprincipal.php');
		?>
		<H1>Muestra</H1>
	</BODY>
</HTML>
