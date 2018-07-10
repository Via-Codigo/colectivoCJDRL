<?php 
/*
Template Name: noticias
*
* * For more info: http://codex.wordpress.org/Page_Templates
*/


 ?>
 <?php get_header(); ?>
<section class="container noticia">
           <h2 class="colorPpine">Noticias</h2>
           <div class="row separador_xs">
	           	<?php 
					$news_query = new WP_Query(array(

		            			"posts_per_page" => -1,
		            			"post_type" => "post"
		            		));
		            		// var_dump($news_query);

		    		if($news_query->have_posts()):while($news_query->have_posts()): $news_query->the_post();
				 ?>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="noticias">
                        <h3><?php the_title(); ?></h3>
                     	<p><?php the_excerpt(); ?></p>
                       	<div class="noticia_footer">
                            <a href="<?php the_permalink( ); ?>">Leer</a>
                            <span><?php echo get_the_date(); ?></span>
                       	</div>
                    </div>
                </div>
                 <?php endwhile;  ?>
                 <?php endif; wp_reset_postdata() ?>
            </div>


<?php get_footer(); ?> 