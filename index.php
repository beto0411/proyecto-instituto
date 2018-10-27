<?php include_once 'includes/templates/header.php'; ?>
      <section class="seccion contenedor">
        <h2>mision</h2>
        <p>Nuestra mision es difundir el conosimiento atravez de los docentes con la vocacion nesesaria y calificados para conectarlos con las personas interesadas en adqurir ese conosimiento.</p>
      </section><!--seccion-->

      <section  class="programa">
        <div class="contenedor-video">
          <video autoplay loop poster="img/bg-talleres.jpg">
              <source src="video/video.mp4" type="video/mp4">
              <source src="video/video.webm" type="video/webm">
              <source src="video/video.ogv" type="video/ogg">
          </video>
        </div><!--contenedor video-->

        <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento clearfix"> <!--aqui va clearfix ya que de otra forma el boton queda fuera del marco-->
                  <h2>Programa del evento</h2>
                  <?php
                    try {
                      require_once('includes/funciones/bd_conexion.php');
                      $sql = " SELECT * FROM `categoria_evento` ";
                      $resultado = $conn->query($sql);
                    } catch (\Exception $e) {
                      echo $e->getMessage();
                    }
                   ?>
                  <nav class="menu-programa">
                    <?php while ($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                      <?php $categoria = $cat['cat_evento'] ?>
                      <a href="#<?php echo strtolower ($categoria) ?>">
                        <i class="fas <?php echo $cat['icono'] ?>" aria-hidden="true"></i><?php echo $categoria ?>
                      </a>
                    <?php } ?>
                  </nav>
                  <!--.efecto en jquery para escnder la informacion-->
<!--.Talleres-->


                  <div id="talleres" class="info-curso ocultar clearfix">
                    <div class="detalle-evento">
                        <h3>HTML5, CSS3 Y JavaScript</h3>
                        <p><i class="fas fa-clock"></i>16:00 hrs</p>
                        <p><i class="fas fa-calendar"></i>10 de Dic</p>
                        <p><i class="fas fa-user"></i>Alberto de la Rosa</p>
                    </div>
                    <div class="detalle-evento">
                        <h3>Responsive Web dising</h3>
                        <p><i class="fas fa-clock"></i>20:00 hrs</p>
                        <p><i class="fas fa-calendar"></i>10 de Dic</p>
                        <p><i class="fas fa-user"></i>Alberto de la Rosa</p>
                    </div>
                    <a href="#" class="button float-right">Ver todos</a>
                  </div><!--#Talleres-->
<!--.Conferencias-->
                  <div id="conferencias" class="info-curso ocultar clearfix">
                    <div class="detalle-evento">
                        <h3>Como ser freelancer</h3>
                        <p><i class="fas fa-clock"></i>10:00 hrs</p>
                        <p><i class="fas fa-calendar"></i>10 de Dic</p>
                        <p><i class="fas fa-user"></i>Gregorio Sanchéz</p>
                    </div>
                    <div class="detalle-evento">
                        <h3>Tecnologias del futuro</h3>
                        <p><i class="fas fa-clock"></i>17:00 hrs</p>
                        <p><i class="fas fa-calendar"></i>10 de Dic</p>
                        <p><i class="fas fa-user"></i>Susan Sanchéz</p>
                    </div>
                    <a href="#" class="button float-right">Ver todos</a>
                  </div><!--#Conferencias-->
<!--.seminarios-->
                  <div id="seminarios" class="info-curso ocultar clearfix">
                    <div class="detalle-evento">
                        <h3>Mitos y verdades</h3>
                        <p><i class="fas fa-clock"></i>17:00 hrs</p>
                        <p><i class="fas fa-calendar"></i>11 de Dic</p>
                        <p><i class="fas fa-user"></i>Yokoi Kenji</p>
                    </div>
                    <div class="detalle-evento">
                        <h3>Aprende a programar en una mañana</h3>
                        <p><i class="fas fa-clock"></i>20:00 hrs</p>
                        <p><i class="fas fa-calendar"></i>11 de Dic</p>
                        <p><i class="fas fa-user"></i>Susana Rivera</p>
                    </div>
                    <a href="#" class="button float-right">Ver todos</a>
                  </div><!--#seminarios-->
                  <!--#efecto en jquery para escnder la informacion-->

                </div><!--programa evento-->
            </div> <!--contenedor video-->
        </div> <!--contenedor-->
      </section> <!--contenedor-programa-->

