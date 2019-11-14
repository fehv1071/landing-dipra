<!DOCTYPE html>

<html lang="es">

<?php
    $url="http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
    $url = explode('/',$url);
    array_pop($url);
    $url = implode('/', $url); 

    if(! isset($_GET['user'])){
        header("Location: ".$url);
        die();
    }else{
        $servername = "localhost";
        $username = "diprapc9_1071dig";
        $password = "Dipra97697";
        $id = $_GET['user']; 
        $conn = new PDO("mysql:host=$servername;dbname=diprapc9_reclutamiento_inbursa", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
        $sql = "SELECT * FROM landing_reg WHERE id = ".$id;
        foreach($conn->query($sql) as $row){
            $nombre = $row["name"];
            $mail = $row["mail"];
            $phone = $row["phone"];
            $state = $row["state"];
            $city = $row["city"];     
        }

    }
?>


<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Inbursa - Comienza tu camino como asesor financiero">

    <meta name="keywords" content="asesor financiero, inbursa, crea tu camino">

    <link rel="shortcut icon" type="image/x-icon" href="images/inbursa-ico.png">


    <title>Inbursa - Comienza tu camino como asesor financiero</title>



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

                <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">

                    <i class="fa fa-bars" style="font-size: 23px"></i>
 
                </button> -->

                <a class="navbar-brand" href="#brand">

                    <img src="images/inbursa.png" style="width: 9rem" class="logo alt-landing" alt="logo">

                </a>

            </div>

            <!-- End Header Navigation -->



            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="navbar-menu">

                <ul class="nav navbar-nav navbar-right">
                    <li class="active scroll">
                        <a href="#home"></a>
                    </li>
                    <!-- 

                    <li class="scroll"><a href="#features">Beneficios</a></li>

                    <li class="scroll"><a href="#crecimiento">Crecimiento</a></li>

                    <li class="scroll"><a href="#contact">Contacto</a></li>

                    <li class="scroll">
                        <a class="whatsicon"><img src="images/wp-ico.png" style="max-width: 28px; margin-top: -4px; -webkit-filter: drop-shadow(2px 2px 6px rgba(0, 0, 0, 0.23)); "></a>
                    </li> -->


                </ul>

            </div>

            <!-- /.navbar-collapse -->

        </div>

    </nav>



    <!--//** Banner**//-->

    <section id="home" class="guide-home">

        <div class="container">

            <div class="row">

                <!-- Introduction -->

                <div class="col-md-12  caption" style="text-align: center;">

                    <h1 class="biggo">¡Felicidades! </h1>
                    <h2> Acabas de dar tu primer paso como Asesor Financiero</h2>
                    <div class="">

                        <div class="video-card video-guide">

                            <div id="container">
                                <video id='video' controls="controls" preload='none' width="100%" poster="assets/vid/manu.jpg">
                                          <source id='mp4' src="<?= $url ?>/assets/vid/manu.mp4 " type='video/mp4'/>
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

                    <br>
                    <div class="">

                        <button id="wantoreg" style="width: 80%" class="btn btn-blue btn-block" onclick="gonder()">Descarga la Guía del Asesor Financiero</button>

                        <a href="<?= $url ?>/suscrito.php?user=<?= $id ?>"  class="btn btn-transparent subscribe">Suscríbete a nuestro Boletín Semanal</a>

                    </div>

                    <!-- <a class="btn btn-blue popup-youtube " href="https://www.youtube.com/watch?v=Q8TXgCzxEnw ">
                        
                        <i class="material-icons ">play_circle_filled</i>Ver un video
                        
                    </a> -->

                </div>

                <!-- Sign Up -->


            </div>

        </div>

    </section>




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
                            <input name="mc-city" id="mc-city2" list="somethingelse" placeholder="" class="form-control select hidden">
                            <datalist id="somethingelse">
                                    <option value="Ciudad de México">Ciudad de México</option>
                                    <option value="Estado de México">Estado de México</option> 
                            </datalist>
                        </div>


                        <!-- <div class="form-group ">
        
                                    <input type="text " class="form-control " placeholder="Password " required="required ">
        
                                </div> -->

                        <div class="form-group text-center ">

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
        var modal = $('.modal');
        var alert = $('.alert');

        function gonder() {
            let whatsString = `Acabo de descargar la guía del asesor financiero y me gustaría recibir más información. mis datos son:%0A%0A*Nombre :* <?= $nombre ?>%0A*Teléfono:* <?= $phone ?>%0A*Mail:* <?= $mail ?>'%0A*Lugar de Residencia:* <?= $state ?>%0A*Ciudad de Residencia:* <?= $city ?>%0A`;

            let start_url = " ";
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                start_url = "https://wa.me/+527717463505?text=";
            } else {
                start_url = " https://web.whatsapp.com/send?phone=+527717463505&text=";
            }

            window.open(start_url + whatsString, '_blank');

            window.location.href = "<?= $url ?>/alert.php?user=<?= $id ?>";


            $("#wantoreg").addClass("hidden");
            $(".biggo").html("Gracias por descargar la guía");
            $("#home h2").html("Te invitamos inscribirte a nuestro boletín semanal");

            // $.ajax({
            //     type: "POST",
            //     url: "alert.php",
            //     data: {
            //         id : "<?= $id ?>",
            //         name : "<?= $nombre ?>",
            //         mail : "<?= $mail ?>",
            //         phone : "<?= $phone ?>",
            //         state : "<?= $state ?>",
            //         city : "<?= $city ?>",
            //     } ,
            //     // dataType: "json",
            //     success: function(mail_response) {
            //         var blob=new Blob([mail_response]);
            //         var link=document.createElement('a');
            //         link.href=window.URL.createObjectURL(blob);
            //         link.download="dsads.pdf";
            //         link.click();
            //     }
            // });
        }

   

       
    </script>

</body>

</html>