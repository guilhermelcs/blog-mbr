<?php get_header(); ?>
<!-- AQUI COMEÇA O FORM DE CAPTURA -->
<div class="container single-form pt-5 pb-5">
    <div class="row">
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

<!--Queries da página-->
<?php
//Query dos ultimos posts
$last_posts = get_posts(array(
	'posts_per_page' => 10,
	'post_type'      => 'post',
	'orderby'        => 'date',
	'orer' => 'DESC',
));

//var_dump($last_posts);
?>
<!-- AQUI COMEÇA A SEÇÃO DE CATEGORIAS -->
<div class="container">
    <div class="row">
        <div class="d-none d-md-block col-12 col-md-1"></div>
            <div class="d-none d-md-block col-12 col-md-10">
                <nav class="navbar navbar-expand-lg navbar-light categorias-toppost ">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item mr-3">
                            <a class="nav-link nav-link-cat-top-post" href="#"><span class="nav-item-span">Yoni</span></a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link nav-link-cat-top-post" href="#"><span class="nav-item-span">Lingam</span></a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link nav-link-cat-top-post" href="#"><span class="nav-item-span">Casal</span></a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link nav-link-cat-top-post" href="#"><span class="nav-item-span">Massagem terapêutica</span></a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link nav-link-cat-top-post" href="#"><span class="nav-item-span">Auto toque</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        <div class="d-none d-md-block col-12 col-md-1"></div>
    </div>
        <hr class="cat-top-post-separador mt-0 mb-5" align="center" width="90%" size="10" color="#7E425A"
</div>

<!-- AQUI COMEÇA A SEÇÃO DE TRES TOPPOST	 -->

<div class="container">
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="cat-post-wrapper p-1">
                <h5 class="cat-post-date">20 de fevereiro de 2019</h5>
                <h1 class="cat-post-title">Orgasmo tântrico: saiba como ter orgasmos mais intensos e longos</h1>
                <hr class="cat-post-separador">
                <p class="cat-post-excerpt">Vamos ser sinceras, qualquer orgasmo é uma ótima experiência. Eles nos fazem ver estrelas e nos proporcionam sensações maravilhosas, mas o que a maioria das mulhere qualquer orgasmo é uma ótima experiência. Eles nos fazem ver estrelas e nos proporcionam sensações maravilhosas, mas o que a maioria das mulhere [...]</p>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="cat-post-wrapper p-1">
                <h5 class="cat-post-date">20 de fevereiro de 2019</h5>
                <h1 class="cat-post-title">Orgasmo tântrico: saiba como ter orgasmos mais intensos e longos</h1>
                <hr class="cat-post-separador">
                <p class="cat-post-excerpt">Vamos ser sinceras, qualquer orgasmo é uma ótima experiência. Eles nos fazem ver estrelas e nos proporcionam sensações maravilhosas, mas o que a maioria das mulhere qualquer orgasmo é uma ótima experiência. Eles nos fazem ver estrelas e nos proporcionam sensações maravilhosas, mas o que a maioria das mulhere [...]</p>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="cat-post-wrapper p-1">
                <h5 class="cat-post-date">20 de fevereiro de 2019</h5>
                <h1 class="cat-post-title">Orgasmo tântrico: saiba como ter orgasmos mais intensos e longos</h1>
                <hr class="cat-post-separador">
                <p class="cat-post-excerpt">Vamos ser sinceras, qualquer orgasmo é uma ótima experiência. Eles nos fazem ver estrelas e nos proporcionam sensações maravilhosas, mas o que a maioria das mulhere qualquer orgasmo é uma ótima experiência. Eles nos fazem ver estrelas e nos proporcionam sensações maravilhosas, mas o que a maioria das mulhere [...]</p>
            </div>
        </div>
    </div>
</div>
</section>

