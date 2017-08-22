
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Joia</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/tienda.css" rel="stylesheet">
    <!-- Custom styles for this template -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-toggleable-md fixed-top navbar-light">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="javascript:void(0);">
          <img class="img-fluid" src="assets/img/logo-joia.svg">
        </a>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="javascript:void(0);">
                Categorías <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0);">
                Somos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0);">
                Puntos de venta
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0);">
                Ediciones
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0);">
                Revista
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0);">
                Contacto
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0);">
                Tienda
              </a>
            </li>
          </ul>

          <nav class="nav nav-redes">
            <a class="nav-link active" href="javascript:void(0);" title="Facebook">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a class="nav-link" href="javascript:void(0);" title="Twitter">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a class="nav-link" href="javascript:void(0);" title="Instagram">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a class="nav-link" href="javascript:void(0);" title="Youtube">
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
            </a>
            <a class="nav-link" href="javascript:void(0);" title="Tumblr">
                <i class="fa fa-tumblr" aria-hidden="true"></i>
            </a>
            <a class="nav-link" href="javascript:void(0);" title="Vimeo">
                <i class="fa fa-vimeo" aria-hidden="true"></i>
            </a>
            <a class="nav-link" href="javascript:void(0);" title="Search" data-toggle="modal" data-target="#modal-search">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
          </nav>
        </div>
      </div>
    </nav>
    <!-- nav tienda -->
    <div id="barra-top-tienda" class="navbar fixed-top">
        <div class="container">
              <div class="row">
                  <div class="container_boton_info">
                        <a id="info" href=""></a>
                  </div>
                  <div class="col-md-6 offset-md-6">
                      <div class="container_botones_tienda">
                              <ul class="botones_tienda pull-right">
                                <li><a id="inicio" href=""></a></li>
                                <li>
                                    <a id="favoritos" href=""></a>
                                    <div class="exp">1</div>


                                </li>
                                <li><a id="perfil" href=""></a>
                                </li>
                                <li>
                                  <a id="bolsa" href=""></a>
                                  <div class="exp">99</div>
                                </li>
                              </ul>
                      </div>
                  </div>

              </div>
        </div>
    </div>
    <div class="footer-over">
      <div class="page page-content page-resultados">
        <div class="container">
          <div class="page-heading-title page-heading-title-tienda">
            <h1 class="title-tienda">JOIA tienda</h1>
          </div>
          <section class="section resumen_compra clearfix">
              <div class="row">
                  <div class="col-lg-5">

                      <form id="datos_cliente">
                       <a href="javascript:void(0);" role="button" class="btn btn-primary btn_form_gris">Si ya  tienes una cuenta, haz click aquí para ingresar</a>
                        <div class="form-group row">
                             <div class="col-sm-6">
                              <label for="nombre">Nombre*</label>
                               <input type="text" class="form-control" id="nombre" placeholder="">
                             </div>
                              <div class="col-sm-6">
                                <label for="apellido">Apellido*</label>
                                <input type="text" class="form-control" id="apellido" placeholder="">
                              </div>
                        </div>
                        <div class="form-group">
                          <label for="institucion">Institución</label>
                          <input type="text" class="form-control" id="institucion" placeholder="">
                        </div>
                        <div class="form-group row">
                        <div class="col-sm-6">
                          <label for="pais">País*</label>
                          <input type="text" class="form-control" id="pais" placeholder="">
                        </div>

                        </div>
                        <div class="form-group">
                          <label for="direccion">Dirección*</label>
                          <input type="text" class="form-control" id="direccion" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="direccion2">Departamento / Torre / Villa / Condominio</label>
                          <input type="text" class="form-control" id="direccion2" placeholder="">
                        </div>
                        <div class="form-group row">
                        <div class="col-sm-6">
                          <label for="ciudad">Ciudad*</label>
                          <input type="text" class="form-control" id="ciudad" placeholder="">
                        </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-6">
                             <label for="region">Región*</label>
                            <select class="form-control" id="region">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-sm-6">
                          <label for="zipcode">Código Postal</label>
                          <input type="text" class="form-control" id="zipcode" placeholder="">
                        </div>
                        </div>
                      
                        
                        <div class="form-group row">
                             <div class="col-sm-6">
                              <label for="telefono">Teléfono*</label>
                               <input type="text" class="form-control" id="telefono" placeholder="">
                             </div>
                              <div class="col-sm-6">
                                <label for="email">Correo Electrónico*</label>
                                <input type="email" class="form-control" id="email" placeholder="">
                              </div>
                        </div>
                        <a href="javascript:void(0);" role="button" class="btn btn-primary btn_form_gris">Crear Cuenta</a>
                        <a href="javascript:void(0);" role="button" class="btn btn-primary btn_form_gris">Comprar como invitado</a>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            Enviar a otra dirección
                          </label>
                        </div>
                        <div class="form-group">
                          <label for="direccion2">Dirección*</label>
                          <input type="text" class="form-control" id="direccion2" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="direccion2">Departamento / Torre / Villa / Condominio</label>
                          <input type="text" class="form-control" id="direccion2" placeholder="">
                        </div>
                        <div class="form-group row">
                        <div class="col-sm-6">
                          <label for="ciudad2">Ciudad*</label>
                          <input type="text" class="form-control" id="ciudad2" placeholder="">
                        </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-6">
                             <label for="region2">Región*</label>
                            <select class="form-control" id="region2">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-sm-6">
                          <label for="zipcode2">Código Postal</label>
                          <input type="text" class="form-control" id="zipcode2" placeholder="">
                        </div>
                        </div>
                        <div class="form-group row">
                             <div class="col-sm-6">
                              <label for="telefono2">Teléfono*</label>
                               <input type="text" class="form-control" id="telefono2" placeholder="">
                             </div>
                              <div class="col-sm-6">
                                <label for="email2">Correo Electrónico*</label>
                                <input type="email" class="form-control" id="email2" placeholder="">
                              </div>
                        </div>
                        <div class="form-group">
                          <label for="password">Contraseña</label>
                          <input type="password" class="form-control" id="password" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="exampleTextarea">Indicaciones especiales: </label>
                          <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                  </div>
                  <div class="col-lg-1"></div>
                  <!-- col derecha -->
                  <div class="col-lg-6">

                      <div class="box_tabla_resumen tabla_checkout">
                        <div class="title_tabla">
                          Pedido:
                        </div>
                        <div class="container_tabla_resumen tabla_checkout">
                          <table class="table table_lista_productos tabla_checkout">
                            <thead>
                              <tr>
                                <th class="padding-left-th" colspan="2">producto</th>
                                <th>valor</th>
                                <th>cantidad</th>
                                <th>total</th>

                              </tr>

                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">
                                   <img class="img-fluid" src="assets/img/producto-thumb.jpg">
                                 </th>
                                <td>Libro Grifters Code</td>
                                <td>$25.000</td>
                                <td>1</td>
                                <td>$25.000</td>
                              </tr>
                              <tr>
                                <th scope="row">
                                  <img class="img-fluid" src="assets/img/producto-thumb.jpg">
                                </th>
                                <td>JOIA Magazine 48</td>
                                <td>$5.000</td>
                                <td>1</td>
                                <td>$5.000</td>
                              </tr>
                                <tr>
                                  <th scope="row">
                                    <img class="img-fluid" src="assets/img/producto-thumb.jpg">
                                  </th>
                                  <td>JOIA Magazine 48</td>
                                  <td>$5.000</td>
                                  <td>1</td>
                                  <td>$5.000</td>
                              </tr>

                            </tbody>
                          </table> <!-- tabla lista productos -->

                          <table class="table tabla_resumen tabla_checkout">
                             <tbody>
                                <tr>
                                  <th class="no-border-top"  scope="row">Subtotal</th>
                                  <td class="no-border-top" >$30.000</td>
                                </tr>
                                <tr>
                                  <th scope="row">Envío</th>
                                    <td>$5.000</td>
                                </tr>
                                <tr class="fila_total">
                                  <th scope="row">TOTAL</th>
                                    <td>$35.000</td>
                                </tr>

                              </tbody>
                          </table>


                        </div><!-- container tabla resumen -->
                         <table class="table tabla_modo_pago">
                              <tbody>

                                  <tr class="fila_modo_pago">
                                     <th scope="row">
                                          <div class="form-check">
                                              <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                Pagar con Tarjeta de crédito o Redcompra
                                              </label>
                                          </div>
                                     </th>
                                      <td>
                                        <img class="img-fluid" src="assets/img/tarjetas.png">
                                      </td>
                                  </tr>
                                  <tr class="fila_modo_pago">
                                    <th scope="row">
                                          <div class="form-check">
                                              <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                Transferencia Bancaria
                                              </label>
                                          </div>

                                    </th>
                                      <td></td>
                                  </tr>
                              </tbody>
                          </table>
                           <button type="submit" class="btn btn-primary btn_negro">pagar</button>
                        </div><!-- box tabla resumen -->
                  </div>
              </div>
          </section> <!-- resumen compra -->
        </div>
      </div>
    </div>

    <footer class="site-footer">
      <section class="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="logo mb-5">
                <a href="javascript:void(0);">
                  <img class="img-fluid" src="assets/img/logo-joia.svg">
                </a>
              </div>
              <p>JOIA Magazine es una revista de diseño y artes visuales que se dedica a seleccionar trabajos de todo el mundo para mostrarlos al público chileno y latino en general. En sus 8 años de trayectoria, se ha instituido como una enciclopedia del arte de vanguardia, reseñando en sus páginas la obra de más de 300 artistas y diseñadores de los 5 continentes, además de actualizar todos los días su sitio web con lo más fresco en música, eventos, cine, animación y por supuesto, artes visuales.</p>
              <p>Santa Rosa #665 of. 6 Santiago, Chile<br>contacto@joiamagazine.com / 22 634 12 74</p>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="javascript:void(0)" title="Facebook">
                    <i class="fa fa-fw fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="javascript:void(0)" title="Twitter">
                    <i class="fa fa-fw fa-twitter" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="javascript:void(0)" title="Instagram">
                    <i class="fa fa-fw fa-instagram" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="javascript:void(0)" title="Youtube">
                    <i class="fa fa-fw fa-youtube-play" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="javascript:void(0)" title="Tumblr">
                    <i class="fa fa-fw fa-tumblr" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="javascript:void(0)" title="Vimeo">
                    <i class="fa fa-fw fa-vimeo" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="javascript:void(0)" title="Search">
                    <i class="fa fa-fw fa-search" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
              <p>JOIA Magazine es creada por</p>
              <div class="logo">
                <img class="img-fluid" src="assets/img/logo-joia-studio.svg">
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="copyright">
          © 2017 JOIA Magazine / JOIA Estudio.
      </section>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/assets/js/ie10-viewport-bug-workaround.js"></script>
    <!-- Libraries -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>
