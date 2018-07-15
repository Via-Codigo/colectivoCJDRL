<?php 
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>


		<?php 
			$news_query = new WP_Query(array(

            			"posts_per_page" => 3,
            			"post_type" => "post"
            		));
            		// var_dump($news_query);

    		if($news_query->have_posts()):
		 ?>
<section class="container noticia separador_xs">
            <h2 class="colorPpine">Noticias</h2>
            <div class="row">
            	<?php 
            	
            		
            		 while($news_query->have_posts()): $news_query->the_post();
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
                
            </div>
        </section>
            <?php endif; wp_reset_postdata() ?>

    <?php 

    	$event_query = new WP_Query(array(
    		"post_type" => "evento",
    		"posts_per_page" => 3
    	));
    	if($event_query->have_posts()):
     ?>
            <section class="container separador_xs">
                <h2 class="colorPpine">Actividades</h2>
                <div class="row">
               <?php while($event_query->have_posts()): $event_query->the_post(); 
               		$date = get_field("datetime");
               		$datetime = DateTime::createFromFormat('d-m-Y g:i a', $date);
               		
               	?>
                    <div class="col-lg-4 col-md-6 col-xs-12 col-sm-6">
                        <div class="evento_container">
                            <div class="calendario">
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
            </section>
        <?php endif; wp_reset_postdata(); ?>

        <?php 
        	$iniciativas_query = new WP_Query(array(
        		"posts_per_page" => 6,
        		"order_by"=> "rand",
        		"post_type"=> "iniciativa"
        	));

        	if($iniciativas_query->have_posts()):
         ?>
        <section class="container separador_xs">
            <h2 class="colorPpine">Iniciativas</h2>
            <div class="row">
                <?php while($iniciativas_query->have_posts()): $iniciativas_query->the_post(); ?>
                <div class="col-lg-4">
                        <div class="img_evento">

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
						            
						            echo wp_get_attachment_image( $post_thumbnail_id, $size = 'logos-caja-cuadrada_1x', false, ['class' => 'img-responsive img_complet'] );
						          }
						     ?>   
                                
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_field("desc"); ?></p>
                                <a href="<?php the_permalink( ); ?>">Ver más</a>
                        </div>
                </div>
                
            <?php endwhile; ?>
            </div>
            
        </section>
    <?php endif; wp_reset_postdata(); ?>
        <section class="container cale_evn separador_xs">
            <div class="row">
                <div class="col-12 col-md-3 col-lg-3 col-sm-6">
                   <div class="dat_num_evento">
                        <span class="counter nume_event">23</span>
                        <h3 class="titul_event">Instituciones Participantes</h3>
                   </div>
                </div>
                <div class="col-12 col-md-3 col-lg-3 col-sm-6">
                    <div class="dat_num_evento">
                        <span class="counter nume_event">56</span>
                        <h3 class="titul_event">Proyectos Realizados</h3>
                   </div>
                </div>
                <div class="col-12 col-md-3 col-lg-3 col-sm-6">
                  <div class="dat_num_evento">
                        <span class="counter nume_event">500</span>
                        <h3 class="titul_event">Jovenes Participantes</h3>
                   </div>
                </div>
                <div class="col-12 col-md-3 col-lg-3 col-sm-6">
                    <div class="dat_num_evento">
                        <span class="counter nume_event">4</span>
                        <h3 class="titul_event">Años trabajando</h3>
                   </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?> 