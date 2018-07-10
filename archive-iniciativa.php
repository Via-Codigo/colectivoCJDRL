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
     <section class="container">
        <div class="row separador_xs">
			<?php 
				$args = array(
			          //Type & Status Parameters
			          'post_type'   => array('iniciativa'),
			          "posts_per_page"=> -1 //change this one to your cpt-slug	          
			    );
				$query = new WP_Query( $args ); 
			 ?>
			<?php if($query->have_posts()): ?>
				<?php while($query->have_posts()): $query->the_post(); ?>

            <div data-nombre="<?php the_field("keywords"); ?>" class="col-lg-6 col-sm-12 iniciativa  ">
                <div class=" caja_cetpro arreglo separador_sm">
                    
                    <div class="info">
                        <h2 class="title"><?php the_title(); ?>
                        </h2>

                        <p><?php the_field("desc"); ?></p>
                          <a href="<?php the_permalink(); ?>" class="env_pro">Ver proyecto</a>
                    </div>

                    <div class="logo">
                    	<?php 

                    		$instituciones = get_posts(array(
                    			"post_type"=> "institucion",
                    			"meta_query"=>array(
                    				array(
                    					'key'=>'projects',
                    					'value' => '"' . get_the_ID() . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
										'compare' => 'LIKE'
                    				)
                    			)
                    		));

					        $post_thumbnail_id = get_post_thumbnail_id( $instituciones[0]->ID);

					        if( !empty($post_thumbnail_id) ) {
					            
					            echo wp_get_attachment_image( $post_thumbnail_id, $size = 'logos-pequeno-caja-echada_1x', false, ['class' => 'img-responsive'] );
					          }
					     ?>   
                        
                    </div>	
                </div>
            </div> 
	<!-- Begin of loop -->
	

		<?php endwhile; ?>
	<?php endif; ?> 
	<?php wp_reset_postdata(); ?>	
		</div>
	</section>
	<!-- End of loop -->

<?php get_footer(); ?> 