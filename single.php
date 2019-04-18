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
<div class="container single-form pt-5 pb-3 pb-md-5">
    <div class="row pt-5 pt-md-5 mt-md-5">
        <div class="d-none d-md-block col-12 col-md-3"></div>
        <div class="col-12 col-md-6">
            <h4 class="captura-title-top text-center font-weight-light text-light pb-0">Receba atualizações, artigos, dicas e vídeos</h4>
            <h4 class="captura-title-bottom text-center text-light pb-3">cadastre-se e junte-se a mais de 25 mil pessoas</h4>
        </div>
        <div class="d-none d-md-block col-12 col-md-3"></div>
    </div>

    <div class="row">
        <div class="d-none d-md-block col-12 col-md-2"></div>
        <div class="col-12 col-md-8">
            <div class="row no-gutters">
                <div class="col-md-8 mb-3 mb-md-0">
                    <input class="form-control text-center captura-input" name="captura-email" type="email" placeholder="Digite Seu E-mail" />
                </div>
                <div class="col-md-4">
                    <button class="btn btn-gold captura-btn w-100 h-100">Quero Receber!</button>
                </div>
            </div>
            <p class="d-none d-md-block captura-ps text-center mt-2">*Eu quero receber os e-mails e informações da Aline Saloní</p>
            <p class="d-block d-md-none captura-ps text-center mt-2">*Eu quero receber os e-mails e informações da <br>Aline Saloní</p>
        </div>
        <div class="d-none d-md-block col-md-12 col-2"></div>
    </div>
</div>

<?php while ( have_posts() ) : the_post(); 

//Query para pegar os posts da categoria selecionada
$selected_category = get_category( get_field( 'categories_first_posts') );

$categorie_posts = get_posts( array(
    'posts_per_page' => 3,
    'orderby'      => 'name',
    'order'        => 'ASC',
    'cat'          => $selected_category->term_id,
    'category_name'=> $selected_category->name
));
?>

<!-- AQUI COMEÇA O TITULO DO POST -->
<div class="container-fluid">
    <div class="row">
        <div class="d-none d-md-block col-12 col-md-3"></div>
        <div class="d-block d-md-block col-12 col-md-6">
            <div class="top-post-data-single text-left text-light text-center">
	            <?php $category = get_the_category($post->ID);?>
                <h5 class="data categoria">
                    <a href="<?php echo get_category_link( $category[0]->term_id );?>" class="m-0"><?php echo $category[0]->cat_name?></h5></a>
                <h1 class="titulo-post-single text-light mb-0"><?php echo the_title(); ?></h1>
            </div>
        </div>
        <div class="d-none d-md-block col-12 col-md-3"></div>
    </div>
</div>
</div>
</section>


<!-- AQUI COMEÇA A PARTE SINGLE DO POST -->
<section>
    <div class="container mt-4 mt-md-5 pt-md-5">
        <div class="row">
            <div class="d-none d-md-block col-md-2"></div>
            <div class="col-12 col-md-8">
                <div class="row no-gutters">
                    <div class="col-3 col-md-2">
                        <div class="post-author">
                            <div class="avatar-wrapper mr-4">
                                <img class="avatar-img" src="<?php echo get_field('author_thumbnail', $post->ID)?>" alt="autor do post">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 my-auto ml-2">
                        <div class="post-author post-date">
                            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>"><h2 class="author-name"><?php echo get_field('author_name', $post->ID);?></h2></a>
                            <h3 class="post-date"><?php echo get_the_date('j \d\e F \d\e Y').' '?></h3>
                            <?php $author = get_field('author_name', $post->ID);?>
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

    <!-- AQUI COMEÇA A SEÇÃO DE TRES TOPPOST	 -->
    <div class="container mt-5 mt-md-5 pt-md-5">
        <div class="row">
            <?php foreach($categorie_posts as $post) {?>
                <div class="col-12 col-md-4">
                    <div class="cat-post-wrapper single pt-3 pb-0 pb-md-1 mb-5">
                        <h5 class="cat-post-date single"><?php echo get_the_date('j \d\e F \d\e Y')?></h5>
                        <a href="<?php echo the_permalink($post->ID)?>">
                            <h1 class="cat-post-title single"><?php echo get_the_title($post->ID)?></h1>
                        </a>
                        <!-- <hr class="cat-post-separador single"> -->
                        <a href="<?php echo the_permalink($post->ID)?>">
                            <p class="cat-post-excerpt single"><?php echo get_the_excerpt($post->ID); ?></p>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php endwhile;?>

<!-- AQUI COMEÇA O OPTINDOWN -->
<section class="sessao-optin mt-0">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12 col-md-7">
                <div class="lead-img">
                    <img class="blog-post-img" src="<?php bloginfo('template_url'); ?>/assets/img/5.png">
                </div>
            </div>
            <div class="col-12 col-md-5 optin-form text-center p-md-5">
                <h1 class="lead-title mt-3 mt-md-5">Receba atualizações e conteúdos gratuitos diretamente no seu e-mail</h1>
                <h3 class="lead-subtitle px-3">Eu quero receber os e-mails e informações da Aline Saloní</h3>
                <div class="px-3 pb-4">
                    <input class="form-control text-center captura-input mt-5" name="captura-email" type="email" placeholder="Digite Seu E-mail" />
                    <button class="btn btn-gold captura-btn lead-btn w-100">Quero Receber!</button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>