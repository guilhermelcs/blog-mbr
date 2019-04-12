<?php get_header();
if ( have_posts() ) : ?>
<!-- AQUI COMEÇA A LISTAGEM DOS POST -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 mt-5 pt-5 pb-2 text-center text-light">
                <h2>Posts sobre <?php echo single_cat_title( '', false );?></h2>
            </div>
        </div>
        <?php while ( have_posts() ) : the_post();?>
            <div class="row bg-gray">
                <div class="col-12 col-md-5 ml-5-">
                    <a href="<?php echo the_permalink()?>">
                        <div class="blog-post-img-wrapper" style="background-image: url('<?php echo get_the_post_thumbnail_url()?>')">
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-7 my-auto ml-5-">
                    <div class="d-none d-md-block blog-post-content-wrapper py-5 pr-10">
                        <?php $category = get_the_category();?>
                        <h5 class="blog-post-date-and-cat px-4">
                            <span class="date"><?php echo get_the_date('j \d\e F \d\e Y').' '?>|</span>
                            <a href="<?php echo get_category_link( $category[0]->term_id );?>">
                                <span class="cat"><?php echo ' '. $category[0]->cat_name?></span>
                            </a>
                        </h5>
                        <h1 class="blog-post-title mb-3 px-4"><a href="<?php echo the_permalink()?>"><?php echo get_the_title()?></a></h1>
                        <p class="blog-post-excerpt px-4">
                            <?php echo get_the_excerpt()?>
                        </p>
                        <a href="<?php echo the_permalink()?>" class="blog-post-continue-reading px-4">
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
        <?php endwhile; ?>
        <div class="nav-previous alignleft"><?php previous_posts_link( 'Older posts' ); ?></div>
        <div class="nav-next alignright"><?php next_posts_link( 'Newer posts' ); ?></div>
    </div>
<!-- AQUI É A PAGINAÇÃO DOS POSTS -->
<!--
<div class="container">
    <div class="row paginacao-footer">
        <div class="col-sm"></div>
        <div class="col-sm">
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="<?php /*previous_posts_link( 'Older posts' ); */?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>

                <li class="page-item">
                  <a class="page-link" href="next_posts_link( 'Newer posts' );" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
        </div>
        <div class="col-sm"></div>
    </div>
</div>-->
</section>

<?php else: ?>
<p>Sorry, no posts matched your criteria.</p>
 
 
<?php endif; ?>
</div>
</section>
<?php get_footer(); ?>