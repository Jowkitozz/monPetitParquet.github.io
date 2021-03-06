<!DOCTYPE html>
<html lang="fr" class="no-js">

<head>

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="Le site Mon Petit Parquet">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Mon Petit Parquet">
    <link rel="apple-touch-icon" href="/monPetitParquet.github.io/img/icons/Icone128.png">
    <meta name="theme-color" content="#009962" />

    <!-- Site Title -->
    <title>Mon Petit Parquet</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="manifest" href="/monPetitParquet.github.io/manifest.json">


</head>

<body>
    <script src="js/native.fun.js"></script>
    <header id="header">
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index.html"><img src="img/logo.png" alt="" title="" />.</a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="/">Accueil</a></li>
                        <li><a href="/actus">Actualités</a></li>
                        <li><a href="/qsm">Qui sommes nous ?</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->

    <!-- start banner Area -->
    <section class="banner-area">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 banner-left">
                    <h1>Mon Petit Parquet</h1>
                    <p>
                        Mon Petit Parquet (également appelé MPP) est un jeu français créé en 2020. Il s'appuie depuis
                        juillet 2019 sur la NBA.
                    </p>
                    <a href="#" class="primary-btn text-uppercase">Découvrez maintenant</a>



                </div>
                <div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
                    <img class="img-fluid" src="img/hero-img.jp2" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <section class="testimonial-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Fonctionnalité PWA</h1>
                    </div>
                </div>
            </div>
            <input type="button" class="btn btn-warning" value="Fais moi vibrer !" onclick="doVibrate();" />
            <input type="button" class="btn btn-warning" value="Où suis-je ?" onclick="geoFindMe();" />
            <input type="button" class="btn btn-warning" value="Me vois-tu ?" onclick="startVideo();" />
            <input type="button" class="btn btn-warning" value="Suis-je belle ?" onclick="takePicture();" />
            <input type="button" class="btn btn-warning" value="Arrête !" onclick="stopVideo();" />
            <p id="status"></p>
            <canvas id="canvas-touch" width="200" height="200" style="border:solid black 1px;">
                Pas possible
            </canvas>
            <p id="touch"></p>
        </div>
    </section>






    <!-- Start fact Area -->
    <section class="facts-area section-gap" id="facts-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 single-fact">
                    <h1 class="counter">3652</h1>
                    <p>Matchs couverts</p>
                </div>
                <div class="col-lg-3 col-md-6 single-fact">
                    <h1 class="counter">6847</h1>
                    <p>Articles d'actus</p>
                </div>
                <div class="col-lg-3 col-md-6 single-fact">
                    <h1 class="counter">3257</h1>
                    <p>Tasses de cafés</p>
                </div>
                <div class="col-lg-3 col-md-6 single-fact">
                    <h1 class="counter">701</h1>
                    <p>Joueurs référencés</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end fact Area -->

    <!-- Start testimonial Area -->
    <section class="testimonial-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Que dit-on de nous ?</h1>
                        <p>On vous aime bien, soyez gentils avec nous svp !</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-testimonial">
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid" src="img/elements/user1.png" alt="">
                        </div>
                        <div class="desc">
                            <p>
                                Cette appli est géniale !! On y retrouve tous nos joueurs préférés,
                                leur statistiques et leurs exploits :)
                            </p>
                            <h4>Jean Maxwell</h4>
                            <p>Gros fan des Lakers</p>
                        </div>
                    </div>
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid" src="img/elements/user2.png" alt="">
                        </div>
                        <div class="desc">
                            <p>
                                Exactement ce que je cherchais. Toutes les informations basket regroupés dans un seul
                                endroit.
                                C'est parfait pour rester au courant de tout.
                            </p>
                            <h4>Daniel Craig</h4>
                            <p>Joueur du dimanche</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonial Area -->

    <!-- Start brands Area -->
    <section class="brands-area">
        <div class="container">
            <div class="brand-wrap">
                <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="img/l1.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="img/l2.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="img/l3.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="img/l4.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="img/l5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End brands Area -->

    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>A propos</h4>
                        <p>
                            Depuis 2020, MPP accompagne les sportifs et les fans du basket pour leurs plus grand
                            plaisir.
                            <a href="/services.html" target="_blank">Voir plus</a>
                        </p>
                        <p class="footer-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved <i
                                class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Jowkitozz &
                                Damso</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>Newsletter</h4>
                        <p>Reste connecté avec nous !</p>
                        <div class="" id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="EMAIL"
                                        placeholder="Entrer votre adresse mail" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Entrer votre adresse mail '" required=""
                                        type="email" for="newsletter">
                                    <label for="newsletter" style="display: none;">Entrer votre adresse </label>
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <span class="lnr lnr-arrow-right">.</span>
                                        </button>
                                    </div>
                                    <div class="info"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                    <div class="single-footer-widget">
                        <h4>Nos réseaux sociaux</h4>
                        <p>Venez tchatcher avec nous !</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('basketmpp.eu-west-3.elasticbeanstalk.com/service-worker.js')
                    .then((reg) => {
                        console.log('Service worker registered.', reg);
                    });
            });
        }
    </script>

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.tabs.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/simple-skillbar.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>
</body>

</html>