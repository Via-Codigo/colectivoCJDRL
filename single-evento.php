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
	            <p class="tema_evento colorSserpent">Datos del evento</p>
	        </div>
	    <div class="row separador_xs">
	            <div class="event_calendario col-lg-6 col-xs-12 col-sm-12">
	                    <div class="row separador_xs">
	                        <div class="col-lg-6 col-lg-offset-3 col-xs-8 col-xs-offset-3 col-sm-5 col-sm-offset-5">
	                            <div class="calendario_event">
	                            <?php 
	                            $date = get_field("datetime");
	                            $datetime = DateTime::createFromFormat('d-m-Y g:i a', $date);
	                             ?>
	                                <span class="dia_event"><?php echo $datetime->format("d"); ?></span>
	                                <span class="mes_event"><?php echo $datetime->format("M"); ?></span>
	                            </div>
	                        </div>
	                        <div class="col-lg-6 col-lg-offset-2 col-xs-8 col-xs-offset-2 col-sm-5 col-sm-offset-4 col-md-6 col-md-offset-4">
	                            <h3>Agenda del evento</h3>
	                            <div>
	                            	<?php the_field("plan"); ?>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            <div class="event_resumen col-lg-6 col-xs-12">
	                <div class="row">
	                        <div class="col-lg-8 col-lg-offset-2 col-xs-10 col-xs-offset-1">
	                                <p><?php the_field("desc") ?></p>
	                        </div>
	                </div>
	            </div>
	    </div>
	</section>
	<?php else: ?>

	<?php endif;?>
	<?php wp_reset_postdata(); ?>
	
 <?php get_footer(); ?>


