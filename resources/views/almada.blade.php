@extends('layouts.template')

@section('section')
<section>
    <div class="bg-mora">
        <div class="container">
            <div class="row espacio">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h1 class="titular">Tu nuevo hogar <br>está aquí</h1>
                    <h2 class="desde lead">desde <b>$360,000</b></h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 alm">
                    <img src="img/Icons/Logo-Almada-inv.png" class="img-fluid alm-inv" alt="">
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250"><path fill="#51488b" fill-opacity="1" d="M0,96L120,96C240,96,480,96,720,106.7C960,117,1200,139,1320,149.3L1440,160L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
</section>

<section id="modelos">
 <div class="container">

     <!--modelo aguamarina -->
    <h1 class="familia">Tu familia merece un respiro</h1>
    <div class="row">
        <div class="col-lg-5 col-md-12 col-sm-12 padding-0 uno-dos imagen">
            <img src="/img/aguamarina/GC_Aguamarina_fachada.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12 bg-aqua uno-uno padding-0">
            <h1 class="modelo-titulo" style="text-align: center">Modelo Aguamarina</h1>
            <div class="costo-modelo">
                <button class="boton-modelo">Desde: $360,000</button>
            </div>

    <section id="modelos">
        <div class="container">
            <h1 class="familia">Tu familia merece un respiro</h1>
            <!--modelo aguamarina -->
            @foreach ($modelos as $modelo)
                @if ($modelo->id % 2 != 0)
                    <div class="row mt-5">
                        <div class="col-lg-5 col-md-12 col-sm-12 padding-0 imagen">
                            <img src="/img/aguamarina/GC_Aguamarina_fachada.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 bg-aqua padding-0">
                            <h1 class="modelo-titulo" style="text-align: center">{{ $modelo->name }}</h1>
                            <div class="costo-modelo">
                                <button class="boton-modelo">Desde: ${{ number_format($modelo->price) }}</button>
                            </div>

            <div class="row">
                <div class="col-4 modelo-car-1">
                    <img src="/img/Icons/Icon-Planta-morado.png" alt="" class="img-fluid caract-mod-1-1-p" >
                    <p class="descri">1 Planta</p>
                </div>
                <div class="col-4 modelo-car">
                    <img src="/img/Icons/Icon-Recaramara-doble.png
                    " alt="" class="img-fluid caract-mod" >
                    <p class="descri">2 Recámaras</p>
                </div>
                <div class="col-4 modelo-car-2">
                    <img src="/img/Icons/Icon-Baño-mdo.png
                    " alt="" class="img-fluid caract-mod-1-1" >
                    <p class="descri">1 Baño</p>
                </div>
            </div>

            <div class="row">
                <div class="col-4 modelo-car-1">
                    <img src="/img/Icons/Icon-Sala-mdo.png" alt="" class="img-fluid caract-mod-1-s" >
                    <p class="descri espacio">Sala</p>
                </div>
                <div class="col-4 modelo-car-3">
                    <img src="/img/Icons/Icon-Comedor-mdo.png" alt="" class="img-fluid caract-mod-2" >
                    <p class="descri">Comedor</p>
                </div>
                <div class="col-4 modelo-car-2">
                    <img src="/img/Icons/Icon-Cocina-do.png" alt="" class="img-fluid caract-mod-1" >
                    <p class="descri">Cocina</p>
                </div>
            </div>

            <div class="row centro-b">
                <div class="col-lg-6 col-sm-12 botones-1 ">
                    <a href="#"><button class="btn- btn-secondary">Cotiza tu casa</button></a>
                </div>
                <div class="col-lg-6 col-sm-12 botones">
                    <a href="#"><button class="btn- btn-secondary">Ficha técnica</button></a>
                </div>
            </div>


        </div>
    </div> </div>
    <!--modelo magenta-->

   <div class="container">
    <div class="row magenta-model">
        <div class="col-lg-7 col-md-12 col-sm-12 bg-magenta padding-0">
            <h1 class="modelo-titulo-1" style="text-align: center">Modelo Magenta</h1>
            <div class="costo-modelo">
                <button class="boton-modelo-m">Desde: $360,000</button>
            </div>

            <div class="costo-modelo">
                <p class="espacio-terreno">Terreno de: 6 x 17 m <br>Construcción de: 45.82 m2</p>
            </div>


            <div class="row">
                <div class="col-4 modelo-car-1">
                    <img src="/img/Icons/Icon-Planta-bco.png" alt="" class="img-fluid caract-mod-1-1-p" >
                    <p class="descri">1 Planta</p>
                </div>
                <div class="col-4 modelo-car">
                    <img src="/img/Icons/Icon-Recaramara-doble-bco.png" alt="" class="img-fluid caract-mod" >
                    <p class="descri">2 Recámaras</p>
                </div>
                <div class="col-4 modelo-car-2">
                    <img src="/img/Icons/Icon-Baño-bco.png" alt="" class="img-fluid caract-mod-1-1" >
                    <p class="descri">1 Baño</p>
                </div>
            </div>

            <div class="row">
                <div class="col-4 modelo-car-1">
                    <img src="/img/Icons/Icon-Sala-bco.png" alt="" class="img-fluid caract-mod-1-s" >
                    <p class="descri espacio">Sala</p>
                </div>
                <div class="col-4 modelo-car-3">
                    <img src="/img/Icons/Icon-Comedor-bco.png" alt="" class="img-fluid caract-mod-2" >
                    <p class="descri">Comedor</p>
                </div>
                <div class="col-4 modelo-car-2">
                    <img src="/img/Icons/Icon-Cocina-bco.png" alt="" class="img-fluid caract-mod-1" >
                    <p class="descri">Cocina</p>
                </div>
            </div>

                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 padding-0 imagen">
                    <img src="/img/magenta/GC_Magenta_B1_Fachada.jpg" class="img-fluid" alt="">
                </div>
            </div>

   </div>
         <!--modelo violeta -->


        <div class="row" style="padding-top: 40px">
            <div class="col-lg-5 col-md-12 col-sm-12 padding-0 imagen uno-dos">
                <img src="/img/violeta/GC_Violeta_Fachada-2.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 bg-violeta padding-0 uno-uno">
                <h1 class="modelo-titulo vio" style="text-align: center">Modelo Violeta</h1>
                <div class="costo-modelo">
                    <button class="boton-modelo-m">Desde: $360,000</button>
                </div>

                <div class="costo-modelo">
                    <p class="espacio-terreno">Terreno de: 6 x 17 m <br>Construcción de: 62.86 m2</p>
                </div>

                <div class="row">
                    <div class="col-4 modelo-car-1">
                        <img src="/img/Icons/Icon-Planta-bco.png" alt="" class="img-fluid caract-mod-1-1-p" >
                        <p class="descri dos-p">2 Plantas</p>
                    </div>
                    <div class="col-4 modelo-car">
                        <img src="/img/Icons/Icon-Recaramara-doble-bco.png" alt="" class="img-fluid caract-mod" >
                        <p class="descri">2 Recámaras</p>
                    </div>
                    <div class="col-4 modelo-car-2">
                        <img src="/img/Icons/Icon-Baño-bco.png" alt="" class="img-fluid caract-mod-1-1" >
                        <p class="descri">1 ½ Baño</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 modelo-car-1">
                        <img src="/img/Icons/Icon-Sala-bco.png" alt="" class="img-fluid caract-mod-1-s" >
                        <p class="descri espacio">Sala</p>
                    </div>
                    <div class="col-4 modelo-car-3">
                        <img src="/img/Icons/Icon-Comedor-bco.png" alt="" class="img-fluid caract-mod-2" >
                        <p class="descri">Comedor</p>
                    </div>
                    <div class="col-4 modelo-car-2">
                        <img src="/img/Icons/Icon-Cocina-bco.png" alt="" class="img-fluid caract-mod-1" >
                        <p class="descri">Cocina</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 botones-1">
                        <a href="#"><button class="btn- btn-secondary">Cotiza tu casa</button></a>
                    </div>
                    <div class="col-lg-6 botones">
                        <a href="#"><button class="btn- btn-secondary">Ficha técnica</button></a>
                    </div>
                </div>


            </div>




        </div>
        <!--modelo violeta plus-->

        <div class="row magenta-model">
            <div class="col-lg-7 col-md-12 col-sm-12 bg-violeta padding-0 ">
                <h1 class="modelo-titulo-1" style="text-align: center">Modelo Violeta Plus</h1>
                <div class="costo-modelo">
                    <button class="boton-modelo-m">Desde: $360,000</button>
                </div>

                <div class="costo-modelo">
                    <p class="espacio-terreno">Terreno de: 7 x 17 m <br>Construcción de: 65.73 m2</p>
                </div>

                <div class="row">
                    <div class="col-4 modelo-car-1">
                        <img src="/img/Icons/Icon-Planta-bco.png" alt="" class="img-fluid caract-mod-1-1-p" >
                        <p class="descri">2 Plantas</p>
                    </div>
                    <div class="col-4 modelo-car">
                        <img src="/img/Icons/Icon-Recaramara-doble-bco.png" alt="" class="img-fluid caract-mod" >
                        <p class="descri">2 Recámaras</p>
                    </div>
                    <div class="col-4 modelo-car-2">
                        <img src="/img/Icons/Icon-Baño-bco.png" alt="" class="img-fluid caract-mod-1-1" >
                        <p class="descri">2 1/2 Baños</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 modelo-car-1">
                        <img src="/img/Icons/Icon-Sala-bco.png" alt="" class="img-fluid caract-mod-1-s" >
                        <p class="descri espacio">Sala</p>
                    </div>
                    <div class="col-4 modelo-car-3">
                        <img src="/img/Icons/Icon-Comedor-bco.png
                        " alt="" class="img-fluid caract-mod-2" >
                        <p class="descri">Comedor</p>
                    </div>
                    <div class="col-4 modelo-car-2">
                        <img src="/img/Icons/Icon-Cocina-bco.png" alt="" class="img-fluid caract-mod-1" >
                        <p class="descri">Cocina</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 botones-1">
                        <a href="#"><button class="btn- btn-secondary">Cotiza tu casa</button></a>
                    </div>
                    <div class="col-lg-6 botones">
                        <a href="#"><button class="btn- btn-secondary">Ficha técnica</button></a>
                    </div>
                </div>


            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 padding-0 imagen">
                <img src="/img/violeta-plus/GC_Violeta_Plus_Fachada-2.jpg" class="img-fluid" alt="">
            </div>
        </div>








</section>

@endsection
