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
	<div class="navbar-menu-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light menu mb-0 pb-0 pt-0">
            <div class="container-fluid">
                <a class="navbar-brand mr-5 ml-5 pr-3" href="<?php echo get_site_url(); ?>">
                    <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    ?>
                    <img class="logo-header" src="<?php echo $image[0]; ?>">
				</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                    wp_nav_menu( array( 
                        'theme_location'    => 'header_menu', 
                        'container_class'   => 'collapse navbar-collapse justify-content-end', 
                        'container_id'      => 'navbarSupportedContent',
                        'menu_class'        => 'navbar-nav justify-content-end mr-5'
                    )); 
                ?>
                <a id="search-icon-link" class="mr-5 ml-4" href="javascript:;">
                    <img id="search-icon" width="25" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDUxIDQ1MSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDUxIDQ1MTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIiBjbGFzcz0iIj48Zz48Zz4KCTxwYXRoIGQ9Ik00NDcuMDUsNDI4bC0xMDkuNi0xMDkuNmMyOS40LTMzLjgsNDcuMi03Ny45LDQ3LjItMTI2LjFDMzg0LjY1LDg2LjIsMjk4LjM1LDAsMTkyLjM1LDBDODYuMjUsMCwwLjA1LDg2LjMsMC4wNSwxOTIuMyAgIHM4Ni4zLDE5Mi4zLDE5Mi4zLDE5Mi4zYzQ4LjIsMCw5Mi4zLTE3LjgsMTI2LjEtNDcuMkw0MjguMDUsNDQ3YzIuNiwyLjYsNi4xLDQsOS41LDRzNi45LTEuMyw5LjUtNCAgIEM0NTIuMjUsNDQxLjgsNDUyLjI1LDQzMy4yLDQ0Ny4wNSw0Mjh6IE0yNi45NSwxOTIuM2MwLTkxLjIsNzQuMi0xNjUuMywxNjUuMy0xNjUuM2M5MS4yLDAsMTY1LjMsNzQuMiwxNjUuMywxNjUuMyAgIHMtNzQuMSwxNjUuNC0xNjUuMywxNjUuNEMxMDEuMTUsMzU3LjcsMjYuOTUsMjgzLjUsMjYuOTUsMTkyLjN6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGMkYyRjIiIGRhdGEtb2xkX2NvbG9yPSIjRjNGM0YzIj48L3BhdGg+CjwvZz48L2c+IDwvc3ZnPg==" />
                </a>
            </div>
        </nav>
        <section id="searchbar-section" class="p-0 hide-element">
                <div id="searchbar-wrapper">
                    <?php get_search_form(); ?>
                </div>
        </section>
    </div>
<?php endwhile;?>