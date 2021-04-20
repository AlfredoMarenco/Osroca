@extends('layouts.template-miraverde')

@section('section')
    <section>
        <div class="bg-mora">
            <div class="container">
                <div class="row espacio">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h1 class="titular">Tu nuevo hogar <br>está aquí</h1>
                        @if ($desde->visible == 1)
                            <h2 class="desde lead">desde <b>${{ number_format($desde->price) }}</b></h2>
                        @else
                            <h2 class="desde lead"></b></h2>
                        @endif
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 alm">
                        <img src="{{ asset('img/Icons/Logo-miraverde-inv-2.svg') }}" class="img-fluid alm-inv" alt="">
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
            <path fill="#215a35" fill-opacity="1"
                d="M0,96L120,96C240,96,480,96,720,106.7C960,117,1200,139,1320,149.3L1440,160L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z">
            </path>
        </svg>
    </section>
    <section id="modelos">
        <div class="container">
            <!--modelo Balché -->
            <h1 class="familia" id="aguamarina">Tu familia merece un respiro</h1>
            <div class="row p-0">
                <div class="col-lg-5 col-md-12 col-sm-12 uno-dos imagen padding-0">
                    <img src="{{ asset('img/miraverde/balche/pagina-modelos.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 bg-aqua uno-uno">
                    @foreach ($modelos as $modelo)
                        @if ($modelo->id == 5)
                            <h1 class="modelo-titulo-1" style="text-align: center">{{ $modelo->name }}</h1>
                            <div class="costo-modelo">
                                @if ($modelo->visible == 1)
                                    <button class="boton-modelo">Desde: ${{ number_format($modelo->price) }}</button>
                                @else
                                @endif
                            </div>
                            <div class="costo-modelo">
                                <p class="espacio-terreno">Terreno desde: 7 x 17 m <br>Construcción de: 63.28 m2 </p>
                            </div>
                            <div class="row">
                                <div class="col-4 modelo-car-1">
                                    <img src="{{ asset('img/Icons/Icon-Planta-bco.png') }}" alt=""
                                        class="img-fluid caract-mod-1-1-p">
                                    <p class="descri">1 Planta</p>
                                </div>
                                <div class="col-4 modelo-car">
                                    <img src="{{ asset('img/Icons/Icon-Recaramara-doble-bco.png') }}" alt=""
                                        class="img-fluid caract-mod">
                                    <p class="descri">2 Recámaras</p>
                                </div>
                                <div class="col-4 modelo-car-2">
                                    <img src="{{ asset('img/Icons/Icon-Baño-bco.png') }}" alt=""
                                        class="img-fluid caract-mod-1-1">
                                    <p class="descri">1 Baño</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 modelo-car-1">
                                    <img src="{{ asset('img/Icons/Icon-Sala-bco.png') }}" alt=""
                                        class="img-fluid caract-mod-1-s">
                                    <p class="descri espacio">Sala</p>
                                </div>
                                <div class="col-4 modelo-car-3">
                                    <img src="{{ asset('img/Icons/Icon-Comedor-bco.png') }}" alt=""
                                        class="img-fluid caract-mod-2">
                                    <p class="descri">Comedor</p>
                                </div>
                                <div class="col-4 modelo-car-2">
                                    <img src="{{ asset('img/Icons/Icon-Cocina-bco.png') }}" alt=""
                                        class="img-fluid caract-mod-1">
                                    <p class="descri">Cocina</p>
                                </div>
                            </div>
                            <div class="row centro-b">
                                <div class="col-6 botones-1">
                                    <a href="{{ route('balche') }}" class="btn btn-secondary tipo">Cotiza tu
                                        casa</a>
                                </div>
                                <div class="col-6 botones">
                                    <a href="{{ asset('download/ficha-tecnica-balche.pdf') }}" data-toggle="modal"
                                        data-target="#staticBackdrop" class="btn btn-secondary tipo">Ficha técnica</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Responde el formulario
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('email.send') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="modelo" value="balche">
                                                        <div class="form-group">
                                                            <label for="formcontrolnombre">Nombre*</label>
                                                            <input type="text" name="nombre" class="form-control"
                                                                id="formcontrolnombre" required="required"
                                                                placeholder="Escribe tu nombre">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formcontrolapellido">Correo*</label>
                                                            <input type="mail" name="correo" class="form-control"
                                                                id="formcontrolnombre" required="required"
                                                                placeholder="Escribe tu email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formcontrolcorreo">Número de teléfono*</label>
                                                            <input type="text" name="telefono" class="form-control"
                                                                id="formcontrolcorreo" required="required"
                                                                placeholder="Escribe tu telefono">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formcontroltelefono">¿Que presupuesto
                                                                tienes?</label>
                                                            <input type="text" name="presupuesto" class="form-control"
                                                                id="formcontroltelefono" required="required">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formcontroltelefono">¿Cuentas con algún tipo de
                                                                crédito en particular?</label>
                                                            <input type="mail" name="credito" class="form-control"
                                                                id="formcontroltelefono" required="required">
                                                        </div>
                                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                            <label class="btn btn-dark">
                                                                <input type="radio" name="contacto" value="llamada"
                                                                    autocomplete="off"> Llamada
                                                            </label>
                                                            <label class="btn btn-dark">
                                                                <input type="radio" name="contacto" value="whatsapp"
                                                                    autocomplete="off"> Whatsapp
                                                            </label>
                                                            <label class="btn btn-dark">
                                                                <input type="radio" name="contacto" value="correo"
                                                                    autocomplete="off"> Correo electrónico
                                                            </label>
                                                        </div>
                                                        <button type="submit"
                                                            class="btn btn-success btn-block mt-5">Enviar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <!--CORTAR Y LUEGO PEGAR-->
        <!--modelo Flamboyán Plus-->
        <div class="container" id="magenta" style="margin-top: 30px">
            <div class="row magenta-model p-0">
                <div class="col-lg-7 col-md-12 col-sm-12 bg-magenta">
                    @foreach ($modelos as $modelo)
                        @if ($modelo->id == 6)
                            <h1 class="modelo-titulo-1" style="text-align: center">{{ $modelo->name }}</h1>
                            <div class="costo-modelo">
                                @if ($modelo->visible == 1)
                                    <button class="boton-modelo-rosa">Desde:
                                        ${{ number_format($modelo->price) }}</button>
                                @else
                                @endif
                            </div>
                            <div class="costo-modelo">
                                <p class="espacio-terreno">Terreno desde: 7 x 17 m <br>Construcción de: 73.69 m2</p>
                            </div>
                            <div class="row">
                                <div class="col-4 modelo-car-1">
                                    <img src="{{ asset('img/Icons/Icon-Planta-bco.png') }}" alt=""
                                        class="img-fluid caract-mod-1-1-p">
                                    <p class="descri">2 Plantas</p>
                                </div>
                                <div class="col-4 modelo-car">
                                    <img src="{{ asset('img/Icons/Icon-Recaramara-doble-bco.png') }}" alt=""
                                        class="img-fluid caract-mod">
                                    <p class="descri">2 Recámaras</p>
                                </div>
                                <div class="col-4 modelo-car-2">
                                    <img src="{{ asset('img/Icons/Icon-Baño-bco.png') }}" alt=""
                                        class="img-fluid caract-mod-1-1">
                                    <p class="descri">2 ½ Baños</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 modelo-car-1">
                                    <img src="{{ asset('img/Icons/Icon-Sala-bco.png') }}" alt=""
                                        class="img-fluid caract-mod-1-s">
                                    <p class="descri espacio">Sala</p>
                                </div>
                                <div class="col-4 modelo-car-3">
                                    <img src="{{ asset('img/Icons/Icon-Comedor-bco.png') }}" alt=""
                                        class="img-fluid caract-mod-2">
                                    <p class="descri">Comedor</p>
                                </div>
                                <div class="col-4 modelo-car-2">
                                    <img src="{{ asset('img/Icons/Icon-Cocina-bco.png') }}" alt=""
                                        class="img-fluid caract-mod-1">
                                    <p class="descri">Cocina</p>
                                </div>
                            </div>

                            <div class="row centro-b mb-3">
                                <div class="col-6 botones-1 ">
                                    <a href="{{ route('flamboyan') }}" class="btn btn-secondary tipo">Cotiza tu
                                        casa</a>
                                </div>
                                <div class="col-6 botones mb-3">
                                    <a href="{{ asset('download/ficha-tecnica-flamboyan-plus.pdf') }}"
                                        data-toggle="modal" data-target="#modal-flamboyan"
                                        class="btn btn-secondary tipo">Ficha
                                        técnica</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modal-flamboyan" data-backdrop="static"
                                        data-keyboard="false" tabindex="-1" aria-labelledby="modal-flamboyan-label"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modal-flamboyan-label">Responde el
                                                        formulario</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <form action="{{ route('email.send') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="modelo" value="flamboyanplus">
                                                        <div class="form-group">
                                                            <label for="formcontrolnombre">Nombre*</label>
                                                            <input type="text" name="nombre" class="form-control"
                                                                id="formcontrolnombre" required="required"
                                                                placeholder="Escribe tu nombre">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formcontrolapellido">Correo*</label>
                                                            <input type="mail" name="correo" class="form-control"
                                                                id="formcontrolnombre" required="required"
                                                                placeholder="Escribe tu email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formcontrolcorreo">Número de teléfono*</label>
                                                            <input type="text" name="telefono" class="form-control"
                                                                id="formcontrolcorreo" required="required"
                                                                placeholder="Escribe tu telefono">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formcontroltelefono">¿Que presupuesto
                                                                tienes?</label>
                                                            <input type="text" name="presupuesto" class="form-control"
                                                                id="formcontroltelefono" required="required">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formcontroltelefono">¿Cuentas con algún tipo de
                                                                crédito en particular?</label>
                                                            <input type="mail" name="credito" class="form-control"
                                                                id="formcontroltelefono" required="required">
                                                        </div>
                                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                            <label class="btn btn-dark">
                                                                <input type="radio" name="contacto" value="llamada"
                                                                    autocomplete="off"> Llamada
                                                            </label>
                                                            <label class="btn btn-dark">
                                                                <input type="radio" name="contacto" value="whatsapp"
                                                                    autocomplete="off"> Whatsapp
                                                            </label>
                                                            <label class="btn btn-dark">
                                                                <input type="radio" name="contacto" value="correo"
                                                                    autocomplete="off"> Correo electrónico
                                                            </label>
                                                        </div>
                                                        <button type="submit"
                                                            class="btn btn-success btn-block mt-5">Enviar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 p-0 imagen padding-0 margen-prop">
                    <img src="{{ asset('img/miraverde/flamboyan-plus/pagina-modelos.jpg') }}" class="img-fluid" alt="">
                </div>

            </div>



            <!--modelo Bugambilia Plus -->
            <div class="row p-0" id="Violeta" style="margin-top: 30px">
                <div class="col-lg-5 col-md-12 col-sm-12 uno-dos imagen padding-0">
                    <img src="{{ asset('img/miraverde/bugambilia-plus/pagina-modelos.jpg
                    ') }}"
                        class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 bg-violeta uno-uno">
                    @foreach ($modelos as $modelo)

                        @if ($modelo->id == 7)
                            <h1 class="modelo-titulo" style="text-align: center; color: white;">{{ $modelo->name }}</h1>
                            <div class="costo-modelo">
                                @if ($modelo->visible == 1)
                                    <button class="boton-modelo">Desde: ${{ number_format($modelo->price) }}</button>
                                @else

                                @endif
                            </div>

                            <div class="costo-modelo">
                                <p class="espacio-terreno">Terreno desde: 7 x 17 m <br>Construcción de: 73.69 m2</p>
                            </div>

                            <div class="row">
                                <div class="col-4 modelo-car-1">
                                    <img src="{{ asset('img/Icons/Icon-Planta-bco.png') }}" alt=""
                                        class="img-fluid caract-mod-1-1-p">
                                    <p class="descri">2 Plantas</p>
                                </div>
                                <div class="col-4 modelo-car">
                                    <img src="{{ asset('img/Icons/Icon-Recaramara-doble-bco.png') }}"
                                        alt="" class="img-fluid caract-mod">
                                    <p class="descri">2 Recámaras</p>
                                </div>
                                <div class="col-4 modelo-car-2">
                                    <img src="{{ asset('img/Icons/Icon-Baño-bco.png') }}"
                                        alt="" class="img-fluid caract-mod-1-1">
                                    <p class="descri">2 ½ Baños</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4 modelo-car-1">
                                    <img src="{{ asset('img/Icons/Icon-Sala-bco.png') }}" alt=""
                                        class="img-fluid caract-mod-1-s">
                                    <p class="descri espacio">Sala</p>
                                </div>
                                <div class="col-4 modelo-car-3">
                                    <img src="{{ asset('img/Icons/Icon-Comedor-bco.png') }}" alt=""
                                        class="img-fluid caract-mod-2">
                                    <p class="descri">Comedor</p>
                                </div>
                                <div class="col-4 modelo-car-2">
                                    <img src="{{ asset('img/Icons/Icon-Cocina-bco.png') }}" alt=""
                                        class="img-fluid caract-mod-1">
                                    <p class="descri">Cocina</p>
                                </div>
                            </div>

                            <div class="row centro-b mb-3">
                                <div class="col-6 botones-1 ">
                                    <a href="{{ route('bugambilia') }}" class="btn btn-secondary tipo">
                                        Cotiza tu casa</a>
                                </div>
                                <div class="col-6 botones mb-3">
                                    <a href="{{ asset('download/ficha-tecnica-bugambilia-plus.pdf') }}"
                                        class="btn btn-secondary tipo mb-3" data-toggle="modal"
                                        data-target="#modal-bugambilia">
                                        Ficha técnica</a>

                                    <!-- Modal -->

                                    <div class="modal fade" id="modal-bugambilia" data-backdrop="static"
                                        data-keyboard="false" tabindex="-1" aria-labelledby="modal-bugambilia-label"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modal-bugambilia-label">Responde el
                                                        formulario
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <form action="{{ route('email.send') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="modelo" value="bugambiliaplus">
                                                        <div class="form-group">
                                                            <label for="formcontrolnombre">Nombre*</label>
                                                            <input type="text" name="nombre" class="form-control"
                                                                id="formcontrolnombre" required="required"
                                                                placeholder="Escribe tu nombre">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formcontrolapellido">Correo*</label>
                                                            <input type="mail" name="correo" class="form-control"
                                                                id="formcontrolnombre" required="required"
                                                                placeholder="Escribe tu email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formcontrolcorreo">Número de teléfono*</label>
                                                            <input type="text" name="telefono" class="form-control"
                                                                id="formcontrolcorreo" required="required"
                                                                placeholder="Escribe tu telefono">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formcontroltelefono">¿Que presupuesto
                                                                tienes?</label>
                                                            <input type="text" name="presupuesto" class="form-control"
                                                                id="formcontroltelefono" required="required">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formcontroltelefono">¿Cuentas con algún tipo de
                                                                crédito en particular?</label>
                                                            <input type="mail" name="credito" class="form-control"
                                                                id="formcontroltelefono" required="required">
                                                        </div>
                                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                            <label class="btn btn-dark">
                                                                <input type="radio" name="contacto" value="llamada"
                                                                    autocomplete="off"> Llamada
                                                            </label>
                                                            <label class="btn btn-dark">
                                                                <input type="radio" name="contacto" value="whatsapp"
                                                                    autocomplete="off"> Whatsapp
                                                            </label>
                                                            <label class="btn btn-dark">
                                                                <input type="radio" name="contacto" value="correo"
                                                                    autocomplete="off"> Correo electrónico
                                                            </label>
                                                        </div>
                                                        <button type="submit"
                                                            class="btn btn-success btn-block mt-5">Enviar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <!--CORTAR Y LUEGO PEGAR-->

        <!--modelo Ceiba plus-->

        <div class="container" id="Violeta-plus" style="margin-top: 30px">
            <div class="row magenta-model p-0">
                <div class="col-lg-7 col-md-12 col-sm-12 bg-magenta">
                    @foreach ($modelos as $modelo)

                        @if ($modelo->id == 8)
                            <h1 class="modelo-titulo-1" style="text-align: center">{{ $modelo->name }}</h1>
                            <div class="costo-modelo">
                                @if ($modelo->visible == 1)
                                    <button class="boton-modelo-rosa">Desde:
                                        ${{ number_format($modelo->price) }}</button>
                                @else

                                @endif
                            </div>

                            <div class="costo-modelo">
                                <p class="espacio-terreno">Terreno desde: 7 x 17 m <br>Construcción de: 82.25 m2</p>
                            </div>


                            <div class="row">
                                <div class="col-4 modelo-car-1">
                                    <img src="{{ asset('img/Icons/Icon-Planta-bco.png') }}" alt=""
                                        class="img-fluid caract-mod-1-1-p">
                                    <p class="descri">2 Plantas</p>
                                </div>
                                <div class="col-4 modelo-car">
                                    <img src="{{ asset('img/Icons/Icon-Recaramara-doble-bco.png') }}" alt=""
                                        class="img-fluid caract-mod">
                                    <p class="descri">3 Recámaras</p>
                                </div>
                                <div class="col-4 modelo-car-2">
                                    <img src="{{ asset('img/Icons/Icon-Baño-bco.png') }}" alt=""
                                        class="img-fluid caract-mod-1-1">
                                    <p class="descri">2 1/2 Baños</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4 modelo-car-1">
                                    <img src="{{ asset('img/Icons/Icon-Sala-bco.png') }}" alt=""
                                        class="img-fluid caract-mod-1-s">
                                    <p class="descri espacio">Sala</p>
                                </div>
                                <div class="col-4 modelo-car-3">
                                    <img src="{{ asset('img/Icons/Icon-Comedor-bco.png') }}" alt=""
                                        class="img-fluid caract-mod-2">
                                    <p class="descri">Comedor</p>
                                </div>
                                <div class="col-4 modelo-car-2">
                                    <img src="{{ asset('img/Icons/Icon-Cocina-bco.png') }}" alt=""
                                        class="img-fluid caract-mod-1">
                                    <p class="descri">Cocina</p>
                                </div>
                            </div>

                            <div class="row centro-b mb-3">
                                <div class="col-6 botones-1 ">
                                    <a href="{{ route('ceiba') }}" class="btn btn-secondary tipo">Cotiza tu
                                        casa</a>
                                </div>
                                <div class="col-6 botones mb-3">
                                    <a href="{{ asset('download/ficha-tecnica-ceiba-plus.pdf') }}"
                                        class="btn btn-secondary tipo" data-toggle="modal" data-target="#modal-ceiba">Ficha
                                        técnica</a>

                                    <!-- Modal -->

                                    <div class="modal fade" id="modal-ceiba" data-backdrop="static" data-keyboard="false"
                                        tabindex="-1" aria-labelledby="modal-ceiba-label" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modal-bugambilia-label">Responde el
                                                        formulario</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <form action="{{ route('email.send') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="modelo" value="ceibaplus">
                                                        <div class="form-group">
                                                            <label for="formcontrolnombre">Nombre*</label>
                                                            <input type="text" name="nombre" class="form-control"
                                                                id="formcontrolnombre" required="required"
                                                                placeholder="Escribe tu nombre">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formcontrolapellido">Correo*</label>
                                                            <input type="mail" name="correo" class="form-control"
                                                                id="formcontrolnombre" required="required"
                                                                placeholder="Escribe tu email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formcontrolcorreo">Número de teléfono*</label>
                                                            <input type="text" name="telefono" class="form-control"
                                                                id="formcontrolcorreo" required="required"
                                                                placeholder="Escribe tu telefono">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formcontroltelefono">¿Que presupuesto
                                                                tienes?</label>
                                                            <input type="text" name="presupuesto" class="form-control"
                                                                id="formcontroltelefono" required="required">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formcontroltelefono">¿Cuentas con algún tipo de
                                                                crédito en particular?</label>
                                                            <input type="mail" name="credito" class="form-control"
                                                                id="formcontroltelefono" required="required">
                                                        </div>
                                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                            <label class="btn btn-dark">
                                                                <input type="radio" name="contacto" value="llamada"
                                                                    autocomplete="off"> Llamada
                                                            </label>
                                                            <label class="btn btn-dark">
                                                                <input type="radio" name="contacto" value="whatsapp"
                                                                    autocomplete="off"> Whatsapp
                                                            </label>
                                                            <label class="btn btn-dark">
                                                                <input type="radio" name="contacto" value="correo"
                                                                    autocomplete="off"> Correo electrónico
                                                            </label>
                                                        </div>
                                                        <button type="submit"
                                                            class="btn btn-success btn-block mt-5">Enviar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 p-0 imagen padding-0 margen-prop">
                    <img src="{{ asset('img/miraverde/ceiba-plus/pagina-modelos.jpg') }}" class="img-fluid" alt="">
                </div>

            </div>
    </section>
@endsection
