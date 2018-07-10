


<section id="Contacto_form" class="container conta_cont separador_xs">
            <h2  class="colorPpine">Contacto</h2>
            <div class="row">
                <div class="col-sm-12 col-md-6 formulario">
                    <div class="form">
                        <form role="form">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email_1">
                            </div>
                             <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="name" class="form-control" id="name_1">
                            </div>
                            <div class="form-group">
                                <label for="message">Mensaje</label>
                                <textarea name="" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Enviar</button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <p class="contacto-texto">Si tienes una iniciativa que quisera unirse, escríbenos!</p>
                    <p class="contacto-text">Se parte de esta comunidad y ayuda a los que mas lo necesitan!</p>
                </div>
            </div>
        </section>
     </main>
     <footer id="footer" class="b_colorCcinereous">
        <section class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-5 col-lg-4">
                    <div class="footer_div_izquierdo">
                            <a href="index.html">
                                    <img src="<?php echo get_stylesheet_directory_uri() . "/source/images/logo.png" ?>" class="img-responsive" alt="mapa">
                                </a>
                                <p class="a_color_new">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque corporis earum sequi voluptatem quasi iusto tempore. Est quisquam cumque earum exercitationem distinctio, molestiae modi maiores minima, voluptas saepe, assumenda ea.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-lg-offset-4 col-md-offset-2">
                    <h5>Informacion de Contacto</h5>
                        <div class="contacto_footer">
                            <div class="icon_footer">
                                    <img src="<?php echo get_stylesheet_directory_uri() . "/source/images/map.png" ?>" class="img-responsive" alt="mapa">
                            </div>
                            <a href="#" target="_blank" class="a_color_new">CJDRL av.la paz 1725 
                                San Miguel</a>
                        </div>
                        <div class="contacto_footer">
                                <div class="icon_footer">
                                        
                                        <img src="<?php echo get_stylesheet_directory_uri() . "/source/images/call.png" ?>" class="img-responsive" alt="phone">
                                </div>
                                <a href="tel:+5198883813" class="a_color_new">Numero: 98883813
                                </a>
                      </div>
                      <div class="contacto_footer">
                            <div class="icon_footer">
                                    <img src="<?php echo get_stylesheet_directory_uri() . "/source/images/message.png" ?>" class="img-responsive" alt="mapa">
                            </div>
                            <a href="mailto:algo@colectivo.com" class="a_color_new">algo@colectivo.com</a>
                      </div>
                </div>
            </div>
        </section>

	<!-- This should go at the end of your footer, it will load the JS scripts you set to load here in functions.php -->
 	<?php wp_footer(); ?>
</footer>
</body>
</html>