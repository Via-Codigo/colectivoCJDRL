<?php 
/**
 * 404 Template
 * This is... well you know, you can get fun here. =)
 */
?>
<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h1 class="titulo-principal">404</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <img src="<?php echo get_stylesheet_directory_uri() . "/source/images/minion.png" ?>" class="img-responsive minion" alt="titulo">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <p class="texto-p">Oinkk Oinkk! Esta página no existe. Retorna al inicio</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 separador">
            <p class="link-boton"><a class="link" href="/">Retorno</a></p>
        </div>
    </div>
</div>

<?php get_footer(); ?>