@extends('layouts.template-almada')

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
                        <img src="{{ asset('img/Icons/Logo-Almada-inv.png') }}" class="img-fluid alm-inv" alt="">
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
            <path fill="#51488b" fill-opacity="1"
                d="M0,96L120,96C240,96,480,96,720,106.7C960,117,1200,139,1320,149.3L1440,160L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z">
            </path>
        </svg>
    </section>



    <section id="modelos">
        <div class="container">

            <!--modelo aguamarina -->
            <h1 class="familia" id="aguamarina">Tu familia merece un respiro</h1>
            <div class="row p-0">
                <div class="col-lg-5 col-md-12 col-sm-12 uno-dos imagen padding-0">
                    <img src="{{ asset('img/aguamarina/GC_Aguamarina_fachada.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 bg-aqua uno-uno">
                    @foreach ($modelos as $modelo)

                        @if ($modelo->id == 1)

                            <h1 class="modelo-titulo" style="text-align: center">{{ $modelo->name }}</h1>
                            <div class="costo-modelo">
                                @if ($modelo->visible == 1)
                                    <button class="boton-modelo">Desde: ${{ number_format($modelo->price) }}</button>
                                @else

                                @endif
                            </div>

                            <div class="costo-modelo">
                                <p class="espacio-terreno">Terreno de: 5 x 17 m <br>Construcción de: 42.94 m2</p>
                            </div>

                            <div class="row">
                                <div class="col-4 modelo-car-1">
                                    <img src="{{ asset('img/Icons/Icon-Planta-morado.png') }}" alt=""
                                        class="img-fluid caract-mod-1-1-p">
                                    <p class="descri">1 Planta</p>
                                </div>
                                <div class="col-4 modelo-car">
                                    <img src="{{ asset('img/Icons/Icon-Recaramara-doble.png') }}" alt=""
                                        class="img-fluid caract-mod">
                                    <p class="descri">2 Recámaras</p>
                                </div>
                                <div class="col-4 modelo-car-2">
                                    <img src="{{ asset('img/Icons/Icon-Baño-mdo.png') }}" alt=""
                                        class="img-fluid caract-mod-1-1">
                                    <p class="descri">1 Baño</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4 modelo-car-1">
                                    <img src="{{ asset('img/Icons/Icon-Sala-mdo.png') }}" alt=""
                                        class="img-fluid caract-mod-1-s">
                                    <p class="descri espacio">Sala</p>
                                </div>
                                <div class="col-4 modelo-car-3">
                                    <img src="{{ asset('img/Icons/Icon-Comedor-mdo.png') }}" alt=""
                                        class="img-fluid caract-mod-2">
                                    <p class="descri">Comedor</p>
                                </div>
                                <div class="col-4 modelo-car-2">
                                    <img src="{{ asset('img/Icons/Icon-Cocina-do.png') }}" alt=""
                                        class="img-fluid caract-mod-1">
                                    <p class="descri">Cocina</p>
                                </div>
                            </div>

                            <div class="row centro-b">
                                <div class="col-6 botones-1 ">
                                    <a href="{{ route('aguamarina') }}" class="btn btn-secondary tipo">Cotiza tu
                                        casa</a>
                                </div>
                                <div class="col-6 botones">
                                    <a href="{{ asset('download/Aguamarina.pdf') }}" class="btn btn-secondary tipo"
                                        data-toggle="modal" data-target="#modal-aguamarina">Ficha técnica</a>

                                    <!-- Modal -->

                                    <div class="modal fade" id="modal-aguamarina" data-backdrop="static"
                                        data-keyboard="false" tabindex="-1" aria-labelledby="modal-aguamarina-label"
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
                                                        <input type="hidden" name="modelo" value="aguamarina">
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

        <!--modelo magenta-->

        <div class="container" id="magenta" style="margin-top: 30px">
            <div class="row magenta-model p-0">
                <div class="col-lg-7 col-md-12 col-sm-12 bg-magenta">
                    @foreach ($modelos as $modelo)

                        @if ($modelo->id == 2)
                            <h1 class="modelo-titulo-1" style="text-align: center">{{ $modelo->name }}</h1>
                            <div class="costo-modelo">
                                @if ($modelo->visible == 1)
                                    <button class="boton-modelo">Desde: ${{ number_format($modelo->price) }}</button>
                                @else

                                @endif
                            </div>

                            <div class="costo-modelo">
                                <p class="espacio-terreno">Terreno de: 6 x 17 m <br>Construcción de: 45.82 m2</p>
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
                                <div class="col-6 botones-1 ">
                                    <a href="{{ route('magenta') }}"><button class="btn btn-secondary tipo">Cotiza tu
                                            casa</button></a>
                                </div>
                                <div class="col-6 botones">
                                    <a href="{{ asset('download/Magenta.pdf') }}" class="btn btn-secondary tipo"
                                        data-toggle="modal" data-target="#modal-magenta">
                                        Ficha
                                        técnica</a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modal-magenta" data-backdrop="static" data-keyboard="false"
                                        tabindex="-1" aria-labelledby="modal-magenta-label" aria-hidden="true">
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
                                                        <input type="hidden" name="modelo" value="magenta">
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
                    <img src="{{ asset('img/magenta/GC_Magenta_B1_Fachada.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>
            <!--modelo violeta -->
            <div class="row p-0" id="Violeta" style="margin-top: 30px">
                <div class="col-lg-5 col-md-12 col-sm-12 uno-dos imagen padding-0">
                    <img src="{{ asset('img/violeta/GC_Violeta_Fachada-2.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 bg-violeta uno-uno">
                    @foreach ($modelos as $modelo)
                        @if ($modelo->id == 3)
                            <h1 class="modelo-titulo" style="text-align: center; color: white;">{{ $modelo->name }}</h1>
                            <div class="costo-modelo">
                                @if ($modelo->visible == 1)
                                    <button class="boton-modelo">Desde: ${{ number_format($modelo->price) }}</button>
                                @else
                                @endif
                            </div>
                            <div class="costo-modelo">
                                <p class="espacio-terreno">Terreno de: 6 x 17 m <br>Construcción de: 62.86 m2</p>
                            </div>
                            <div class="row">
                                <div class="col-4 modelo-car-1">
                                    <img src="{{ asset('img/Icons/Icon-Planta-bco.png') }}" alt=""
                                        class="img-fluid caract-mod-1-1-p">
                                    <p class="descri">2 Plantas</p>
                                </div>
                                <div class="col-4 modelo-car">
                                    <img src="{{ asset('img/Icons/Icon-Recaramara-doble-bco.png') }}
                                                                               " alt="" class="img-fluid caract-mod">
                                    <p class="descri">2 Recámaras</p>
                                </div>
                                <div class="col-4 modelo-car-2">
                                    <img src="{{ asset('img/Icons/Icon-Baño-bco.png') }}
                                                                               " alt="" class="img-fluid caract-mod-1-1">
                                    <p class="descri">1 ½ Baño</p>
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
                                <div class="col-6 botones-1 ">
                                    <a href="{{ route('violeta') }}" class="btn btn-secondary tipo">Cotiza tu
                                        casa</a>
                                </div>
                                <div class="col-6 botones">
                                    <a href="{{ asset('download/Violeta.pdf') }}" class="btn btn-secondary tipo"
                                        data-target="#modal-violeta" data-toggle="modal">Ficha
                                        técnica</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modal-violeta" data-backdrop="static" data-keyboard="false"
                                        tabindex="-1" aria-labelledby="modal-violeta-label" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modal-violeta-label">Responde el formulario
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('email.send') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="modelo" value="violeta">
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
        <!--modelo magenta-->
        <div class="container" id="Violeta-plus" style="margin-top: 30px">
            <div class="row magenta-model p-0">
                <div class="col-lg-7 col-md-12 col-sm-12 bg-violeta">
                    @foreach ($modelos as $modelo)
                        @if ($modelo->id == 4)
                            <h1 class="modelo-titulo-1" style="text-align: center">{{ $modelo->name }}</h1>
                            <div class="costo-modelo">
                                @if ($modelo->visible == 1)
                                    <button class="boton-modelo">Desde: ${{ number_format($modelo->price) }}</button>
                                @else
                                @endif
                            </div>
                            <div class="costo-modelo">
                                <p class="espacio-terreno">Terreno de: 7 x 17 m <br>Construcción de: 65.73 m2</p>
                            </div>
                            <div class="row">
                                <div class="col-4 modelo-car-1">
                                    <img src="{{ asset('img/Icons/Icon-Planta-bco.png') }}" alt=""
                                        class="img-fluid caract-mod-1-1-p">
                                    <p class="descri">2 Planta</p>
                                </div>
                                <div class="col-4 modelo-car">
                                    <img src="{{ asset('img/Icons/Icon-Recaramara-doble-bco.png') }}" alt=""
                                        class="img-fluid caract-mod">
                                    <p class="descri">2 Recámaras</p>
                                </div>
                                <div class="col-4 modelo-car-2">
                                    <img src="{{ asset('img/Icons/Icon-Baño-bco.png') }}" alt=""
                                        class="img-fluid caract-mod-1-1">
                                    <p class="descri">2 1/2 Baño</p>
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
                                <div class="col-6 botones-1 ">
                                    <a href="{{ route('violetaplus') }}" class="btn btn-secondary tipo">Cotiza tu
                                        casa</a>
                                </div>
                                <div class="col-6 botones">
                                    <a href="{{ asset('download/Violeta-plus.pdf') }}" class="btn btn-secondary tipo"
                                        data-toggle="modal" data-target="#modal-violeta-plus">Ficha técnica</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modal-violeta-plus" data-backdrop="static"
                                        data-keyboard="false" tabindex="-1" aria-labelledby="modal-violeta-plus-label"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modal-violeta-plus-label">Responde el
                                                        formulario</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('email.send') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="modelo" value="violetaplus">
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
                    <img src="{{ asset('img/violeta-plus/GC_Violeta_Plus_Fachada.jpg') }}" class="img-fluid" alt="">
                </div>

            </div>
    </section>

@endsection