<?php include_once 'includes/templates/invitados.php'; ?>

        <div class="contador parallax">
          <div class="contenedor">
              <ul class="resumen-evento clearfix">
                <li><p class="numero">0</p>Invitados</li>
                <li><p class="numero">0</p>Talleres</li>
                <li><p class="numero">0</p>Días</li>
                <li><p class="numero">0</p>Conferencias</li>
              </ul>
          </div>
        </div><!--Parallax-->

        <section class="precios seccion">
          <h2>precios</h2>
          <div class="contenedor">
            <ul class="lista-precios clearfix">
                <li>
                  <div class="tabla-precio">
                      <h3>Pase por día</h3>
                      <p class="numero">$300</p>
                        <ul>
                          <li><i class="fas fa-check"></i>Bocadillos gratis</li>
                          <li><i class="fas fa-check"></i>Todas las conferencias</li>
                          <li><i class="fas fa-check"></i>Todos los talleres</li>
                          <a href="#" class="button hollow">Comprar</a>
                        </ul>
                  </div>
                </li> <!--Seccion de precios por conferencia-->
                <li>
                  <div class="tabla-precio">
                      <h3>Todos los días</h3>
                      <p class="numero">$500</p>
                        <ul>
                          <li><i class="fas fa-check"></i>Bocadillos gratis</li>
                          <li><i class="fas fa-check"></i>Todas las conferencias</li>
                          <li><i class="fas fa-check"></i>Todos los talleres</li>
                          <a href="#" class="button">Comprar</a>
                        </ul>
                  </div>
                </li> <!--Seccion de precios por conferencia-->
                <li>
                  <div class="tabla-precio">
                      <h3>Pase por 2 días</h3>
                      <p class="numero">$450</p>
                        <ul>
                          <li><i class="fas fa-check"></i>Bocadillos gratis</li>
                          <li><i class="fas fa-check"></i>Todas las conferencias</li>
                          <li><i class="fas fa-check"></i>Todos los talleres</li>
                          <a href="#" class="button hollow">Comprar</a>
                        </ul>
                  </div>
                </li> <!--Seccion de precios por conferencia-->
            </ul>
          </div>
        </section> <!--Seccion precios-->

          <div id="mapa" class="mapa">
          </div><!--api google-->

        <section class="seccion">
          <h2>Frases</h2>
          <div class="testimoniales contenedor clearfix">
            <div class="testimonial">
              <blockquote>
                  <p>Todos somos ignorantes, la diferencia es que todos ignoramos diferentes cosas.</p>
                  <footer class="info-testimonial clearfix">
                    <img src="img/Albert_Einstein.jpg" alt="imagen testimonial">
                      <cite>Albert Einstein <span>Cientifico aleman del siglo XX</span></cite>
                  </footer>
              </blockquote>
            </div> <!--.testimonial-->
            <div class="testimonial">
              <blockquote>
                  <p>La disiplina tarde o temprano vencera la inteligencia.</p>
                  <br><br>
                  <footer class="info-testimonial clearfix">
                    <img src="img/yokoi-kenji-diaz.jpg" alt="imagen testimonial">
                      <cite>Yokoi Kenji Díaz <span>Conferensista Colombiano</span></cite>
                  </footer>
              </blockquote>
            </div> <!--.testimonial-->
            <div class="testimonial">
              <blockquote>
                  <p>Inteligencia mas caracter el objetivo de una verdadera educacion</p>
                  <footer class="info-testimonial clearfix  ">
                    <img src="img/Martin_Luther_King_Jr.jpg" alt="imagen testimonial">
                      <cite>Martin Luther King Jr. <span>Activista por los derechos civiles afroamericanos</span></cite>
                  </footer>
              </blockquote>
            </div> <!--.testimonial-->
          </div>
        </section>

        <div class="newsletter parallax">
          <div class="contenido contenedor">
            <p>Registrate al newsletter:</p>
            <h3>MtyWebCamp</h3>
            <a href="#" class="button transparent">Registrate</a>
          </div> <!--.contenido-->
        </div> <!--.newsletter-->

        <section class="seccion">
          <h2>Faltan</h2>
            <div class="cuenta-regresiva contenedor">
              <ul class="clearfix">
                  <li><p id="dias"     class="numero"></p>Días</li>
                  <li><p id="horas"    class="numero"></p>Horas</li>
                  <li><p id="minutos"  class="numero"></p>Miuntos</li>
                  <li><p id="segundos" class="numero"></p>Segundos</li>
              </ul>
            </div>
        </section> <!--.cuenta-regresiva-->
<?php include_once 'includes/templates/footer.php'; ?>
