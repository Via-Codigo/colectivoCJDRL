<?php 
/*
Template Name: Nosotros
*
* * For more info: http://codex.wordpress.org/Page_Templates
*/


 ?>
 <?php get_header(); ?>

<section class="container">
            <div class="row separador">
                <div class="col-xs-12">
                    <h1 class="eje_center colorSserpent main-title"><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xs-12 col-lg-offset-1 separador_xs">
                    <h2 class="eje_center colorSserpent">Quienes somos</h2>
                    <p><?php the_field("who"); ?></p>
                </div>
                <div class="col-lg-4 col-xs-12 col-lg-offset-1 separador_xs">
                    <h2 class="eje_center colorSserpent">Que hacemos</h2>
                    <p><?php the_field("what"); ?></p>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="row">
                <div class="col-lg-5 col-xs-12 col-lg-offset-3 separador">
                    <h2 class="eje_center colorSserpent">Como lo hacemos</h2>
                    <p><?php the_field("how"); ?></p>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <h2 class="eje_center colorSserpent">Eje 1</h2>
                    <p><?php the_field("axis_1"); ?></p>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <h2 class="eje_center colorSserpent">Eje 2</h2>
                    <p><?php the_field("axis_2"); ?></p>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <h2 class="eje_center colorSserpent">Eje 3</h2>
                    <p><?php the_field("axis_3"); ?></p>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="row separador">
                <div class="col-lg-4 col-xs-12 col-lg-offset-2">
                    <h2 class="eje_center colorSserpent">Eje 4</h2>
                    <p><?php the_field("axis_4"); ?></p>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <h2 class="eje_center colorSserpent">Eje 5</h2>
                    <p><?php the_field("axis_5"); ?></p>
                </div>
            </div>
        </section>

<?php get_footer(); ?> 