<?php
$url="http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$url=str_replace('/index.php','',$url);


?>
    <!DOCTYPE html>

    <html lang="es">



    <head>

        <meta http-equiv="content-type" content="text/html; charset=UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="Inbursa - Se un asesor financiero">

        <meta name="keywords" content="asesor financiero, inbursa, crea tu camino">

        <link rel="shortcut icon" type="image/x-icon" href="images/inbursa-ico.png">


        <title>Inbursa - Se parte del equipo</title>



        <!-- // PLUGINS (css files) // -->

        <link href="assets/js/plugins/bootsnav_files/skins/color.css" rel="stylesheet">

        <link href="assets/js/plugins/bootsnav_files/css/animate.css" rel="stylesheet">

        <link href="assets/js/plugins/bootsnav_files/css/bootsnav.css" rel="stylesheet">

        <link href="assets/js/plugins/bootsnav_files/css/overwrite.css" rel="stylesheet">

        <link href="assets/js/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">

        <link href="assets/js/plugins/owl-carousel/owl.theme.css" rel="stylesheet">

        <link href="assets/js/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">

        <link href="assets/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">

        <!--// ICONS //-->

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!--// BOOTSTRAP & Main //-->

        <link href="assets/bootstrap-3.3.7/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

        <link href="assets/css/main.css" rel="stylesheet">

        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    </head>



    <body>



        <!--======================================== 

           Preloader

    ========================================-->

        <div class="page-preloader">

            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
            <!-- <div class="spinner">

            <div class="rect1"></div>

            <div class="rect2"></div>

            <div class="rect3"></div>

            <div class="rect4"></div>

            <div class="rect5"></div>

        </div> -->

        </div>

        <!--======================================== 

           Header

    ========================================-->



        <!--//** Navigation**//-->

        <nav class="navbar navbar-default navbar-fixed white no-background bootsnav navbar-scrollspy" data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">



            <div class="container">

                <!-- Start Header Navigation -->

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">

                    <i class="fa fa-bars" style="font-size: 23px"></i>
 
                </button>

                    <a class="navbar-brand" href="#brand">

                        <img src="images/inbursa.png" style="width: 11rem" class="logo alt-landing" alt="logo">

                    </a>
                    <a class="navbar-toggle whats-nav">
                        <!-- <a target="_blank" href="https://web.whatsapp.com/send?phone=+527717463505&amp;text=Estoy%20interesado%20en%20ser%20asesor%20financiero%20con%20DIPRA%0A%0A_Enviado desde página web_" class="navbar-toggle whats-nav"> -->
                        <!-- <img src="images/wp-ico.png" style="max-width: 28px; margin-top: -4px; -webkit-filter: drop-shadow(2px 2px 6px rgba(0, 0, 0, 0.23)); "> -->
                        <!-- <i class="whatsicon fa fa-whatsapp fa-bars"></i> -->

                    </a>

                </div>

                <!-- End Header Navigation -->



                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse" id="navbar-menu">

                    <ul class="nav navbar-nav navbar-right">

                        <li class="active scroll"><a href="#home">Registro</a></li>

                        <li class="scroll"><a href="#features">Beneficios</a></li>

                        <li class="scroll"><a href="#crecimiento">Crecimiento</a></li>
                        <!-- 
                    <li class="scroll"><a href="#price">Price</a></li>

                    <li class="scroll"><a href="#team">Team</a></li>

                    <li class="scroll"><a href="#clients">Clients</a></li> -->

                        <li class="scroll"><a href="#contact">Contacto</a></li>

                        <!-- <li class="scroll">
                        <a class="whatsicon"><img src="images/wp-ico.png" style="max-width: 28px; margin-top: -4px; -webkit-filter: drop-shadow(2px 2px 6px rgba(0, 0, 0, 0.23)); "></a>
                    </li> -->

                        <!-- <li class="button-holder">

                        <button type="button" class="btn btn-blue navbar-btn" data-toggle="modal" data-target="#SignIn">Sign in</button>

                    </li> -->

                    </ul>

                </div>

                <!-- /.navbar-collapse -->

            </div>

        </nav>



        <!--//** Banner**//-->

        <section id="home">

            <div class="container">

                <div class="row">

                    <!-- Introduction -->

                    <div class="col-md-6  caption">

                        <h1>¡Inicia tu Negocio en el Ramo Financiero!</h1>
                        <div class="">

                            <div class="video-card">

                                <div id="container">
                                    <video id='video' controls="controls" preload='none' width="100%" poster="assets/vid/thumb.jpg">
                                          <source id='mp4' src="<?= $url; ?>/assets/vid/land.mp4 " type='video/mp4'/>
                                          <!-- <source id='webm' src="http://media.w3.org/2010/05/sintel/trailer.webm " type='video/webm'/>
                                          <source id='ogv' src="http://media.w3.org/2010/05/sintel/trailer.ogv " type='video/ogg'/> -->
                                          <!--
                                            Track to be used for accessibility using the VTT standard. 
                                  
                                            See https://www.html5rocks.com/en/tutorials/track/basics/ for more information on how to use text tracks
                                          -->
                                          <!-- <track kind="subtitles " label="English subtitles " src="subtitles_en.vtt " srclang="en " default></track> -->
                                          <!-- 
                                          We can also add more than one text track and let the user choose which one to play. There is now way to 
                                          currently do this with the built in controls so it'll have to be scripted --> 
                                          <!-- <track kind="subtitles " label="Deutsche Untertitel " src="subtitles_de.vtt " srclang="de "></track> -->
                                  
                                          <!-- 
                                            We're not using Flash as a fallback option. It should be coverage enough to 
                                          -->
                                          <p>Your user agent does not support the HTML5 Video element.</p>
                                        </video>
                                    <div id="extras "></div>
                                    <!-- End Extras -->
                                </div>
                                <!-- End Container -->

                            </div>

                        </div>



                        <h2 class="title-pui ">

                            Conviértete en Asesor Financiero Inbursa
                            <!-- <span class="animated-text "></span>

                        <span class="typed-cursor "></span> -->

                        </h2>

                        <br>
                        <div class="hidden-sm hidden-xs ">

                            <a id="benelink" class="btn btn-transparent ">Cononce todos los beneficios</a>
                        </div>

                        <!-- <a class="btn btn-blue popup-youtube " href="https://www.youtube.com/watch?v=Q8TXgCzxEnw ">
                        
                        <i class="material-icons ">play_circle_filled</i>Ver un video
                        
                    </a> -->

                    </div>

                    <!-- Sign Up -->

                    <div class="col-md-5 col-md-offset-1 formi ">


                        <form class="signup-form " id="contactForm">
                            <div class="form-content-main">
                                <h2 class="text-center ">Envíanos tus datos</h2>
                                <p>Conviértete en un Asesor Financiero y sé lo que tu quieras ser</p>

                                <hr>

                                <div class="form-group ">

                                    <input type="text " name="mc-name" id="mc-name" class="form-control " placeholder="Nombre Completo " required="required ">

                                </div>

                                <div class="form-group ">

                                    <input type="email " name="mc-email" id="mc-email" class="form-control " placeholder="Email " required="required ">

                                </div>

                                <div class="form-group ">

                                    <input type="text " name="mc-phone" id="mc-phone" class="form-control " placeholder="WhatsApp " required="required ">

                                </div>
                                <div class="form-group ">

                                    <select name="mc-state" id="mc-state" class="form-control select " placeholder="Lugar de Residencia " required="required ">
                                        <option value="">Lugar de Residencia</option>                                                   
                                        <option value="Ciudad de México">Ciudad de México</option>
                                        <option value="Estado de México">Estado de México</option> 
                                </select>
                                </div>
                                <!-- <div class="form-group ">
                                <select name="mc-city" id="mc-city" class="form-control select hidden" placeholder="Escoge tu Alcaldía" required="required ">                                    
                                </select>

                            </div> -->
                                <div class="form-group ">
                                    <input name="mc-city" id="mc-city" list="somethingelse" placeholder="" class="form-control select hidden">
                                    <datalist id="somethingelse">
                                </datalist>
                                </div>

                                <!-- <div class="form-group ">

                            <input type="text " class="form-control " placeholder="Password " required="required ">

                        </div> -->

                                <div class="form-group text-center ">
                                    <p class="hidden error">Faltan algunos campos</p>
                                    <input type="button" onclick="gonder();" class="btn btn-blue btn-block " value="Enviar">

                                </div>
                            </div>
                            <div class="mail-sent-main">
                                <h2 class="text-center ">Gracias por contactarnos</h2>
                                <img alt="E-Mail Sent bodymovin svg agreed succeed validation sent design motion email" src="https://ci4.googleusercontent.com/proxy/pjjFxUMDYcvkOtQ7BUaM6IV_n3m8em8GSTv4RDWp1HV1kCRICOxQK_7UkMB-j82vtSg69jIebPZVr2hAuXIdLbhYSVNg0OLmqb5e1DJ9PaOePjmX=s0-d-e1-ft#https://cdn.dribbble.com/users/1735807/screenshots/4290565/01.gif"
                                    style="height:150px" class="CToWUd a6T" tabindex="0">
                            </div>
                        </form>
                        <div class="hidden-md hidden-lg " style="padding: 2rem 0 0; ">

                            <a id="benelink" class="btn btn-transparent ">Cononce todos los beneficios</a>
                        </div>

                    </div>

                </div>

            </div>

        </section>



        <!--======================================== 

           Features

    ========================================-->

        <div class="bar_wpp ">

            <a title="WhatsApp" class="linkwa whatsicon ">
                <div class="icon_wpp"> <img src="images/inbursa-ico.png" style="width: 80%;" alt=""> </div>
                <div class="txt_wpp">
                    Envíanos tus datos
                </div>
            </a>
        </div>
        <section id="features" style=" display: inline-block; width: 100%; ">

            <div class="container ">

                <div class="row ">
                    <div class="col-md-12 " data-aos="fade-right" data-aos-offset="100" data-aos-duration="500">

                        <h2>Conoce los Beneficios</h2>

                        <p>Las ventajas de ser un asesor financiero son muchas.</p>
                        <hr>
                    </div>

                    <div class="col-md-6 " data-aos="fade-right" data-aos-offset="100" data-aos-duration="500">



                        <div class="feat-media ">

                            <!-- Feature -->

                            <div class="media ">

                                <div class="media-left ">

                                    <a href="# ">

                                        <i class="material-icons ">access_time</i>

                                    </a>

                                </div>

                                <div class="media-body ">

                                    <h4 class="media-heading ">Libertad de tiempo</h4>

                                    <p>Este negocio se adapta a tu estilo de vida y tiempo.</p>

                                </div>

                            </div>




                            <!-- Feature -->

                            <div class="media ">

                                <div class="media-left ">

                                    <a href="# ">

                                        <i class="material-icons ">emoji_people</i>

                                    </a>

                                </div>

                                <div class="media-body ">

                                    <h4 class="media-heading ">Libertad económica</h4>

                                    <p>Tu esfuerzo se verá realmente recompensado</p>

                                </div>

                            </div>


                            <div class="media ">

                                <div class="media-left ">

                                    <a href="# ">

                                        <i class="material-icons ">account_balance_wallet</i>

                                    </a>

                                </div>

                                <div class="media-body ">

                                    <h4 class="media-heading ">Aprendes el negocio financiero</h4>

                                    <p> Ayuda a personas a incrementar su patrimonio y GANA DINERO con ello</p>

                                </div>

                            </div>

                            <div class="media ">

                                <div class="media-left ">

                                    <a href="# ">

                                        <i class="material-icons ">apartment</i>

                                    </a>

                                </div>

                                <div class="media-body ">

                                    <h4 class="media-heading ">Presencia a nivel nacional</h4>

                                    <p>Cerca de 1000 oficinas para tu apoyo</p>

                                </div>

                            </div>



                        </div>
                    </div>
                    <div class="col-md-6 " data-aos="fade-right" data-aos-offset="100" data-aos-duration="500">



                        <div class="feat-media ">



                            <!-- Feature -->

                            <div class="media ">

                                <div class="media-left ">

                                    <a href="# ">

                                        <i class="material-icons ">attach_money</i>

                                    </a>

                                </div>

                                <div class="media-body ">

                                    <h4 class="media-heading ">Comisiones sin tope</h4>

                                    <p>Gana realmente lo que mereces.</p>

                                </div>

                            </div>

                            <!-- Feature -->



                            <div class="media ">

                                <div class="media-left ">

                                    <a href="# ">

                                        <i class="material-icons ">show_chart</i>

                                    </a>

                                </div>

                                <div class="media-body ">

                                    <h4 class="media-heading ">Generas tu propio ingreso</h4>

                                    <p>Aprende a generar dinero de manera residual</p>

                                </div>

                            </div>



                            <div class="media ">

                                <div class="media-left ">

                                    <a href="# ">

                                        <i class="material-icons ">stars</i>

                                    </a>

                                </div>

                                <div class="media-body ">

                                    <h4 class="media-heading ">Bonos 100% alcanzables</h4>

                                    <p>Tres niveles de ingresos <br> • Bonos Trimestrales <br> • Bonos Anuales <br> • Bonos Semanales

                                    </p>

                                </div>

                            </div>


                        </div>
                    </div>

                    <!-- Features Img -->
                    <!-- 
                <div class="col-md-6 " data-aos="fade-left " data-aos-offset="500 " data-aos-duration="800 ">

                    <img src="assets/img/noback.svg " class="img-features img-responsive " alt="feature ">

                </div> -->

                </div>

            </div>

        </section>




        <section id="crecimiento">


            <div class="wrapper ">
                <header class="navigation dark ">
                    <div class="sticky ">

                    </div>
                </header>
                <section class="container-extra dark shp shp-0 ">
                    <section class="content ">
                        <section class="inner-content padding-top-half " data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                            <h2 class="special ">El camino de asesor financiero es siempre acompañado </h2>
                            <!-- <p>I make websites and web applications.<br> Interested? Drop me a line.</p> -->
                        </section>
                    </section>
                </section>
                <section class="container-extra green shp shp-1 " data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                    <section class="content ">
                        <article class="inner-content project ">
                            <section class="project-content project-content-left " data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                <!-- <p class="project-contract ">July 2016 • Collegis Education</p> -->
                                <h2 class="project-name smallerComp "> <sup>1.</sup> Te acompañamos durante todo tu proceso para convertirte en un ASESOR FINANCIERO </h2>
                                <hr class="project-hr ">
                                <h2 class="project-name smallerComp ">
                                    <sup>2.</sup> Nuestra prioridad eres tú

                                </h2>
                                <hr class="project-hr ">
                                <h2 class="project-name smallerComp "> <sup>3.</sup>¡Tenemos más de 20 años de experiencia desarrollando talentos!
                                </h2>
                            </section>
                            <!-- <section class="project-display project-display-right ce-1 nodevice ">
                            <div class="project-display-inner iphone " data-aos="fade-up " data-aos-anchor-placement="top-bottom " data-aos-duration="800 ">
                            </div>
                        </section> -->
                        </article>
                    </section>
                </section>
                <section class="container-extra black shp shp-2 " data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <section class="content ">
                        <article class="inner-content project ">
                            <section class="project-content project-content-right project-content-double ">
                                <h2 class="project-name smallerCompWhite "><sup>4.</sup>Te proporcionamos cartera de clientes, para acelerar tu proceso
                                </h2>
                                <hr class="project-hr-white ">
                                <h2 class="project-name smallerCompWhite ">
                                    <sup>5.</sup> Vanguardia tecnológica que te permite capacitarte, no importando dónde estes
                                </h2>
                                <hr class="project-hr-white ">
                                <h2 class="project-name smallerCompWhite "> <sup>6. </sup> Adquiere tu franquicia financiera sin costo
                                </h2>
                                <hr class="project-hr-white ">
                                <h2 class="project-name smallerCompWhite "> <sup>7. </sup> Tu capacitación va por nuestra cuenta
                                </h2>
                            </section>
                            <!-- <section class="project-display project-display-left ce-2 nodevice ">
                            <div class="project-display-inner ipad ">
                            </div>
                        </section> -->
                        </article>
                    </section>
                </section>
                <section class="container-extra green shp shp-3 ">
                    <section class="content ">
                        <article class="inner-content project last-ele ">
                            <section class="project-content project-content-left ">
                                <h2 class="project-name final ">El éxito ocurre cuando tus sueños son más grandes que tus problemas
                                </h2>
                                <hr class="project-hr final ">
                                <button id="wantoreg" class="btn btn-blue btn-block ">Quiero ser parte de Inbursa</button>

                            </section>
                        </article>
                    </section>
                </section>
                <!-- <section class="container-extra black shp shp-4 "></section> -->
            </div>
        </section>




        <!--======================================== 

           Contact

    ========================================-->



        <section id="contact" class="section-padding ">

            <div class="container ">

                <h2>Contacto</h2>

                <p>Cualquier aclaración no dudes en comunicarte con nosotros</p>

                <!-- <p>sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p> -->

            </div>

            <!-- Contact Info -->

            <div class=" contact-info ">

                <div class="row ">

                    <div class=" ">

                        <div class="icon-box ">

                            <a class="whatsicon card-wpp ">
                                <img src="images/inbursa-ico.png" style="max-width: 80px;" alt="">

                                <h4>Escríbenos</h4>

                                <p>Haz click sobre esta tarjeta y envíanos tus datos


                                </p>

                            </a>


                        </div>

                    </div>



                </div>

            </div>




        </section>



        <!--======================================== 

           Footer

    ========================================-->



        <footer>

            <div class="container ">

                <div class="row ">

                    <div class="footer-caption ">

                        <!-- <img src="assets/img/logo.png " class="img-responsive center-block " alt="logo "> -->

                        <hr>

                        <h5 class="pull-left ">Grupo Financiero Inbursa, &copy;Todos los Derechos Reservados</h5>

                        <!-- <ul class="liste-unstyled pull-right ">

                        <li><a href="#facebook "><i class="fa fa-facebook "></i></a></li>

                        <li><a href="#twitter "><i class="fa fa-twitter "></i></a></li>

                        <li><a href="#linkedin "><i class="fa fa-linkedin "></i></a></li>

                        <li><a href="#instagram "><i class="fa fa-instagram "></i></a></li>

                    </ul> -->

                    </div>

                </div>

            </div>

        </footer>



        <!--======================================== 

           Modal

    ========================================-->

        <!-- Modal -->

        <div class="modal-background">
            <div class="modal">

                <div class="modal__icons">
                    <form class="signup-form " id="contactForm2">
                        <div class="form-content">

                            <h2 class="text-center ">Envíanos tus datos</h2>
                            <p>Conviértete en un Asesor Financiero y sé lo que tu quieras ser</p>

                            <hr>

                            <div class="form-group ">

                                <input type="text " name="mc-name" id="mc-name2" class="form-control " placeholder="Nombre Completo " required="required ">

                            </div>

                            <div class="form-group ">

                                <input type="email " name="mc-email" id="mc-email2" class="form-control " placeholder="Email " required="required ">

                            </div>

                            <div class="form-group ">

                                <input type="text " name="mc-phone" id="mc-phone2" class="form-control " placeholder="WhatsApp " required="required ">

                            </div>
                            <div class="form-group ">

                                <select name="mc-state" id="mc-state2" class="form-control select " placeholder="Lugar de Residencia " required="required ">
                                        <option value="">Lugar de Residencia</option>                                                   
                                        <option value="Ciudad de México">Ciudad de México</option>
                                        <option value="Estado de México">Estado de México</option> 
                                </select>
                            </div>
                            <!-- <div class="form-group ">
                            <select name="mc-city" id="mc-city" class="form-control select hidden" placeholder="Escoge tu Alcaldía" required="required ">                                    
                            </select>
    
                            </div> -->
                            <div class="form-group ">
                                <input name="mc-city" id="mc-city2" list="somethingelse2" placeholder="" class="form-control select hidden">
                                <datalist id="somethingelse2">
                                </datalist>
                            </div>

                            <!-- <div class="form-group ">
        
                                    <input type="text " class="form-control " placeholder="Password " required="required ">
        
                                </div> -->

                            <div class="form-group text-center ">
                                <p class="hidden error">Faltan algunos campos</p>
                                <input type="button" onclick="gonde2r();" class="btn btn-blue btn-block " value="Enviar">

                            </div>
                        </div>
                        <div class="mail-sent">
                            <h2 class="text-center ">Gracias por contactarnos</h2>
                            <img alt="E-Mail Sent bodymovin svg agreed succeed validation sent design motion email" src="https://ci4.googleusercontent.com/proxy/pjjFxUMDYcvkOtQ7BUaM6IV_n3m8em8GSTv4RDWp1HV1kCRICOxQK_7UkMB-j82vtSg69jIebPZVr2hAuXIdLbhYSVNg0OLmqb5e1DJ9PaOePjmX=s0-d-e1-ft#https://cdn.dribbble.com/users/1735807/screenshots/4290565/01.gif"
                                style="height:150px" class="CToWUd a6T" tabindex="0">
                        </div>

                    </form>
                </div>
                <span class="modal__icon modal__icon--close" data-feather="x"></span>

            </div>

            <div class="alert">
                <span class="alert__icon" data-feather="info"></span>
                <span class="alert__text">
                          link copied
                        </span>
            </div>
        </div>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js "></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <script src="assets/bootstrap-3.3.7/bootstrap-3.3.7-dist/js/bootstrap.min.js "></script>

        <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js "></script>

        <script src="assets/js/plugins/bootsnav_files/js/bootsnav.js "></script>

        <script src="assets/js/plugins/typed.js-master/typed.js-master/dist/typed.min.js "></script>


        <script src="assets/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/jquery.magnific-popup.js "></script>

        <!-- <script src="assets/js/plugins/particles.js-master/particles.js-master/particles.min.js "></script> -->

        <!-- <script src="assets/js/particales-script.js "></script> -->

        <script src="assets/js/main.js "></script>

        <script src="https://unpkg.com/aos@next/dist/aos.js "></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"></script>
        <script>
            AOS.init();

            function gonder() {

                $("#home .formi .error").addClass("hidden");
                var name = $('#mc-name').val();
                var phone = $('#mc-phone').val();
                var email = $('#mc-email').val();
                var state = $('#mc-state').val();
                var city = $('#mc-city').val();

                name = jQuery.trim(name);
                phone = jQuery.trim(phone);
                email = jQuery.trim(email);

                if (name == " ") {
                    $('.e_name').fadeIn(100).css("display ", "block ");
                    $('#name').val(name);
                    $('#name').focus();
                }
                if (email == " ") {
                    $('.e_email').fadeIn(100).css("display ", "block ");
                    $('#email').val(email);
                    $('#email').focus();
                }

                function validateEmail(email) {
                    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                    return emailReg.test(email);
                }


                if (name == "" || email == "" || phone == "" || state == "" || city == "") {
                    $("#home .formi .error").removeClass("hidden");
                    $("#home .formi .error").html("Faltan algunos campos");
                    return;
                } else if (!validateEmail(email)) {
                    $("#home .formi .error").removeClass("hidden");
                    $("#home .formi .error").html("Ingresa un mail válido");
                    return;
                }


                $.ajax({
                    type: "POST",
                    url: "mail.php",
                    data: $('#contactForm').serialize(),
                    dataType: "json",
                    success: function(mail_response) {
                        window.location.href = "<?= $url ?>guia.php?user=" + mail_response;
                        // $(".mail-sent ").css("display ", "block ");
                        // $(".mail-sent ").removeClass("mail-error ");
                        // $(".mail-sent ").text(mail_response.msg);
                        // if (mail_response.code != 200) {
                        //     $(".mail-sent ").addClass("mail-error ");
                        // }

                        //Se va a mandar a whats
                    }
                });
                $(".form-content-main").css("display", "none");
                $(".mail-sent-main").css("display", "block");
                // let whatsString = `Quiero ser un asesor financiero, mis datos son:%0A%0A*Nombre :* ${$("#mc-name").val()}%0A*Teléfono:* ${$("#mc-phone").val()}%0A*Mail:* ${$("#mc-email").val()}%0A*Lugar de Residencia:* ${$("#mc-state").val()}%0A`;

                // let start_url = " ";
                // if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                //     start_url = "https://wa.me/+527717463505?text=";
                // } else {
                //     start_url = " https://web.whatsapp.com/send?phone=+527717463505&text=";
                // }

                // window.open(start_url + whatsString, '_blank');
                event.preventDefault();
            }


            function gonde2r() {

                $("#contactForm2 .error").addClass("hidden");
                var name = $('#mc-name2').val();
                var phone = $('#mc-phone2').val();
                var email = $('#mc-email2').val();
                var state = $('#mc-state2').val();
                var city = $('#mc-city2').val();

                name = jQuery.trim(name);
                phone = jQuery.trim(phone);
                email = jQuery.trim(email);

                if (name == " ") {
                    $('.e_name').fadeIn(100).css("display ", "block ");
                    $('#name').val(name);
                    $('#name').focus();
                }
                if (email == " ") {
                    $('.e_email').fadeIn(100).css("display ", "block ");
                    $('#email').val(email);
                    $('#email').focus();
                }



                if (name == "" || email == "" || phone == "" || state == "" || city == "") {
                    $("#contactForm2 .error").removeClass("hidden");
                    $("#contactForm2 .error").html("Faltan algunos campos");
                    return;
                } else if (!validateEmail(email)) {
                    $("#contactForm2 .error").removeClass("hidden");
                    $("#contactForm2 .error").html("Ingresa un mail válido");
                    return;
                }


                $.ajax({
                    type: "POST",
                    url: "mail.php",
                    data: $('#contactForm2').serialize(),
                    dataType: "json",
                    success: function(mail_response) {
                        window.location.href = "<?= $url ?>guia.php?user=" + mail_response;
                    }
                });
                $(".form-content").css("display", "none");
                $(".mail-sent").css("display", "block");
                // let whatsString = `Quiero ser un asesor financiero, mis datos son:%0A%0A*Nombre :* ${$("#mc-name2").val()}%0A*Teléfono:* ${$("#mc-phone2").val()}%0A*Mail:* ${$("#mc-email2").val()}%0A*Lugar de Residencia:* ${$("#mc-state2").val()}%0A`;

                // let start_url = " ";
                // if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                //     start_url = "https://wa.me/+527717463505?text=";
                // } else {
                //     start_url = " https://web.whatsapp.com/send?phone=+527717463505&text=";
                // }

                // window.open(start_url + whatsString, '_blank');
                event.preventDefault();
            }

            var modal = $('.modal');
            var alert = $('.alert');
            let alcaldias = ["Álvaro Obregón", "Azcapotzalco", "Benito Juárez", "Coyoacán", "Cuajimalpa de Morelos", "Cuauhtémoc", "Gustavo A. Madero", "Iztacalco", "Iztapalapa", "Magdalena Contreras", "Miguel Hidalgo", "Milpa Alta", "Tláhuac", "Tlalpan", "Venustiano Carranza", "Xochimilco"];
            let municipios = ['Acambay', 'Acolman', 'Aculco', 'Almoloya de Alquisiras', 'Almoloya de Juárez', 'Almoloya del Río', 'Amanalco', 'Amatepec', 'Amecameca', 'Apaxco', 'Atenco', 'Atizapán', 'Atizapán de Zaragoza', 'Atlacomulco', 'Atlautla', 'Axapusco', 'Ayapango', 'Calimaya', 'Capulhuac', 'Chalco', 'Chapa de Mota', 'Chapultepec', 'Chiautla', 'Chicoloapan', 'Chiconcuac', 'Chimalhuacán', 'Coacalco de Berriozábal', 'Coatepec Harinas', 'Cocotitlán', 'Coyotepec', 'Cuautitlán', 'Cuautitlán Izcalli', 'Donato Guerra', 'Ecatepec de Morelos', 'Ecatzingo', 'El Oro', 'Huehuetoca', 'Hueypoxtla', 'Huixquilucan', 'Isidro Fabela', 'Ixtapaluca', 'Ixtapan de la Sal', 'Ixtapan del Oro', 'Ixtlahuaca', 'Jaltenco', 'Jilotepec', 'Jilotzingo', 'Jiquipilco', 'Jocotitlán', 'Joquicingo', 'Juchitepec', 'La Paz', 'Lerma', 'Luvianos', 'Malinalco', 'Melchor Ocampo', 'Metepec', 'Mexicaltzingo', 'Morelos', 'Naucalpan de Juárez', 'Nextlalpan', 'Nezahualcóyotl', 'Nicolás Romero', 'Nopaltepec', 'Ocoyoacac', 'Ocuilan', 'Otumba', 'Otzoloapan', 'Otzolotepec', 'Ozumba', 'Papalotla', 'Polotitlán', 'Rayón', 'San Antonio la Isla', 'San Felipe del Progreso', 'San José del Rincón', 'San Martín de las Pirámides', 'San Mateo Atenco', 'San Simón de Guerrero', 'Santo Tomás', 'Soyaniquilpan de Juárez', 'Sultepec', 'Tecámac', 'Tejupilco', 'Temamatla', 'Temascalapa', 'Temascalcingo', 'Temascaltepec', 'Temoaya', 'Tenancingo', 'Tenango del Aire', 'Tenango del Valle', 'Teoloyucán', 'Teotihuacán', 'Tepetlaoxtoc', 'Tepetlixpa', 'Tepotzotlán', 'Tequixquiac', 'Texcaltitlán', 'Texcalyacac', 'Texcoco', 'Tezoyuca', 'Tianguistenco', 'Timilpan', 'Tlalmanalco', 'Tlalnepantla de Baz', 'Tlatlaya', 'Toluca', 'Tonanitla', 'Tonatico', 'Tultepec', 'Tultitlán', 'Valle de Bravo', 'Valle de Chalco Solidaridad', 'Villa de Allende', 'Villa del Carbón', 'Villa Guerrero', 'Villa Victoria', 'Xalatlaco', 'Xonacatlán', 'Zacazonapan', 'Zacualpan', 'Zinacantepec', 'Zumpahuacán', 'Zumpango'];

            function validateEmail(email) {
                var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(String(email).toLowerCase());
            }


            $(document).ready(function() {
                $('#mc-state').on('change', function() {
                    if (this.value == "Ciudad de México") {
                        $("#mc-city").removeClass("hidden");
                        let select_str = '';
                        alcaldias.forEach(element => {
                            select_str += '<option value="' + element + '">' + element + '</option>';
                        });
                        $("#somethingelse").html(select_str);
                        $("#mc-city").val("");
                        $("#mc-city").attr("placeholder", "Selecciona tu Alcaldía de Residencia");
                    } else if (this.value == "Estado de México") {
                        $("#mc-city").removeClass("hidden");
                        let select_str = '';
                        municipios.forEach(element => {
                            select_str += '<option value="' + element + '">' + element + '</option>';
                        });
                        $("#somethingelse").html(select_str);
                        $("#mc-city").val("");
                        $("#mc-city").attr("placeholder", "Selecciona tu Municipio de Residencia");
                    } else {
                        $("#mc-city").addClass("hidden");
                        $("#somethingelse").html("");
                        $("#mc-city").val("");
                    }
                });

                $('#mc-state2').on('change', function() {
                    if (this.value == "Ciudad de México") {
                        $("#mc-city2").removeClass("hidden");
                        let select_str = '';
                        alcaldias.forEach(element => {
                            select_str += '<option value="' + element + '">' + element + '</option>';
                        });
                        $("#somethingelse2").html(select_str);
                        $("#mc-city2").val("");
                        $("#mc-city2").attr("placeholder", "Selecciona tu Alcaldía de Residencia");
                    } else if (this.value == "Estado de México") {
                        $("#mc-city2").removeClass("hidden");
                        let select_str = '';
                        municipios.forEach(element => {
                            select_str += '<option value="' + element + '">' + element + '</option>';
                        });
                        $("#somethingelse2").html(select_str);
                        $("#mc-city2").val("");
                        $("#mc-city2").attr("placeholder", "Selecciona tu Municipio de Residencia");
                    } else {
                        $("#mc-city2").addClass("hidden");
                        $("#somethingelse2").html("");
                        $("#mc-city2").val("");
                    }
                });
            });
        </script>

    </body>

    </html>