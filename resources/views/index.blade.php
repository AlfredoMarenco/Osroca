@extends('layouts.template')

@section('section')
    <section id="f-sec">
        <div class="col-lg-12 col-md-12 col-sm-12 banner">
            <img src="/img/Icons/Logo-GranCalzada.svg" class="img-fluid logo-banner" alt="Gran Calzada | Ciudad Viva">
        </div>
    </section>
    <section id="s-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 left-one">
                    <h1 class="una-ciudad">¡Una Ciudad Viva!</h1>
                    <div class="row cont">
                        <div class="col-6">
                            <img src="/img/Icons/Calzada-1.png" class="img-fluid icono" alt="">
                            <p class="caracteristicas">Poniente <br> de la ciudad</p>
                        </div>
                        <div class="col-6">
                            <img src="/img/Icons/3km.png" class="img-fluid icono-2" alt="">
                            <p class="caracteristicas dis-1">Distancia<br> de periférico</p>
                        </div>
                    </div>
                    <div class="row cont">
                        <div class="col-6 ">
                            <img src="/img/Icons/116.png" class="img-fluid icono-1" alt="">
                            <p class="caracteristicas">Hectáreas</p>
                        </div>
                        <div class="col-6">
                            <img src="/img/Icons/vivienda.png" class="img-fluid icono vivienda" alt="">
                            <p class="caracteristicas">Más de 4,000 viviendas<br>
                                divididas en dos desarollos</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 right-one">
                    <img src="/img/1.png" alt="Gran Calzada | Ciudad Viva" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Segunda sección -->
    <section id="t-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 right-one">
                    <img src="/img/2.png" alt="Gran Calzada | Ciudad Viva" class="img-fluid arboleda">
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 right-one">
                    <div class="texto-derecha">
                        <h1 class="una-ciudad-1">Una ciudad solo para ti, <br> decídete vivir en ella</h1>
                        <div class="boton-rosa"><a href="#" ><button class="btn btn-pink">Precalifícate</button></a></div>
                    </div>

                    <div class="row mt-5 inline-block">
                        {{-- primer icono de la primera fila --}}
                        <div class="col-2 text-right ">
                            <img src="img/Icons/Icon-Planeacion.svg" class="img-fluid mt-1"  alt="">
                        </div>
                        <p class="col-4 text-left caracteristicas-icon p-2 u-ciudad">UNA CIUDAD<br>PLANEADA</p>
                        {{-- segundo icono primera fila --}}
                        <div class="col-2 text-right ">
                            <img src="img/Icons/Icon-Equipamiento.svg" class="img-fluid" alt="">
                        </div>
                        <p class="col-4 text-left caracteristicas-icon p-2 my-3">EQUIPAMENTO</p>
                    </div>
                    <div class="row">
                         {{-- primer icono de la segunda fila --}}
                         <div class="col-2 text-right ">
                            <img src="img/Icons/Icon-Concreto.svg" class="img-fluid mt-2" alt="">
                        </div>
                        <p class="col-4 text-left caracteristicas-icon p-12 u-concreto">CONCRETO<br>HIDRÁULICO</p>
                        {{-- segundo icono segunda fila --}}
                        <div class="col-2 text-right ">
                            <img src="img/Icons/Icon-Drenaje.svg" class="img-fluid mt-2" alt="">
                        </div>
                        <p class="col-4 text-left caracteristicas-icon p-2 u-planta">PLANTA DE<br>TRATAMIENTO</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Escuelas - Zonas Comerciales - Ciclopista - Parques Interactivos -->

    <section id="resumen">
        <div class="container-fluid">
            <div class="row amenidades">
                <!-- uno -->
                <div class="col-lg-3 col-md-6 col-sm-4">
                    <img src="/img/2-escuelas.png" alt="2 escuelas" class="i-resumen img-fluid">
                </div>
                <!-- uno -->
                <div class="col-lg-3 col-md-6 col-sm-">
                    <img src="/img/21-zonas-comerciales.png" alt="2 escuelas" class="i-resumen img-fluid">
                </div>
                <!-- uno -->
                <div class="col-lg-3 col-md-6 col-sm-4">
                    <img src="/img/1-ciclopista.png" alt="2 escuelas" class="i-resumen img-fluid">
                </div>
                <!-- uno -->
                <div class="col-lg-3 col-md-6 col-sm-4">
                    <img src="/img/8-parques.png" alt="2 escuelas" class="i-resumen img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="rosa">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 190">
            <path fill="#e5007d " fill-opacity="1"
                d="M0,160L60,149.3C120,139,240,117,360,122.7C480,128,600,160,720,170.7C840,181,960,171,1080,160C1200,149,1320,139,1380,133.3L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
        </svg>
        <div class="fondo-1">
            <div class="container-fluid">
                <div class="row texto">
                    <div class="col-lg-12 col-md-12 col-sm-12 centro">
                        <img src="/img/Icons/Calzada.svg" class="img-fluid calzada-rosa" alt="Gran Calzada | Ciudad Viva">
                        <h1 class="estas-en">Estás en el camino correcto <br> para
                            cambiar y mejorar tu estilo de vida,<br>
                            es el momento de vivir otro entorno.</h1>
                        <a href="#" class="boton-rosa"><button class="btn btn-blue">Conoce los desarrollos</button></a>
                    </div>
                </div>
            </div>
        </div>

        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120">
            <path fill="#e5007d " fill-opacity="1"
                d="M0,64L80,53.3C160,43,320,21,480,21.3C640,21,800,43,960,53.3C1120,64,1280,64,1360,64L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
            </path>
        </svg>



    </section>

    <section id="casitas">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h2 class="respaldados">Respaldados por un <br class="espaciado">
                        Gran Desarrollador</h2>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 casitas-col">
                    <img src="img/Icons/Logo-Casitas.png" class="img-fluid casitas-l" alt="">
                </div>
            </div>
            <div class="col-lg-12">
                <p class="grupo-casitas">Grupo Casitas Desarrollos®, empresa con 15 años de experiencia diseñando,
                    planeando, construyendo y comercializando comunidades, en busca siempre de la innovación y
                    sustentabilidad para otogar a los habitantes de sus desarrollos beneficios exclusivos de calidad,
                    ubicación y diseño.</p>
            </div>

            <div class="row">
                <div class="col-lg-12 comunidades">
                    <img src="img/creando-comunidades.png" alt="" class="img-fluid ">
                </div>
            </div>
        </div>

    </section>

    <section id="urbanizacion">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0b2650" fill-opacity="1"
                d="M0,224L80,224C160,224,320,224,480,240C640,256,800,288,960,304C1120,320,1280,320,1360,320L1440,320L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
        <div class="container-fluid urbanizacion">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="t-urb">Urbanización y Gran <br>Conectividad Interior</h1>
                    <p class="p-urb">Trasládate caminando dentro de amplias y arboladas banquetas, o rodando en familia
                        por la ciclopista. <br>  La Gran Calzada® está creada para conectarte con todo lo que necesitas
                        diariamente: comercios, escuelas, supermercados, etc.</p>
                    <div class="boton"><a href="#"> <button class="btn btn-pink"> Encuentra tu hogar </button> </a></div>
                </div>
            </div>
        </div>

        <!-- Linea de etapas -->
        <div class="bg-etapas" style="text-align: center">
            <img src="/img/etapas-3.png" class="img-fluid etapas" alt="">

        </div>
        <!-- Fin Linea de etapas -->
        <div class="fondo container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="t-urb">Gran Ubicación Privilegiada</h1>
                    <p class="p-urb dos">Ubicado el poniente de la ciudad y se centra en una zona de alto crecimiento en el <br class="enter">
                        estado, reconocida por su abundante generación de empleos y gran conexión.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 auto-p">
                        <img src="/img/Icons/Icon-Auto.svg" alt="" class="img-fluid auto">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 minuto-p montse">
                        <h2 style="color: white" class="minuto">5<h2>
                                <h4 style="color: white" class="min-des">MIN PERIFÉRICO</h4>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 minuto-p der montse">
                        <h2 style="color: white" class="minuto">8<h2>
                                <h4 style="color: white" class="min-des">MIN CIUDAD<br>INDUSTRIAL</h4>
                    </div>
                </div>
                <div class="row cercania">
                    <div class="col-lg-4 col-md-4 col-sm-12 auto-p">
                        <img src="/img/Icons/Icon-Bus.svg" alt="" class="img-fluid auto">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 minuto-p montse">
                        <h2 style="color: white" class="minuto">15<h2>
                                <h4 style="color: white" class="min-des">MIN PERIFÉRICO</h4>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 minuto-p der montse">
                        <h2 style="color: white" class="minuto">17<h2>
                                <h4 style="color: white" class="min-des">MIN CIUDAD<br>INDUSTRIAL</h4>
                    </div>
                </div>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120">
            <path fill="#0b2650" fill-opacity="1"
                d="M0,64L80,53.3C160,43,320,21,480,21.3C640,21,800,43,960,53.3C1120,64,1280,64,1360,64L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
            </path>
        </svg>
    </section>

    <section id="desarrollos">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 cal-rosa-1">
                    <img src="img/Icons/Calzada-2.svg" class="img-fluid cal-rosa" alt="">
                </div>
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <h2 class="titulo-desarrollos">Dos desarrollos <b><br>Para disfrutar la vida</b></h2>
                </div>
            </div>

            <!-- DESARROLLOS -->
            <div class="pad">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 fo-a  almada-c">
                        <img src="/img/Icons/Logo-Almada.png" class="almada img-fluid" alt="">
                        <h3 class="lead costo">DESDE <B>$360,000</B></h3>
                        <div class="boton-2">
                            <a href="#"><button class="btn btn-primary">Encuentra tu casa</button></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 fo-v almada-c">
                        <img src="/img/Icons/Logo-Miraverde.png" class="miraverde img-fluid" alt="">

                        <div class="boton-2">
                            <a href="#"><button class="btn btn-primary b-mira">P R O X Í M A M E N T E</button></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
