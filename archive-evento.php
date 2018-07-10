<?php 
/**
 * This is the base archive for all CPT archives. 
 * it should be called archive-<cpt-slug>.php
 * if you don't need to change anything in the query 
 * it's not necesary to add it, since WP hierarchy 
 * should take care of the template inheriting the query.
 * 
 * If you want to set a Page for an archive use page-base.php instead.
 */
?>

<?php get_header(); ?>
<section class="container separador_xs">
   <h2 class="colorPpine">Actividades</h2>
	<!-- Begin of loop -->
	<?php 
		$args = array(
	          //Type & Status Parameters
	          'post_type'   => array('evento'), //change this one to your cpt-slug,
	          "posts_per_page"=> -1	          
	    );
		$query = new WP_Query( $args ); 
	 ?>
	<?php if($query->have_posts()): ?>
		<div class="row">
		<?php while($query->have_posts()): $query->the_post(); ?>
			<div class="col-lg-4 col-md-6 col-xs-12 col-sm-6">
			    <div class="evento_container">
			        <div class="calendario">
			        	<?php 
			        	$date = get_field("datetime");
               			$datetime = DateTime::createFromFormat('d-m-Y g:i a', $date); ?>
			            <span class="dia"><?php echo $datetime->format("d"); ?></span>
			            <span class="mes"><?php echo $datetime->format("M"); ?></span>
			         </div>
			        <div class="evento">
			            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			        </div>
			    </div>
			</div>
		<?php endwhile; ?>
		</div>
	<?php endif; ?> 
	<?php wp_reset_postdata(); ?>	
	<!-- End of loop -->
</section>

<?php get_footer(); ?> 