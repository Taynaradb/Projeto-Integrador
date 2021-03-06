<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rosa do bem</title>

    <!-- shortcut icon -->
    <link href="images/heartbig.png" rel="shortcut icon">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- OWL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <!-- default theme -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
    <!-- personalized css -->
    <link href="css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- START OF HEADER BAR -->
    <header>
        <div class="preload">
            <img class="heart" src="images/heart.png" alt="heart">
        </div>
        <div class="header">

            <img class="logo" src="images/logo.png">
            <a href="publico/projeto.php" class="btn mybutton-saiba">SAIBA MAIS</a>
            <a href="publico/galeria.php" class="btn  mybutton-galeria">GALERIA DE IMAGENS</a>
        </div>
    </header>


    <!-- END OF HEADER BAR -->

    <!-- START OF NAV BAR -->
    <div class="menu-bar sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.php">Rosa do bem</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="publico/projeto.php">Projeto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="publico/direito.php">Direitos & Leis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="publico/login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="publico/campanha.php">Campanha 2021</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- END OF NAV BAR -->


    <!-- START of project section -->
    <div class="container one">
        <h1 class="projeto">Sobre o projeto</h1>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla impedit quia, fugiat magni facere
            et deleniti aliquid neque placeat in fuga debitis, commodi laborum animi ipsam distinctio? Sit, la
            udantium voluptas!
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla impedit quia, fugiat magni facere
            et deleniti aliquid neque placeat in fuga debitis, commodi laborum animi ipsam distinctio? Sit, la
            udantium voluptas!
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla impedit quia, fugiat magni facere
            et deleniti aliquid neque placeat in fuga debitis, commodi laborum animi ipsam distinctio? Sit, la
            udantium voluptas!
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla impedit quia, fugiat magni facere
            et deleniti aliquid neque placeat in fuga debitis, commodi laborum animi ipsam distinctio? Sit, la
            udantium voluptas!
            <a class="continue" href="publico/projeto.php">Continue lendo aqui</a>
        </p>
    </div>
    <!-- END of project section -->

    <!-- START OF NEWS SECTION-->


    <div class="container owl-three owl-carousel owl-theme">
        <div class="item">
            <div class="row">
                <div class="col">
                    <img class="image img-fluid" src="images/dridamjr.JPG"
                        alt="Inscrições rosa do bem durante campanha 2020">
                </div>
                <div class="col">
                    <div class="news">
                        <p>
                            O Instituto Rosa do Bem realiza nesta segunda-feira (8), Dia Internacional da Mulher, uma
                            live com o mastologista Idam Júnior, do Hospital de Amor de Barretos. A transmissão começa
                            às 19h30 no perfil oficial do instituto @rosadobem.oficial.
                        </p>
                        <a href="publico/noticias.php" class="btn btn-primary mybutton">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="row">
                <div class="col">
                    <img class="image img-fluid" src="images/rosadobem-foto.jpg"
                        alt="Inscrições rosa do bem durante campanha 2020">
                </div>
                <div class="col">
                    <div class="news">
                        <p>
                        <h2 class="blog-post-title">Rosa do Bem abre 300 novas inscrições</h2>

                        <p>Os exames estão sendo realizados este ano em parcerias com clínicas particulares da cidade. A
                            parceria com o
                            Hospital do Amor, que não pôde enviar a carreta de mamografias esse ano em função da
                            pandemia, segue para o
                            atendimento das mulheres que tiverem indicação de exames complementares e, eventualmente,
                            tratamento.</p>
                        </p>
                        <a href="publico/noticias.php#n1" class="btn btn-primary mybutton">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END OF NEWS SECTION -->


    <!-- START OF VIDEO SECTION -->



    <div class="container">
        <div class="container owl-two owl-carousel owl-theme">

            <div class="item">
                <video width="480" height="400" controls>
                    <source src="images/entrevista3.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="item">
                <video width="480" height="400" controls>
                    <source src="images/entrevista1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="item">
                <video width="480" height="400" controls>
                    <source src="images/entrevista2.mp4" type="video/mp4">
                </video>
            </div>
            <div class="item">
                <video width="480" height="400" controls>
                    <source src="images/entrevista4.mp4" type="video/mp4">
                </video>
            </div>

        </div>
    </div>

    <!-- END OF VIDEO SECTION -->



    <!-- START OF COUNTER SECTION-->

    <div class="middle">
        <div class="two">
            <h1>Realizações</h1>
            <p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                praesentium voluptatum"</p>
        </div>
        <div class="counting-sec">
            <div class="inner-width">
                <div class="col">
                    <span class="iconify" data-icon="la:weight-hanging" data-inline="false"></span>
                    <div class="num">73</div>
                    Toneladas de alimentos doados
                </div>

                <div class="col">
                    <span class="iconify" data-icon="la:shoe-prints" data-inline="false"></span>
                    <div class="num">4800</div>
                    Pessoas na caminhada
                </div>

                <div class="col">
                    <span class="iconify" data-icon="ri:health-book-line" data-inline="false"></span>
                    <div class="num">6000</div>
                    Mamografias realizadas
                </div>

                <div class="col">
                    <span class="iconify" data-icon="medical-icon:i-womens-health" data-inline="false"></span>
                    <div class="num">600</div>
                    Papanicolau realizadas
                </div>
            </div>
        </div>
    </div>

    <!-- END OF COUNTER SECTION -->

    <!-- START OF SPONSERS SECTION -->


    <div class="container owl-one owl-carousel owl-theme">
        <div class="item">
            <a target="_blank" href="https://housejeans.com.br/"> <img src="images/housejeans-logo.jpeg"></a>
        </div>
        <div class="item">
            <a target="_blank" href="http://walfranmeneghel.com.br/"> <img src="images/walfran-logo.jpeg"> </a>
        </div>
        <div class="item">
            <a target="_blank"
                href="https://doeamor.hospitaldeamor.com.br/?utm_source=google&utm_medium=cpc&utm_campaign=outubro&utm_term=search&gclid=CjwKCAiAhbeCBhBcEiwAkv2cYzFhDGMGU_MfSNsqyAZxyCgqD4CNDq0aBTKno00zagwY-Fxv-AOSfRoCSToQAvD_BwE">
                <img src="images/hospitaldoamor-logo.jpeg"></a>
        </div>
        <div class="item">
            <a target="_blank"
                href="https://www.sitemercado.com.br/supermercadossaovicente/itu-loja-sao-vicente-itu-jardim-das-rosas-av-eugen-wissmann?utm_source=google&utm_medium=cpc&utm_campaign=sao-vicente-ecommerce-impression-share-search-todas&utm_content=texto-search&utm_term=marca-todas&gclid=CjwKCAiAhbeCBhBcEiwAkv2cY-MMqDP4pgJpISmxXOFBK61kRLpjyM716Xqei1xyA4UTHCHgyrFsNBoCmbsQAvD_BwE">
                <img src="images/saovicente-logo.png"></a>
        </div>
        <div class="item">
            <a target="_blank" href="https://liberal.com.br/"> <img src="images/liberal-logo.png"></a>
        </div>
        <div class="item">
            <a target="_blank"
                href="https://www.ameripan.com.br/?gclid=CjwKCAiAhbeCBhBcEiwAkv2cY_b_qJ9M65ugP1YVEcm3Px1o-m7sYBegLcCYZBPsM_hCbL0qCQPv3RoCsucQAvD_BwE">
                <img src="images/ameripan-logo.png"></a>
        </div>
        <div class="item">
            <a target="_blank"
                href="https://www.americana.sp.gov.br/americanaV6_index.php?it=22&a=fundosMunicipais_solidariedade">
                <img src="images/logo-fundo-solidariedade-logo.jpeg"></a>
        </div>

    </div>
    </div>


    <!-- END OF SPONSERS SECTION -->


    <!-- START OF FOOTER-->
    <footer>
        <div class="footer-content">
            <h5>Rosa do Bem</h5>

            <ul class="socials">
                <li><a href="https://www.instagram.com/rosadobem.oficial/" target="_blank"><img src="images/instagram.png"></a></li>
                <li><a href="https://www.facebook.com/rosadobem" target="_blank"><img src="images/facebook.png"></a></li>
                <li><a href="https://api.whatsapp.com/send?phone=5519974019063&text=Oi!%20Vim%20pelo%20site.%20Gostaria%20de%20alguma%20informa%C3%A7%C3%A3o.%20%20" target="_blank"><img src="images/whatsapp.png"></a></li>
                <li><a href="mailto:taynara@digrecco.com" target="_blank"><img src="images/email.png"></a></li>
            </ul>
        </div>
        <div class="footer-copyright text-center py-3">
            <p>&copy; Copyright
                <a href="#">Rosadobem.com.br</a>
            </p>
            <p>Designed By TDB</p>
        </div>
    </footer>
    <!-- END OF FOOTER-->

    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- OWL CAROUSEL-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
    <!-- JAVASCRIPT -->
    <script src="js/function.js" type="text/javascript"></script>

</body>

</html>