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
 <section class="container">
    <div class="row separador_xs">
        <div class="col-md-8 col-sm-12 col-lg-offset-4 col-md-offset-2 col-lg-6 col-xs-12">
            <div class="contenedor-busqueda">
                <input id="busquedaInput" type="text" class="busqueda-input" placeholder="Buscar proyecto">
                <span class="busqueda-icon glyphicon glyphicon-search"></span>
            </div>
        </div> 
    </div>
</section>
	<!-- Begin of loop -->
	<?php 
		$args = array(
	          //Type & Status Parameters
	          'post_type'   => array('institucion'), //change this one to your cpt-slug	          
	          'posts_per_page'=> -1
	    );
		$query = new WP_Query( $args ); 
	 ?>
	<?php if($query->have_posts()): ?>
	<div class="contenedor container">
        <div class="row">
		<?php while($query->have_posts()): $query->the_post(); ?>
		
		<div data-nombre="<?php the_field("keywords"); ?>" class="col-lg-4 col-md-12 col-sm-12 matiene_alto">
		   <div class="proyecto separador_xs">
		     <div class="img_pro">
		       <?php 
	                	$post_thumbnail_id = get_post_thumbnail_id( get_the_ID());
	                	echo wp_get_attachment_image( $post_thumbnail_id, $size = 'logos-caja-cuadrada_1x', false, ['class' => 'img-responsive logo'] );
	               ?>
		     </div>
		     <div class="proyecto-abajo">
		       <h2 class="title"><?php the_title(); ?></h2>
		       <p><?php the_field("desc"); ?></p>
		       <div class="row">
		           <div class="col-sm-12">
		               <a href="<?php the_field("website_url"); ?>"><span class="proyecto-contacto glyphicon glyphicon-globe"></span>Pagina Web</a>
		           </div>  
		           <div class="col-sm-12">
		             <a href="tel:<?php the_field("phone"); ?>"><span class="proyecto-contacto glyphicon glyphicon-earphone"></span><?php the_field("phone"); ?></a>
		           </div>  
		           <div class="col-sm-12">
		             <a href="mailto:<?php the_field("email"); ?>"><span class="proyecto-contacto glyphicon glyphicon-envelope"></span><?php the_field("email"); ?></a>
		           </div>  
		       </div>    
		       <?php $projects = get_field("projects");
		       		if($projects):
		        ?>
		       <h3 class="title-2">Proyectos en el CJDRL</h3>
		       <div class="conteiner-link">
		       	<?php foreach ($projects as $project):?>
		         	<a class="link" href="<?php echo get_permalink( $project->ID ) ?>"><?php echo get_the_title( $project->ID ); ?></a>
		         <?php endforeach; ?>
		         </div>  
		   		<?php endif; ?>
		     </div>  
		   </div>
		 </div>
		<?php endwhile; ?>
		</div>
	</div>
	<?php endif; ?> 
	<?php wp_reset_postdata(); ?>	
	<!-- End of loop -->

<?php get_footer(); ?> 