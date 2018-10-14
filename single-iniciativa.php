<?php 
	/*
	 * 
	 * For more info: http://codex.wordpress.org/Post_Type_Templates
	*/
 ?>
<?php get_header(); ?>
	<div class="container separador">    
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
	        <div class="row">
	            <div class="col-lg-4 col-md-4 col-sm-12">
	                <img class="img-responsive" src="../images/ima.JPG" alt="">
	                <?php 
	                	$post_thumbnail_id = get_post_thumbnail_id( get_the_ID());
	                	echo wp_get_attachment_image( $post_thumbnail_id, $size = 'foto-principal-iniciativa_1x', false, ['class' => 'img-responsive'] );
	               ?>
	            </div>
	            <div class="col-lg-8 col-md-8 col-sm-12">
	                <h2 class="title-h2"><?php the_title(); ?></h2>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-lg-4 col-md-4 col-sm-12 caja-datos">
	                <h3>Ficha de Proyecto</h3>
	                <ul class="contenedor-resaltado">
	                    <li class="resaltado-li"><span class="resaltado"> Duracion :</span> <?php the_field("duration"); ?></li>
	                    <li class="resaltado-li"><span class="resaltado"> Numero de Adolescentes :</span> <?php the_field("num_participants"); ?></li>
	                    <li class="resaltado-li"><span class="resaltado"> Programas Involucrados :</span> <?php $programs = get_field("programs"); foreach ($programs as $program => $value) {
	                    	echo $value . ", " ;

	                    } ?></li>
	                    <li class="resaltado-li"><span class="resaltado"> Frecuencia :</span> <?php the_field("frequency"); ?></li>
	                    <li class="resaltado-li"><span class="resaltado"> Fecha de Inicio :</span> <?php the_field("start_date"); ?></li>
	                    <li class="resaltado-li"><span class="resaltado"> Culminación :</span> <?php the_field("end_date"); ?></li>
	                </ul>
	            </div>
	            <div class="col-lg-7 col-md-7 col-lg-offset-1 col-lg-offset-1 col-sm-12 caja-objetivos">
	                <h3>Objetivos</h3>
	                <?php the_field("objectives"); ?>
	            </div>
	        </div>
	        <div class="row contenedor-total">
	        	<?php $institucion = get_posts(array(
            			"post_type"=> "institucion",
            			"meta_query"=>array(
            				array(
            					'key'=>'projects',
            					'value' => '"' . get_the_ID() . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
								'compare' => 'LIKE'
            				)
            			)
            		))[0]; ?>
	            <div class="col-sm-12">
	                <div class="row tamaño">
	                    <div class=" col-lg-3 col-md-3 col-sm-12">
	                    	<?php 

	                    		$post_thumbnail_id = get_post_thumbnail_id( $institucion->ID);

	                    		if( !empty($post_thumbnail_id) ) {
	                    		    
	                    		    echo wp_get_attachment_image( $post_thumbnail_id, $size = 'logos-grande-caja-echada_1x', false, ['class' => 'img-responsive'] );
	                    		  }

	                    	 ?>
	                        
	                       
	                    </div>
	                
	                    <div class="col-lg-9 col-md-9 col-sm-12 fila-2">
	                            <h3 class="title-3"><?php echo get_the_title( $institucion->ID ) ?></h3>
	                            <p><?php echo get_field("desc", $institucion->ID); ?></p>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-lg-12 col-md-12 col-sm-12 links">
	                    <a href="<?php the_field("website_url", $institucion->ID); ?>" class="parrafos"><span class="glyphicon glyphicon-globe icono"></span>Web</a>
	                    <a href="mailto:<?php the_field("email", $institucion->ID); ?>" class="parrafos"><span class="glyphicon  glyphicon-envelope icono"></span><?php the_field("email", $institucion->ID); ?></a>
	                    <a href=tel:"<?php the_field("phone", $institucion->ID); ?>" class="parrafos"><span class="glyphicon glyphicon-earphone icono"></span><?php the_field("phone", $institucion->ID); ?></a>
	                    </div>
	                </div>

	                <?php 

	                	$otras_iniciativas_institucionales = get_field("projects", $institucion->ID);
	                	
	                	
	                if(!empty($otras_iniciativas_institucionales) && count($otras_iniciativas_institucionales) > 1): ?>
	                <div class="row">
	                    <div class="col-lg-12 col-md-12 col-sm-12">
	                        <h3 class="title-2">Otros Proyectos en CJDRL</h3>
	                        <ul class="lista">
	                 			<?php foreach ($otras_iniciativas_institucionales as $iniciativa):?>
		                        	<?php if($iniciativa->ID != get_the_ID()): ?>
		                            	<li class="listado"><a class="link" href="<?php the_permalink($iniciativa->ID) ?>"><?php echo $iniciativa->post_title; ?></a></li>
		                            <?php endif; ?>
	            				<?php endforeach; ?>
	                        </ul>
	                    </div>
	                </div>
	            <?php endif; ?>
	            </div> 
	        </div>    
	
	
	<?php endwhile; ?>

	<?php else: ?>

	<?php endif;?>
	<?php wp_reset_postdata(); ?>
	    </div>  
	
 <?php get_footer(); ?>


