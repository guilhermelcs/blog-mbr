<?php
if(is_single()) {
	get_header('single');
}
else {
	get_header();
}
wp_head();
?>
<?php wp_reset_query(); ?>

<!-- AQUI COMEÇA O FORM DE CAPTURA -->
<div class="container single-form pt-5 pb-5">
    <div class="row pt-5 mt-5">
        <div class="d-none d-md-block col-12 col-md-3"></div>
        <div class="col-12 col-md-6">
            <h4 class="captura-title-top text-center font-weight-light pb-0">Receba atualizações, artigos, dicas e vídeos</h4>
            <h4 class="captura-title-bottom text-center pb-3">cadastre-se e junte-se a mais de 25 mil pessoas</h4>
        </div>
        <div class="d-none d-md-block col-12 col-md-3"></div>
    </div>

    <div class="row">
        <div class="d-none d-md-block col-12 col-md-2"></div>
        <div class="col-12 col-md-8">
            <div class="row no-gutters">
                <div class="col-md-8">
                    <input class="form-control text-center captura-input" name="captura-email" type="email" placeholder="Digite Seu E-mail" />
                </div>
                <div class="col-md-4">
                    <button class="btn btn-gold captura-btn w-100 h-100">Quero Receber!</button>
                </div>
            </div>
            <p class="captura-ps text-center mt-2">*Eu quero receber os e-mails e informações da Aline Saloní</p>
        </div>
        <div class="d-none d-md-block col-md-12 col-2"></div>
    </div>
</div>

<?php while ( have_posts() ) : the_post(); ?>

<!-- AQUI COMEÇA O TITULO DO POST -->
<div class="container-fluid">
    <div class="row">
        <div class="d-none d-md-block col-12 col-md-3"></div>
        <div class="d-block d-md-block col-12 col-md-6">
            <div class="top-post-data-single text-left text-light text-center">
	            <?php $category = get_the_category($post->ID);?>
                <h5 class="data categoria">
                    <a href="<?php get_category_link( $categories[0]->term_id );?>"><?php echo $category[0]->cat_name?></h5></a>
                <h1 class="titulo-post-single text-light"><?php echo the_title(); ?></h1>
            </div>
        </div>
        <div class="d-none d-md-block col-12 col-md-3"></div>
    </div>
</div>
</div>
</section>


<!-- AQUI COMEÇA A PARTE SINGLE DO POST -->
<section>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="d-none d-md-block col-md-2"></div>
            <div class="col-12 col-md-8">
                <div class="row">
                    <div class="col-md-2">
                        <div class="post-author">
                            <div class="avatar-wrapper">
                                <img class="avatar-img" src="<?php echo get_field('author_thumbnail', $post->ID)?>" alt="autor do post">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-auto">
                        <div class="post-author post-date">
                            <h2 class="author-name"><?php echo get_field('author_name', $post->ID);?></h2>
                            <h3 class="post-date"><?php echo get_the_date('j \d\e F \d\e Y').' '?></h3>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12 col-md-12">
                        <p class="post-text"><?php echo get_the_content()?></p>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-block col-md-2"></div>
        </div>
    </div>
<?php endwhile;?>

    <!-- AQUI COMEÇA A SEÇÃO DE TRES TOPPOST	 -->
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="cat-post-wrapper p-1">
                    <h5 class="cat-post-date single">20 de fevereiro de 2019</h5>
                    <h1 class="cat-post-title single">Orgasmo tântrico: saiba como ter orgasmos mais intensos e longos</h1>
                    <hr class="cat-post-separador single">
                    <p class="cat-post-excerpt single">Vamos ser sinceras, qualquer orgasmo é uma ótima experiência. Eles nos fazem ver estrelas e nos proporcionam sensações maravilhosas, mas o que a maioria das mulhere qualquer orgasmo é uma ótima experiência. Eles nos fazem ver estrelas e nos proporcionam sensações maravilhosas, mas o que a maioria das mulhere [...]</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="cat-post-wrapper p-1">
                    <h5 class="cat-post-date single">20 de fevereiro de 2019</h5>
                    <h1 class="cat-post-title single">Orgasmo tântrico: saiba como ter orgasmos mais intensos e longos</h1>
                    <hr class="cat-post-separador single">
                    <p class="cat-post-excerpt single">Vamos ser sinceras, qualquer orgasmo é uma ótima experiência. Eles nos fazem ver estrelas e nos proporcionam sensações maravilhosas, mas o que a maioria das mulhere qualquer orgasmo é uma ótima experiência. Eles nos fazem ver estrelas e nos proporcionam sensações maravilhosas, mas o que a maioria das mulhere [...]</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="cat-post-wrapper p-1">
                    <h5 class="cat-post-date single">20 de fevereiro de 2019</h5>
                    <h1 class="cat-post-title single">Orgasmo tântrico: saiba como ter orgasmos mais intensos e longos</h1>
                    <hr class="cat-post-separador single">
                    <p class="cat-post-excerpt single">Vamos ser sinceras, qualquer orgasmo é uma ótima experiência. Eles nos fazem ver estrelas e nos proporcionam sensações maravilhosas, mas o que a maioria das mulhere qualquer orgasmo é uma ótima experiência. Eles nos fazem ver estrelas e nos proporcionam sensações maravilhosas, mas o que a maioria das mulhere [...]</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- AQUI COMEÇA O OPTINDOWN -->
<section class="sessao-optin">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12 col-md-7">
                <div class="lead-img">
                    <img class="blog-post-img" src="<?php bloginfo('template_url'); ?>/assets/img/5.png">
                </div>
            </div>
            <div class="col-12 col-md-5 optin-form text-center p-5">
                <h1 class="lead-title mt-5">Receba atualizações e conteúdos gratuitos diretamente no seu e-mail</h1>
                <h3 class="lead-subtitle">Eu quero receber os e-mails e informações da Aline Saloní</h3>
                <input class="form-control text-center captura-input mt-5" name="captura-email" type="email" placeholder="Digite Seu E-mail" />
                <button class="btn btn-gold captura-btn lead-btn w-100">Quero Receber!</button>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>