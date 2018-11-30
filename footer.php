

<?php if(!is_404()): ?>
<section id="Contacto_form" class="container conta_cont separador_xs">
            <h2  class="colorPpine">Contacto</h2>
            <div class="row">
                <div class="col-sm-12 col-md-6 formulario">
                    <div class="form">
                        <form method="POST" role="form" action="https://formspree.io/info@colectivooportunidadalcambio.com">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email_1">
                            </div>
                             <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="name" name="name" class="form-control" id="name_1">
                            </div>
                            <div class="form-group">
                                <label for="message">Mensaje</label>
                                <textarea name="message" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Enviar</button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <p class="contacto-texto">Si tienes una iniciativa que quisera unirse, escríbenos!</p>
                    <p class="contacto-text">Sé parte de esta comunidad y ayuda a los que más lo necesitan!</p>
                </div>
            </div>
        </section>
<?php endif; ?>
     </main>
     <footer id="footer" class="b_colorCcinereous">
        <section class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-5 col-lg-4">
                    <div class="footer_div_izquierdo">
                            <a href="index.html">
                                    <img src="<?php echo get_stylesheet_directory_uri() . "/source/images/logo-new.png" ?>" class="img-responsive" alt="mapa">
                                </a>
                                <p class="a_color_new"><?php echo get_option("footer_desc"); ?></p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-lg-offset-4 col-md-offset-2">
                    <h5>Informacion de Contacto</h5>
                        <div class="contacto_footer">
                            <div class="icon_footer">
                                    <img src="<?php echo get_stylesheet_directory_uri() . "/source/images/map.png" ?>" class="img-responsive" alt="mapa">
                            </div>
                            <a href="<?php get_option("google_maps_url"); ?>" target="_blank" class="a_color_new"><?php echo get_option("address"); ?> 
                                <?php echo get_option("district"); ?></a>
                        </div>
                        <div class="contacto_footer">
                                <div class="icon_footer">
                                        
                                        <img src="<?php echo get_stylesheet_directory_uri() . "/source/images/call.png" ?>" class="img-responsive" alt="phone">
                                </div>
                                <a href="tel:<?php echo get_option("phone"); ?>" class="a_color_new">Numero: <?php echo get_option("phone"); ?>
                                </a>
                      </div>
                      <div class="contacto_footer">
                            <div class="icon_footer">
                                    <img src="<?php echo get_stylesheet_directory_uri() . "/source/images/message.png" ?>" class="img-responsive" alt="mapa">
                            </div>
                            <a href="mailto:<?php echo get_option("email"); ?>" class="a_color_new"><?php echo get_option("email"); ?></a>
                      </div>
                </div>
            </div>
        </section>

	<!-- This should go at the end of your footer, it will load the JS scripts you set to load here in functions.php -->
 	<?php wp_footer(); ?>
</footer>
</body>
</html>