<?php get_header(); ?>
</section>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-5 pt-5">
            <?php if (have_posts()): ?>
                <h1 class="search-query-title text-center mb-3">Resultados encontrados para "<?php echo get_search_query(true); ?>"</h1>
                <hr class="mb-4">
        </div>
    </div>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="row bg-gray">
            <div class="col-12 col-md-5 ml-md-n5 px-0">
                <a href="<?php echo the_permalink($post->ID)?>">
                    <div class="blog-post-img-wrapper" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID)?>')">
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-5 my-auto pb-md-0 pb-5">
                <div class="blog-post-content-wrapper py-2 py-md-5">
                    <?php $category = get_the_category($post->ID);?>
                    <h5 class="blog-post-date-and-cat px-md-4 pt-2 pl-1 pl-md-3  ">
                        <span class="date"><?php echo get_the_date('j \d\e F \d\e Y').' '?>|</span>
                        <a href="<?php echo get_category_link( $category[0]->term_id );?>">
                            <span class="cat"><?php echo ' '. $category[0]->cat_name?></span>
                        </a>
                    </h5>
                    <h1 class="blog-post-title mb-3 px-md-4"><a href="<?php echo the_permalink($post->ID)?>"><?php echo get_the_title($post->ID)?></a></h1>
                    <p class="blog-post-excerpt px-md-4 text-left">
                        <?php echo get_the_excerpt($post->ID)?>
                    </p>
                    <a href="<?php echo the_permalink($post->ID)?>" class="blog-post-continue-reading px-md-4">
                        Leia mais
                        <span class="read-more-icon"> <img src="data:image/svg+xml;base64,
    PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIwIDAgNTEyLjAwOCA1MTIuMDA4IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIuMDA4IDUxMi4wMDg7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgY2xhc3M9IiI+PGc+PGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMzgxLjA0OCwyNDguNjMzTDE0Ni4zODEsMy4yOTljLTMuMDIxLTMuMTQ2LTcuNjQ2LTQuMTY3LTExLjY4OC0yLjUyMWMtNC4wNDIsMS42MTUtNi42ODgsNS41NDItNi42ODgsOS44OTZ2NDIuNjY3ICAgIGMwLDIuNzI5LDEuMDQyLDUuMzU0LDIuOTE3LDcuMzMzbDE4NS4wNjMsMTk1LjMzM0wxMzAuOTIzLDQ1MS4zNDFjLTEuODc1LDEuOTc5LTIuOTE3LDQuNjA0LTIuOTE3LDcuMzMzdjQyLjY2NyAgICBjMCw0LjM1NCwyLjY0Niw4LjI4MSw2LjY4OCw5Ljg5NmMxLjI5MiwwLjUyMSwyLjY0NiwwLjc3MSwzLjk3OSwwLjc3MWMyLjg1NCwwLDUuNjQ2LTEuMTQ2LDcuNzA4LTMuMjkybDIzNC42NjctMjQ1LjMzMyAgICBDMzg0Ljk4NiwyNTkuMjU4LDM4NC45ODYsMjUyLjc1OCwzODEuMDQ4LDI0OC42MzN6IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iYWN0aXZlLXBhdGgiIHN0eWxlPSJmaWxsOiNBMjg4NTEiIGRhdGEtb2xkX2NvbG9yPSIjI0EyODg1Ij48L3BhdGg+Cgk8L2c+CjwvZz48L2c+IDwvc3ZnPg==" /> </span>
                    </a>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <?php else: ?>
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 col-md-12 text-center">
                    <img class="search-not-found-face" src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/img/search-not-found.svg" alt="Pesquisa não encontrada" > 
                    <h3 class="search-not-found-text mt-3">Não encontramos nada relacionado a <b>'<?php echo get_search_query(true) ?>'</b></h3>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php get_footer();