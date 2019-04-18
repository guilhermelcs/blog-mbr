<?php
/**
 * Created by Guilherme Lucas.
 * User: root
 * Date: 03/04/19
 * Time: 14:09
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blog do Vitor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
    <section class="topo pb-0 pb-md-4">
        <!-- AQUI COMEÇA O MENU -->
        <!-- Para desktop -->
        <div class="d-none d-md-block navbar-menu-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light menu mb-0 pb-0 pt-0">
                <div class="container-fluid">
                    <a class="navbar-brand mr-5 ml-5 pr-3" href="<?php echo get_site_url(); ?>">
                        <!--  -->
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
        <!-- Para Mobile -->
        <div class="d-block d-md-none navbar-menu-wrapper mobile px-0 pb-0">
            <div class="container-fluid">
                <div class="row pb-2">
                    <div class="col-4">
                        <div class="menu-icon-wrapper pl-2">
                            <a id="menu-icon-link" href="javascript:;">
                                <img class="menu-icon" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDM0NC4zMzkgMzQ0LjMzOSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzQ0LjMzOSAzNDQuMzM5OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGc+PGc+Cgk8Zz4KCQk8Zz4KCQkJPHJlY3QgeT0iNDYuMDYiIHdpZHRoPSIzNDQuMzM5IiBoZWlnaHQ9IjI5LjUyIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGQ0ZDRkMiIGRhdGEtb2xkX2NvbG9yPSIjRkJGQUZBIj48L3JlY3Q+CgkJPC9nPgoJCTxnPgoJCQk8cmVjdCB5PSIxNTYuNTA2IiB3aWR0aD0iMzQ0LjMzOSIgaGVpZ2h0PSIyOS41MiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojRkNGQ0ZDIiBkYXRhLW9sZF9jb2xvcj0iI0ZCRkFGQSI+PC9yZWN0PgoJCTwvZz4KCQk8Zz4KCQkJPHJlY3QgeT0iMjY4Ljc0OCIgd2lkdGg9IjM0NC4zMzkiIGhlaWdodD0iMjkuNTMxIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGQ0ZDRkMiIGRhdGEtb2xkX2NvbG9yPSIjRkJGQUZBIj48L3JlY3Q+CgkJPC9nPgoJPC9nPgo8L2c+PC9nPiA8L3N2Zz4=" />
                            </a>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-center align-items-start">
                        <div class="logo-wrapper-mobile">
                            <a class="navbar-brand py-0" href="<?php echo get_site_url(); ?>">
                                <!--  -->
                                <?php 
                                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                ?>
                                <img class="logo-header-navbar" src="<?php echo $image[0]; ?>">
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="search-icon-wrapper text-right pr-2">
                            <a id="search-icon-link-mobile" class="" href="javascript:;">
                                <img id="search-icon" width="25" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNDUxIDQ1MSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDUxIDQ1MTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIiBjbGFzcz0iIj48Zz48Zz4KCTxwYXRoIGQ9Ik00NDcuMDUsNDI4bC0xMDkuNi0xMDkuNmMyOS40LTMzLjgsNDcuMi03Ny45LDQ3LjItMTI2LjFDMzg0LjY1LDg2LjIsMjk4LjM1LDAsMTkyLjM1LDBDODYuMjUsMCwwLjA1LDg2LjMsMC4wNSwxOTIuMyAgIHM4Ni4zLDE5Mi4zLDE5Mi4zLDE5Mi4zYzQ4LjIsMCw5Mi4zLTE3LjgsMTI2LjEtNDcuMkw0MjguMDUsNDQ3YzIuNiwyLjYsNi4xLDQsOS41LDRzNi45LTEuMyw5LjUtNCAgIEM0NTIuMjUsNDQxLjgsNDUyLjI1LDQzMy4yLDQ0Ny4wNSw0Mjh6IE0yNi45NSwxOTIuM2MwLTkxLjIsNzQuMi0xNjUuMywxNjUuMy0xNjUuM2M5MS4yLDAsMTY1LjMsNzQuMiwxNjUuMywxNjUuMyAgIHMtNzQuMSwxNjUuNC0xNjUuMywxNjUuNEMxMDEuMTUsMzU3LjcsMjYuOTUsMjgzLjUsMjYuOTUsMTkyLjN6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGMkYyRjIiIGRhdGEtb2xkX2NvbG9yPSIjRjNGM0YzIj48L3BhdGg+CjwvZz48L2c+IDwvc3ZnPg==" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <section id="searchbar-section-mobile" class="p-0 hide-element">
                <div id="searchbar-wrapper" class="mobile">
                    <?php get_search_form(); ?>
                </div>
            </section>
        </div>
        <!-- Menu Full Height -->
        <div class="menu-full-height opacity-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="logo-wrapper-mobile">
                            <a class="navbar-brand  pt-3" href="<?php echo get_site_url(); ?>">
                                <!--  -->
                                <?php 
                                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                ?>
                                <img class="logo-header" src="<?php echo $image[0]; ?>">
                            </a>
                        </div>
                        <div class="close-menu-wrapper">
                            <a id="btn-close-menu" href="javascript:;" class="float-right pt-4">
                                <img style="width: 15px;" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iNTEyIiB2ZXJzaW9uPSIxLjEiIGhlaWdodD0iNTEyIiB2aWV3Qm94PSIwIDAgNjQgNjQiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDY0IDY0IiBjbGFzcz0iIj48Zz48Zz4KICAgIDxwYXRoIGZpbGw9IiMxRDFEMUIiIGQ9Ik0yOC45NDEsMzEuNzg2TDAuNjEzLDYwLjExNGMtMC43ODcsMC43ODctMC43ODcsMi4wNjIsMCwyLjg0OWMwLjM5MywwLjM5NCwwLjkwOSwwLjU5LDEuNDI0LDAuNTkgICBjMC41MTYsMCwxLjAzMS0wLjE5NiwxLjQyNC0wLjU5bDI4LjU0MS0yOC41NDFsMjguNTQxLDI4LjU0MWMwLjM5NCwwLjM5NCwwLjkwOSwwLjU5LDEuNDI0LDAuNTljMC41MTUsMCwxLjAzMS0wLjE5NiwxLjQyNC0wLjU5ICAgYzAuNzg3LTAuNzg3LDAuNzg3LTIuMDYyLDAtMi44NDlMMzUuMDY0LDMxLjc4Nkw2My40MSwzLjQzOGMwLjc4Ny0wLjc4NywwLjc4Ny0yLjA2MiwwLTIuODQ5Yy0wLjc4Ny0wLjc4Ni0yLjA2Mi0wLjc4Ni0yLjg0OCwwICAgTDMyLjAwMywyOS4xNUwzLjQ0MSwwLjU5Yy0wLjc4Ny0wLjc4Ni0yLjA2MS0wLjc4Ni0yLjg0OCwwYy0wLjc4NywwLjc4Ny0wLjc4NywyLjA2MiwwLDIuODQ5TDI4Ljk0MSwzMS43ODZ6IiBkYXRhLW9yaWdpbmFsPSIjMUQxRDFCIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNGQ0ZDRjgiIGRhdGEtb2xkX2NvbG9yPSIjRjRGNEVGIj48L3BhdGg+CiAgPC9nPjwvZz4gPC9zdmc+" />
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <?php
                            wp_nav_menu( array( 
                                'theme_location'    => 'header_menu', 
                                'container_class'   => 'navbar-collapse justify-content-end', 
                                'container_id'      => 'navbarSupportedContent',
                                'menu_class'        => 'navbar-nav justify-content-end mr-5 mt-3'
                            )); 
                        ?>
                    </div>
                    <!-- <div class="col-12 col-md-12 px-0 pl-2 pt-5 sidebar-social-icons">
                        <a href="#" target="_blank">
                            <img class="social-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAzMTAgMzEwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzMTAgMzEwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCI+CjxnIGlkPSJYTUxJRF84MzRfIj4KCTxwYXRoIGlkPSJYTUxJRF84MzVfIiBkPSJNODEuNzAzLDE2NS4xMDZoMzMuOTgxVjMwNWMwLDIuNzYyLDIuMjM4LDUsNSw1aDU3LjYxNmMyLjc2MiwwLDUtMi4yMzgsNS01VjE2NS43NjVoMzkuMDY0ICAgYzIuNTQsMCw0LjY3Ny0xLjkwNiw0Ljk2Ny00LjQyOWw1LjkzMy01MS41MDJjMC4xNjMtMS40MTctMC4yODYtMi44MzYtMS4yMzQtMy44OTljLTAuOTQ5LTEuMDY0LTIuMzA3LTEuNjczLTMuNzMyLTEuNjczaC00NC45OTYgICBWNzEuOTc4YzAtOS43MzIsNS4yNC0xNC42NjcsMTUuNTc2LTE0LjY2N2MxLjQ3MywwLDI5LjQyLDAsMjkuNDIsMGMyLjc2MiwwLDUtMi4yMzksNS01VjUuMDM3YzAtMi43NjItMi4yMzgtNS01LTVoLTQwLjU0NSAgIEMxODcuNDY3LDAuMDIzLDE4Ni44MzIsMCwxODUuODk2LDBjLTcuMDM1LDAtMzEuNDg4LDEuMzgxLTUwLjgwNCwxOS4xNTFjLTIxLjQwMiwxOS42OTItMTguNDI3LDQzLjI3LTE3LjcxNiw0Ny4zNTh2MzcuNzUySDgxLjcwMyAgIGMtMi43NjIsMC01LDIuMjM4LTUsNXY1MC44NDRDNzYuNzAzLDE2Mi44NjcsNzguOTQxLDE2NS4xMDYsODEuNzAzLDE2NS4xMDZ6IiBmaWxsPSIjMDAwMDAwIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==">
                        </a>
                        <a href="#" target="_blank">
                            <img class="social-icon" src="data:image/svg+xml;base64,&#10;PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgY2xhc3M9IiI+PGc+PHBhdGggc3R5bGU9ImZpbGw6IzA1MDQwNCIgZD0iTTExNC43NTksNTEyaDYxLjEwM2wtOTYuNDE0LTYxLjc5M0wwLjE5OCw0MDMuODk4QzMuNjU5LDQ2NC4wOSw1My43MTYsNTEyLDExNC43NTksNTEyeiIgZGF0YS1vcmlnaW5hbD0iI0ZERTQ5NCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBkYXRhLW9sZF9jb2xvcj0iIzBBMDkwOSI+PC9wYXRoPjxwYXRoIHN0eWxlPSJmaWxsOiMwMjAyMDIiIGQ9Ik0zMzUuNDQ4LDQ3Ni42OWwtNjkuMDA2LTE3LjY1NUgxMTQuNzU5Yy0zNC4wNzIsMC02MS43OTMtMjcuNzIxLTYxLjc5My02MS43OTN2LTMzLjg3NiAgbC0yNi40ODMtMjguNDJMMCwzMzkuNjI4djU3LjYxM2MwLDIuMjM2LDAuMDcyLDQuNDU0LDAuMTk4LDYuNjU3TDE3NS44NjIsNTEyaDIwOC43NjdMMzM1LjQ0OCw0NzYuNjl6IiBkYXRhLW9yaWdpbmFsPSIjRkVBMTUwIiBjbGFzcz0iIiBkYXRhLW9sZF9jb2xvcj0iIzAzMDMwMyI+PC9wYXRoPjxwYXRoIHN0eWxlPSJmaWxsOiMwNzA3MDciIGQ9Ik00NDEuNjU1LDQ0MC4xNGMtMTEuMjQ0LDExLjYzNy0yNi45OTMsMTguODk0LTQ0LjQxNCwxOC44OTRIMjY2LjQ0MkwzODQuNjI5LDUxMmgxMi42MTIgIGM0MS4yMDIsMCw3Ny4zOTYtMjEuODI5LDk3LjY0LTU0LjUyN2wtMjcuMDIyLTE2LjA5NEw0NDEuNjU1LDQ0MC4xNHoiIGRhdGEtb3JpZ2luYWw9IiNGRjVENEEiIGNsYXNzPSIiIGRhdGEtb2xkX2NvbG9yPSIjMTMxMTExIj48L3BhdGg+PHBhdGggc3R5bGU9ImZpbGw6IzA2MDYwNiIgZD0iTTQ1OS4wMzQsMzI2LjAxNHY3MS4yMjhjMCwxNi42NTItNi42MzMsMzEuNzc1LTE3LjM3OSw0Mi44OTlsNTMuMjI3LDE3LjMzMyAgQzUwNS43MjgsNDM5Ljk1NCw1MTIsNDE5LjMxOCw1MTIsMzk3LjI0MXYtNjIuODA1bC0yNy4zOTYtMTUuMzkxTDQ1OS4wMzQsMzI2LjAxNHoiIGRhdGEtb3JpZ2luYWw9IiNFNDUyNjEiIGNsYXNzPSIiIGRhdGEtb2xkX2NvbG9yPSIjMEYwRTBFIj48L3BhdGg+PHBvbHlnb24gc3R5bGU9ImZpbGw6IzBBMEEwQSIgcG9pbnRzPSI1MTIsMTQ5LjE5IDQ4My43OTcsMTQyLjQ3NCA0NTkuMDM0LDE1Ny4zIDQ1OS4wMzQsMzI2LjAxNCA1MTIsMzM0LjQzNiAiIGRhdGEtb3JpZ2luYWw9IiNGRjREOTUiIGNsYXNzPSIiIGRhdGEtb2xkX2NvbG9yPSIjMTAwRjBGIj48L3BvbHlnb24+PHBhdGggc3R5bGU9ImZpbGw6IzAzMDMwMyIgZD0iTTUxMiwxMTQuNzU5YzAtNTcuNjMzLTQyLjcwOC0xMDUuNDczLTk4LjEzNi0xMTMuNTVMMzQ0LjQzLDMwLjEwMWwtMzUuMTgzLDIyLjg2NWg4Ny45OTQgIGMzNC4wNzIsMCw2MS43OTMsMjcuNzIxLDYxLjc5Myw2MS43OTNWMTU3LjNMNTEyLDE0OS4xOVYxMTQuNzU5eiIgZGF0YS1vcmlnaW5hbD0iI0NCMzE5QyIgY2xhc3M9IiIgZGF0YS1vbGRfY29sb3I9IiMwNzA2MDciPjwvcGF0aD48cGF0aCBzdHlsZT0iZmlsbDojMEMwQzBDIiBkPSJNMzE3LjczMiwwbC02NS42ODIsMjQuNjM2bC01MS44MDUsMjguMzNoMTA5LjAwMkw0MTMuODY0LDEuMjA4QzQwOC40MzUsMC40MTcsNDAyLjg4NywwLDM5Ny4yNDEsMCAgSDMxNy43MzJ6IiBkYXRhLW9yaWdpbmFsPSIjOEEzMjkzIiBjbGFzcz0iIiBkYXRhLW9sZF9jb2xvcj0iIzEzMTIxMiI+PC9wYXRoPjxwYXRoIHN0eWxlPSJmaWxsOiMwNzA3MDciIGQ9Ik0yNTYsNDA2LjA2OWMxOC4zNTgsMCwzNS45NTQtMy4zMiw1Mi4yMjYtOS4zOGwtODYuMDItMzkuMDQ3bC05MS4xNzgtMTguNjU3ICBDMTU3Ljk0NiwzNzkuMzksMjAzLjkxMyw0MDYuMDY5LDI1Niw0MDYuMDY5eiIgZGF0YS1vcmlnaW5hbD0iI0ZGNUQ0QSIgY2xhc3M9IiIgZGF0YS1vbGRfY29sb3I9IiMxMzExMTEiPjwvcGF0aD48cGF0aCBzdHlsZT0iZmlsbDojMDYwNjA2IiBkPSJNMzI5LjE1MywzMDUuMzU4Yy0xNS44ODMsMjMuNDY1LTQyLjc0OCwzOC45MTgtNzMuMTUzLDM4LjkxOGMtNDAuMjczLDAtNzQuMzA4LTI3LjExOC04NC44NjctNjQuMDQ2ICBsLTIzLjY4Mi0xNC44MDFsLTQwLjg0Nyw0LjUzOGMyLjM1MywyNS4zNDUsMTEuMDE0LDQ4Ljg4NywyNC40MjUsNjkuMDE3bDE3Ny4xOTgsNTcuNzA1YzM4LjMwMy0xNC4yNjQsNjkuMjM3LTQzLjc1Nyw4NS40NTgtODEuMDY4ICBsLTMxLjc1My0xNi4wODVMMzI5LjE1MywzMDUuMzU4eiIgZGF0YS1vcmlnaW5hbD0iI0U0NTI2MSIgY2xhc3M9IiIgZGF0YS1vbGRfY29sb3I9IiMwRjBFMEUiPjwvcGF0aD48Zz4KCTxwYXRoIHN0eWxlPSJmaWxsOiMwQTBBMEEiIGQ9Ik0xNjcuNzI0LDI1NmMwLTIxLjg3OCw4LjAxOC00MS45MDcsMjEuMjQ3LTU3LjM0NmwtMzcuNjU4LTUuMjY4bC0zOC4yNSwxNi44OTIgICBjLTQuNjI1LDE0LjQyMi03LjEzMiwyOS43ODQtNy4xMzIsNDUuNzIyYzAsNC43MTIsMC4yNDQsOS4zNjUsMC42NzEsMTMuOTY2bDY0LjUzLDEwLjI2MiAgIEMxNjguOTI5LDI3Mi41MjQsMTY3LjcyNCwyNjQuNDAzLDE2Ny43MjQsMjU2eiIgZGF0YS1vcmlnaW5hbD0iI0ZGNEQ5NSIgY2xhc3M9IiIgZGF0YS1vbGRfY29sb3I9IiMxMDBGMEYiPjwvcGF0aD4KCTxwYXRoIHN0eWxlPSJmaWxsOiMwQTBBMEEiIGQ9Ik00MDYuMDY5LDI1NmMwLTMyLjEzOC0xMC4xNTktNjEuOTQ2LTI3LjQyOC04Ni4zOWwtMzcuMzk3LTUuMzA4bC0zOC40MTgsMTYuOTE3ICAgYzI0Ljg3MywxNS42MzEsNDEuNDUsNDMuMjk4LDQxLjQ1LDc0Ljc4MWMwLDE4LjI3LTUuNTgsMzUuMjYxLTE1LjEyMyw0OS4zNThsNjQuNTMxLDEwLjI2MiAgIEM0MDEuNjM0LDI5Ny4zMzQsNDA2LjA2OSwyNzcuMTgsNDA2LjA2OSwyNTZ6IiBkYXRhLW9yaWdpbmFsPSIjRkY0RDk1IiBjbGFzcz0iIiBkYXRhLW9sZF9jb2xvcj0iIzEwMEYwRiI+PC9wYXRoPgo8L2c+PGc+Cgk8cGF0aCBzdHlsZT0iZmlsbDojMDMwMzAzIiBkPSJNMjU2LDE2Ny43MjRjMTcuMTk0LDAsMzMuMjQyLDQuOTU5LDQ2LjgyNiwxMy40OTVsNzUuODE1LTExLjYwOSAgIGMtMjcuMTk2LTM4LjQ5My03Mi4wMy02My42NzktMTIyLjY0MS02My42NzljLTY2LjgxLDAtMTIzLjU1NCw0My44ODktMTQyLjkzNywxMDQuMzQ1bDc1LjkwOC0xMS42MjQgICBDMjA1LjE3MywxNzkuNzQyLDIyOS4yMDMsMTY3LjcyNCwyNTYsMTY3LjcyNHoiIGRhdGEtb3JpZ2luYWw9IiNDQjMxOUMiIGNsYXNzPSIiIGRhdGEtb2xkX2NvbG9yPSIjMDcwNjA3Ij48L3BhdGg+Cgk8cGF0aCBzdHlsZT0iZmlsbDojMDMwMzAzIiBkPSJNMzk3LjI0MSwxNTAuMDY5YzE5LjQ3LDAsMzUuMzEtMTUuODQsMzUuMzEtMzUuMzFzLTE1Ljg0LTM1LjMxLTM1LjMxLTM1LjMxICAgYy0xOS40NywwLTM1LjMxLDE1Ljg0LTM1LjMxLDM1LjMxUzM3Ny43NzEsMTUwLjA2OSwzOTcuMjQxLDE1MC4wNjl6IiBkYXRhLW9yaWdpbmFsPSIjQ0IzMTlDIiBjbGFzcz0iIiBkYXRhLW9sZF9jb2xvcj0iIzA3MDYwNyI+PC9wYXRoPgo8L2c+PHBvbHlnb24gc3R5bGU9ImZpbGw6IzA3MDcwNyIgcG9pbnRzPSI1Mi45NjYsMzEzLjU2NCAyNy40NywzMDAuODQ3IDAsMjk2LjMxNiAwLDMzOS42MjkgNTIuOTY2LDM2My4zNjYgIiBkYXRhLW9yaWdpbmFsPSIjRkY1RDRBIiBjbGFzcz0iIiBkYXRhLW9sZF9jb2xvcj0iIzEzMTExMSI+PC9wb2x5Z29uPjxwb2x5Z29uIHN0eWxlPSJmaWxsOiMwNjA2MDYiIHBvaW50cz0iMCwyNTMuMDE0IDAsMjk2LjMxNiA1Mi45NjYsMzEzLjU2NCA1Mi45NjYsMjYxLjQzNyAyNS40NDYsMjUxLjU0MyAiIGRhdGEtb3JpZ2luYWw9IiNFNDUyNjEiIGNsYXNzPSIiIGRhdGEtb2xkX2NvbG9yPSIjMEYwRTBFIj48L3BvbHlnb24+PHBvbHlnb24gc3R5bGU9ImZpbGw6IzBBMEEwQSIgcG9pbnRzPSI1Mi45NjYsMjE5LjQ3OSAyNS43NDksMjE5LjIzMyAwLDIyNy41OSAwLDI1My4wMTQgNTIuOTY2LDI2MS40MzcgIiBkYXRhLW9yaWdpbmFsPSIjRkY0RDk1IiBjbGFzcz0iIiBkYXRhLW9sZF9jb2xvcj0iIzEwMEYwRiI+PC9wb2x5Z29uPjxwb2x5Z29uIHN0eWxlPSJmaWxsOiMwMzAzMDMiIHBvaW50cz0iNTIuOTY2LDE3OS43NTcgMjQuOTExLDE4Mi42MDMgMCwyMDUuOTYyIDAsMjI3LjU5IDUyLjk2NiwyMTkuNDc5ICIgZGF0YS1vcmlnaW5hbD0iI0NCMzE5QyIgY2xhc3M9IiIgZGF0YS1vbGRfY29sb3I9IiMwNzA2MDciPjwvcG9seWdvbj48cG9seWdvbiBzdHlsZT0iZmlsbDojMEMwQzBDIiBwb2ludHM9IjAsMjA1Ljk2MiA1Mi45NjYsMTc5Ljc1NyA1Mi45NjYsMTE5LjM2MiAyMS45LDEyMi4zMzMgMCwxNDMuMjQxICIgZGF0YS1vcmlnaW5hbD0iIzhBMzI5MyIgY2xhc3M9IiIgZGF0YS1vbGRfY29sb3I9IiMxMzEyMTIiPjwvcG9seWdvbj48cGF0aCBzdHlsZT0iZmlsbDojMDUwNTA1IiBkPSJNMjA1LjA1OSwwTDg0LjIwNiw0Ni40ODFMMS4zODcsOTYuOTI4QzAuNDc3LDEwMi43NDEsMCwxMDguNjk1LDAsMTE0Ljc1OXYyOC40ODJsNTIuOTY2LTIzLjg3OCAgdi00LjYwNWMwLTM0LjA3MiwyNy43MjEtNjEuNzkzLDYxLjc5My02MS43OTNoODUuNDg3TDMxNy43MzIsMEgyMDUuMDU5eiIgZGF0YS1vcmlnaW5hbD0iIzUyMzQ5NCIgY2xhc3M9IiIgZGF0YS1vbGRfY29sb3I9IiMwNzA3MDciPjwvcGF0aD48cGF0aCBzdHlsZT0iZmlsbDojMDIwMjAyIiBkPSJNMTE0Ljc1OSwwQzU3LjU0NSwwLDkuOTc4LDQyLjA4OCwxLjM4Nyw5Ni45MjhMMjA1LjA1OSwwSDExNC43NTl6IiBkYXRhLW9yaWdpbmFsPSIjMkQyRDg3IiBjbGFzcz0iIiBkYXRhLW9sZF9jb2xvcj0iIzA1MDQwNCI+PC9wYXRoPjwvZz4gPC9zdmc+">
                        </a>
                        <a href="#" target="_blank">
                            <img class="social-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCIgdmlld0JveD0iMCAwIDQzOC41MzYgNDM4LjUzNSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDM4LjUzNiA0MzguNTM1OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPGc+CgkJPHJlY3QgeD0iNS40MjQiIHk9IjE0NS44OTUiIHdpZHRoPSI5NC4yMTYiIGhlaWdodD0iMjgyLjkzMiIgZmlsbD0iIzAwMDAwMCIvPgoJCTxwYXRoIGQ9Ik00MDguODQyLDE3MS43MzljLTE5Ljc5MS0yMS42MDQtNDUuOTY3LTMyLjQwOC03OC41MTItMzIuNDA4Yy0xMS45OTEsMC0yMi44OTEsMS40NzUtMzIuNjk1LDQuNDI3ICAgIGMtOS44MDEsMi45NS0xOC4wNzksNy4wODktMjQuODM4LDEyLjQxOWMtNi43NTUsNS4zMy0xMi4xMzUsMTAuMjc4LTE2LjEyOSwxNC44NDRjLTMuNzk4LDQuMzM3LTcuNTEyLDkuMzg5LTExLjEzNiwxNS4xMDQgICAgdi00MC4yMzJoLTkzLjkzNWwwLjI4OCwxMy43MDZjMC4xOTMsOS4xMzksMC4yODgsMzcuMzA3LDAuMjg4LDg0LjUwOGMwLDQ3LjIwNS0wLjE5LDEwOC43NzctMC41NzIsMTg0LjcyMmg5My45MzFWMjcwLjk0MiAgICBjMC05LjcwNSwxLjA0MS0xNy40MTIsMy4xMzktMjMuMTI3YzQtOS43MTIsMTAuMDM3LTE3Ljg0MywxOC4xMzEtMjQuNDA3YzguMDkzLTYuNTcyLDE4LjEzLTkuODU1LDMwLjEyNS05Ljg1NSAgICBjMTYuMzY0LDAsMjguNDA3LDUuNjYyLDM2LjExNywxNi45ODdjNy43MDcsMTEuMzI0LDExLjU2MSwyNi45OCwxMS41NjEsNDYuOTY2VjQyOC44Mmg5My45MzFWMjY2LjY2NCAgICBDNDM4LjUyOSwyMjQuOTc2LDQyOC42MzksMTkzLjMzNiw0MDguODQyLDE3MS43Mzl6IiBmaWxsPSIjMDAwMDAwIi8+CgkJPHBhdGggZD0iTTUzLjEwMyw5LjcwOGMtMTUuNzk2LDAtMjguNTk1LDQuNjE5LTM4LjQsMTMuODQ4QzQuODk5LDMyLjc4NywwLDQ0LjQ0MSwwLDU4LjUyOWMwLDEzLjg5MSw0Ljc1OCwyNS41MDUsMTQuMjc1LDM0LjgyOSAgICBjOS41MTQsOS4zMjUsMjIuMDc4LDEzLjk5LDM3LjY4NSwxMy45OWgwLjU3MWMxNS45OSwwLDI4Ljg4Ny00LjY2MSwzOC42ODgtMTMuOTljOS44MDEtOS4zMjQsMTQuNjA2LTIwLjkzNCwxNC40MTctMzQuODI5ICAgIGMtMC4xOS0xNC4wODctNS4wNDctMjUuNzQyLTE0LjU2MS0zNC45NzNDODEuNTYyLDE0LjMyMyw2OC45LDkuNzA4LDUzLjEwMyw5LjcwOHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K">
                        </a>
                    </div> -->
                </div>
            </div>
        </div>