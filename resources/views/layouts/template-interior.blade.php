<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/Icons/favicon-32x32.png') }}">
    <meta name="author" content="https://www.agenciavandu.com">
    <meta property="og:title" content="Gran Calzada una ciudad viva">
    <meta property="og:type" content="website" />
    <meta name="description"
        content="La Gran Calzada® está creada para conectarte con todo lo que necesitas diariamente: comercios, escuelas, supermercados, etc." />
    <meta name="og:description"
        content="La Gran Calzada® está creada para conectarte con todo lo que necesitas diariamente: comercios, escuelas, supermercados, etc." />
    <meta name="og:url" content="https://www.grancalzada.mx" />
    <meta name="og:site_name" content="Gran Calzada" />
    <meta name="og:image" content="{{ asset('img/gran-calzada-tumb.png') }}" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description"
        content="La Gran Calzada® está creada para conectarte con todo lo que necesitas diariamente: comercios, escuelas, supermercados, etc." />
    <meta name="twitter:title" content="Gran Calzada una ciudad viva" />
    <meta name="twitter:image" content="{{ asset('img/gran-calzada-tumb.png') }}" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-gc.css') }}">
    <link rel="stylesheet" href="{{ asset('css/almada.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/modelos.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Gran Calzada</title>
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2821273661220502');
        fbq('track', 'PageView');

    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=2821273661220502&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Global site tag (gtag.js) - Google Ads: 785328543 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-785328543"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-785328543');

    </script>
</head>

<body>
    <nav class="fixed-top navbar navbar-expand-lg navbar-dark bg-pink">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{ asset('img/Icons/Calzada.svg') }}" width="60" height="60" alt="Gran calzada"
                    loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-5" href="{{ route('index') }}">Inicio <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-5" href="{{ route('almada') }}">Modelos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-5" href="#amenidades-m">Características</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-5" href="#formulario">Recibe una cotización</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div>
        @yield('section')

    </div>

    <footer id="footer-section" class="bgfooter pt-5">
        <div class="container-fluid">
            <div class="row footer-espacio">

                <div class="col-lg-4 col-md-12 col-sm-6">
                    <h1 class="titulo-footer">Contáctanos</h1>
                    <br>


                    <p class="redes"><i class="fa fa-instagram" aria-hidden="true" style="padding-right: 10px;"></i>
                        @Grupocasitas</p>

                    <p class="redes"><i class="fa fa-facebook-official" aria-hidden="true"
                            style="padding-right: 10px;"></i> @Grupocasitas</p>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-6 correo">
                    <br>
                    <p class="redes">info@grupocasitas.com.mx</p>
                    <p class="redes"><i class="fa fa-whatsapp" aria-hidden="true" style="padding-right: 10px"></i>
                        Contacta a un asesor ahora</p>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-6 mx-right">

                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
                    <script>
                        hbspt.forms.create({
                            portalId: "5510950",
                            formId: "90ff5895-6821-490e-b0e1-e13cf421bb52"
                        });

                    </script>
                </div>


            </div>

            <div class="row mt-5 pt-2 oficinas ">

                <div class="col-lg-12" style="text-align: center">
                    <h2 class="puntos-de-venta">Encuentra nuestros puntos de venta</h2>
                </div>

                <div class="col-lg-4">
                    <div class="embed-responsive embed-responsive-4by3"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7451.3932299456565!2d-89.6253903!3d20.9646953!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x676469d86fc45aa3!2sGRUPO%20CASITAS%20DESARROLLOS!5e0!3m2!1ses!2smx!4v1606816390645!5m2!1ses!2smx"
                            width="600" height="600" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0" class="img-fluid"></iframe></div>
                    <h4 class="oficina mt-3">Oficina de Ventas <br> Dirección:</h4>
                    <p class="direccion">Calle 56 entre 61 y 63 Col Centro,<br> Mérida, Yucatán.</p>
                </div>
                <div class="col-lg-4">
                    <div class="embed-responsive embed-responsive-4by3"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14902.728365377367!2d-89.62163499638639!3d20.96527821803639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5671638a4bd525%3A0x8869213d7b04479b!2sGrupo%20Casitas!5e0!3m2!1ses!2smx!4v1606817830688!5m2!1ses!2smx"
                            width="600" height="600" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0" class="img-fluid"></iframe></div>
                    <h4 class="oficina mt-3">Oficina de Ventas <br> Dirección:</h4>
                    <p class="direccion">Calle 63-A entre 56 y 58 2da Calle<br> Nueva, Centro, Mérida, Yucatán.</p>
                </div>
                <div class="col-lg-4">
                    <div class="embed-responsive embed-responsive-4by3"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d232.85681188382955!2d-89.623922!3d20.9641986!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4d6e8a6817cb205a!2sGRUPO%20CASITAS%20DESARROLLOS!5e0!3m2!1ses!2smx!4v1606817777639!5m2!1ses!2smx"
                            width="600" height="600" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0" class="img-fluid"></iframe></div>
                    <h4 class="oficina mt-3">Oficina de Ventas <br> Dirección:</h4>
                    <p class="direccion">Calle 60 entre 65 y 67 Frente a la<br>Japay Mérida, Yucatán.</p>
                </div>
            </div>

            <div class="row pt-5 mt-2 text-center ">
                <div class="col-md-12">
                    <div style="color: white">
                        <p class="copyright" style="text-align: center;">UN DESARROLLO DE<small>
                                <img src="{{ asset('img/Icons/Logo-Casitas-bco.svg') }}"
                                    class="img-fluid casitas-footer" style="padding-bottom: 8px" alt="">
                    </div>
                </div>

            </div>

    </footer>
    <!--Page end-->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->





    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

    </script>

    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/5510950.js"></script>
    <!-- End of HubSpot Embed Code -->
</body>

</html>
