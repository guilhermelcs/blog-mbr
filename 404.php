<?php get_header(); ?>
<div class="container">
    <div class="row no-gutters pt-5">
        <div class="col-12 col-md-12 mt-5 d-flex align-items-center justify-content-center">
            <div class="error-template">
                <img src="https://image.flaticon.com/icons/svg/1669/1669739.svg" style="width: 15rem;">
                <h1 class="error-title">Oops!</h1>
                <h2 class="error-title">404 Not Found</h2>
                <div class="error-details">
                    Desculpe, parece que esta página não existe!
                </div>
                <div class="error-actions">
                    <a href="<?php echo get_site_url(); ?>" class="btn btn-primary btn-lg">
                        <span class="glyphicon glyphicon-home"></span>
                        Voltar para o Blog
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
