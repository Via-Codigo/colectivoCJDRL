<?php 
	/*
	 * 
	 * For more info: http://codex.wordpress.org/Post_Type_Templates
	*/
 ?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<?php endwhile; ?>
		<section class="container">
		    <div class="row separador_xs">
		        <h4 class="colorCcinereous"><?php the_title(); ?></h4>
		        <p class="tema_noticia colorSserpent"><?php the_field("subtitle"); ?></p>
		    </div>
		    <div class="row separador">
		        <div class="col-lg-offset-3 col-lg-7 col-xs-12 col-sm-12">
		            <?php the_content(); ?>
		        </div>
		    </div>
		</section>
	<?php else: ?>

	<?php endif;?>
	<?php wp_reset_postdata(); ?>
	
 <?php get_footer(); ?>


