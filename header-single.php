<?php
/**
 * Created by Guilherme Lucas.
 * User: root
 * Date: 05/04/19
 * Time: 10:08
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blog do Vitor</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
<?php while ( have_posts() ) : the_post(); ?>
<section class="topo single-topo" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>')">
	<!-- AQUI COMEÇA O MENU -->
	<nav class="navbar navbar-expand-lg navbar-light nav-single menu mb-5 pb-0">
		<div class="container-fluid">
			<a class="navbar-brand mr-5 ml-5 pr-3" href="#"><img class="logo-header" src="<?php bloginfo('template_url'); ?>/assets/img/example_logo.svg.png"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
				<ul class="navbar-nav justify-content-end mr-5">
					<li class="nav-item mr-3">
						<a class="nav-link menu" href="#">Blog</a>
					</li>
					<li class="nav-item mr-3">
						<a class="nav-link menu" href="#">Vídeos</a>
					</li>
					<li class="nav-item mr-3">
						<a class="nav-link menu" href="#">Aline Saloní</a>
					</li>
					<li class="nav-item mr-3">
						<a class="nav-link menu" href="#">Cursos</a>
					</li>
					<li class="nav-item mr-3">
						<a class="nav-link menu" href="#">Contato</a>
					</li>
				</ul>
				<a id="search-icon-link" class="mr-5 ml-4" href="javascript:;">
					<img id="search-icon" width="25" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ4My4wODMgNDgzLjA4MyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDgzLjA4MyA0ODMuMDgzOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTMzMi43NCwzMTUuMzVjMzAuODgzLTMzLjQzMyw1MC4xNS03OC4yLDUwLjE1LTEyNy41QzM4Mi44OSw4NC40MzMsMjk4Ljc0LDAsMTk1LjA0LDBTNy4xOSw4NC40MzMsNy4xOSwxODcuODUgICAgUzkxLjM0LDM3NS43LDE5NS4wNCwzNzUuN2M0Mi4yMTcsMCw4MS4wMzMtMTMuODgzLDExMi40ODMtMzcuNGwxMzkuNjgzLDEzOS42ODNjMy40LDMuNCw3LjY1LDUuMSwxMS45LDUuMXM4Ljc4My0xLjcsMTEuOS01LjEgICAgYzYuNTE3LTYuNTE3LDYuNTE3LTE3LjI4MywwLTI0LjA4M0wzMzIuNzQsMzE1LjM1eiBNNDEuMTksMTg3Ljg1QzQxLjE5LDEwMy4xMzMsMTEwLjA0LDM0LDE5NS4wNCwzNCAgICBjODQuNzE3LDAsMTUzLjg1LDY4Ljg1LDE1My44NSwxNTMuODVTMjgwLjA0LDM0MS43LDE5NS4wNCwzNDEuN1M0MS4xOSwyNzIuNTY3LDQxLjE5LDE4Ny44NXoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K">
				</a>
			</div>
		</div>
	</nav>
<?php endwhile;?>