<!-- AQUI COMEÇA A LISTAGEM DOS POST -->
<section>
    <div class="container-fluid">
        <?php foreach ($last_posts as $post) {?>
        <div class="row bg-gray">
            <div class="col-12 col-md-5 ml-5-">
                <div class="blog-post-img-wrapper">
                    <?php if(has_post_thumbnail($post->ID)) {?>
                        <a href="#"><img class="blog-post-img" src="<?php echo get_the_post_thumbnail($post->ID) ?></a>
                    <?} else {?>
                        <a href="#"><img class="blog-post-img" src="<?php bloginfo('template_url'); ?>/assets/img/3.png"></a>
                    <?php }?>
        </div>
            </div>
            <div class="col-12 col-md-7 my-auto ml-5-">
                <div class="d-none d-md-block blog-post-content-wrapper py-5 pr-10">
	                <?php $category = get_the_category($post->ID);?>
                    <h5 class="blog-post-date-and-cat px-4"><span class="date"><?php echo get_the_date('j \d\e F \d\e Y')?></span> | <a href="<?php echo get_category_link( $categories[0]->term_id );?>"><span class="cat"><?php echo $category[0]->cat_name?></span></a></h5>
                    <h1 class="blog-post-title mb-4 px-4">Orgasmo tântrico: saiba como ter orgasmos mais intensos e longos</h1>
                    <p class="blog-post-excerpt px-4">
                        Vamos ser sinceras, qualquer orgasmo é uma ótima experiência. Eles nos fazem ver estrelas e nos proporcionam sensações maravilhosas,
                        mas o que a maioria das mulhere qualquer orgasmo é uma ótima experiência. Eles nos fazem ver estrelas e nos proporcionam sensações
                        maravilhosas, mas o que a maioria das mulheres [...]
                    </p>
                    <a href="javascript:;" class="blog-post-continue-reading px-4">
                        Leia mais
                        <span class="read-more-icon"> <img src="data:image/svg+xml;base64,
PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNTEyLjAwOCA1MTIuMDA4IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIuMDA4IDUxMi4wMDg7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgY2xhc3M9IiI+PGc+PGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzgxLjA0OCwyNDguNjMzTDE0Ni4zODEsMy4yOTljLTMuMDIxLTMuMTQ2LTcuNjQ2LTQuMTY3LTExLjY4OC0yLjUyMWMtNC4wNDIsMS42MTUtNi42ODgsNS41NDItNi42ODgsOS44OTZ2NDIuNjY3ICAgIGMwLDIuNzI5LDEuMDQyLDUuMzU0LDIuOTE3LDcuMzMzbDE4NS4wNjMsMTk1LjMzM0wxMzAuOTIzLDQ1MS4zNDFjLTEuODc1LDEuOTc5LTIuOTE3LDQuNjA0LTIuOTE3LDcuMzMzdjQyLjY2NyAgICBjMCw0LjM1NCwyLjY0Niw4LjI4MSw2LjY4OCw5Ljg5NmMxLjI5MiwwLjUyMSwyLjY0NiwwLjc3MSwzLjk3OSwwLjc3MWMyLjg1NCwwLDUuNjQ2LTEuMTQ2LDcuNzA4LTMuMjkybDIzNC42NjctMjQ1LjMzMyAgICBDMzg0Ljk4NiwyNTkuMjU4LDM4NC45ODYsMjUyLjc1OCwzODEuMDQ4LDI0OC42MzN6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNBMjg4NTEiIGRhdGEtb2xkX2NvbG9yPSIjI0EyODg1Ij48L3BhdGg+Cgk8L2c+CjwvZz48L2c+IDwvc3ZnPg==" /> </span>
                    </a>
                </div>
                <!-- Para Mobile -->
                <div class="d-block d-md-none blog-post-content-wrapper">
                    <h5 class="blog-post-date-and-cat px-4"><span class="date">20/02/2019</span> | <span class="cat">MASSAGEM TANTRICA</span></h5>
                    <h1 class="blog-post-title mb-4 px-4">Orgasmo tântrico: saiba como ter orgasmos mais intensos e longos</h1>
                    <p class="blog-post-excerpt px-4">
                        Vamos ser sinceras, qualquer orgasmo é uma ótima experiência. Eles nos fazem ver estrelas e nos proporcionam sensações maravilhosas,
                        mas o que a maioria das mulhere qualquer orgasmo é uma ótima experiência. Eles nos fazem ver estrelas e nos proporcionam sensações
                        maravilhosas, mas o que a maioria das mulheres [...]
                    </p>
                    <a href="javascript:;" class="blog-post-continue-reading px-4">
                        Leia mais
                        <span class="read-more-icon"> <img src="data:image/svg+xml;base64,
PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNTEyLjAwOCA1MTIuMDA4IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIuMDA4IDUxMi4wMDg7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgY2xhc3M9IiI+PGc+PGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzgxLjA0OCwyNDguNjMzTDE0Ni4zODEsMy4yOTljLTMuMDIxLTMuMTQ2LTcuNjQ2LTQuMTY3LTExLjY4OC0yLjUyMWMtNC4wNDIsMS42MTUtNi42ODgsNS41NDItNi42ODgsOS44OTZ2NDIuNjY3ICAgIGMwLDIuNzI5LDEuMDQyLDUuMzU0LDIuOTE3LDcuMzMzbDE4NS4wNjMsMTk1LjMzM0wxMzAuOTIzLDQ1MS4zNDFjLTEuODc1LDEuOTc5LTIuOTE3LDQuNjA0LTIuOTE3LDcuMzMzdjQyLjY2NyAgICBjMCw0LjM1NCwyLjY0Niw4LjI4MSw2LjY4OCw5Ljg5NmMxLjI5MiwwLjUyMSwyLjY0NiwwLjc3MSwzLjk3OSwwLjc3MWMyLjg1NCwwLDUuNjQ2LTEuMTQ2LDcuNzA4LTMuMjkybDIzNC42NjctMjQ1LjMzMyAgICBDMzg0Ljk4NiwyNTkuMjU4LDM4NC45ODYsMjUyLjc1OCwzODEuMDQ4LDI0OC42MzN6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNBMjg4NTEiIGRhdGEtb2xkX2NvbG9yPSIjI0EyODg1Ij48L3BhdGg+Cgk8L2c+CjwvZz48L2c+IDwvc3ZnPg==" /> </span>
                    </a>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
<!-- AQUI É A PAGINAÇÃO DOS POSTS -->

		<!--<div class="container">
			<div class="row paginacao-footer">
				<div class="col-sm"></div>
				<div class="col-sm">
					<nav aria-label="Page navigation example">
					  <ul class="pagination">
					    <li class="page-item">
					      <a class="page-link" href="#" aria-label="Previous">
					        <span aria-hidden="true">&laquo;</span>
					      </a>
					    </li>
					    <li class="page-item"><a class="page-link" href="#">1</a></li>
					    <li class="page-item"><a class="page-link" href="#">2</a></li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					    <li class="page-item"><a class="page-link" href="#">4</a></li>
					    <li class="page-item"><a class="page-link" href="#">5</a></li>

					    <li class="page-item">
					      <a class="page-link" href="#" aria-label="Next">
					        <span aria-hidden="true">&raquo;</span>
					      </a>
					    </li>
					  </ul>
					</nav>
				</div>
				<div class="col-sm"></div>
				
				
			</div>
		</div>	-->
</section>

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
<?php get_footer();?>