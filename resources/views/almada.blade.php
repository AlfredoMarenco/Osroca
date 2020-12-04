@extends('layouts.template-almada')

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
       <h1 class="familia" id="aguamarina">Tu familia merece un respiro</h1>
       <div class="row p-0">
           <div class="col-lg-5 col-md-12 col-sm-12 uno-dos imagen padding-0">
               <img src="/img/aguamarina/GC_Aguamarina_fachada.jpg" class="img-fluid" alt="">
           </div>
           <div class="col-lg-7 col-md-12 col-sm-12 bg-aqua uno-uno">
               <h1 class="modelo-titulo" style="text-align: center">Modelo Aguamarina</h1>
               <div class="costo-modelo">
                   <button class="boton-modelo">Desde: $360,000</button>
               </div>

               <div class="costo-modelo">
                   <p class="espacio-terreno">Terreno de: 5 x 17 m <br>Construcción de: 42.94 m2</p>
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
                   <div class="col-6 botones-1 ">
                       <a href="#"><button class="btn- btn-secondary tipo">Cotiza tu casa</button></a>
                   </div>
                   <div class="col-6 botones">
                       <a href="/download/Aguamarina.pdf" target="_blanK"><button class="btn- btn-secondary tipo">Ficha técnica</button></a>
                   </div>
               </div>


           </div>
       </div> </div>

       <!--CORTAR Y LUEGO PEGAR-->

       <!--modelo magenta-->

      <div class="container" id="magenta" style="margin-top: 30px">
        <div class="row magenta-model p-0">
            <div class="col-lg-7 col-md-12 col-sm-12 bg-magenta">
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

                <div class="row centro-b">
                    <div class="col-6 botones-1 ">
                        <a href="#"><button class="btn- btn-secondary tipo">Cotiza tu casa</button></a>
                    </div>
                    <div class="col-6 botones">
                        <a href="/download/Magenta.pdf" target="_blanK"><button class="btn- btn-secondary tipo">Ficha técnica</button></a>
                    </div>
                </div>


            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 p-0 imagen padding-0 margen-prop">
                <img src="/img/magenta/GC_Magenta_B1_Fachada.jpg" class="img-fluid" alt="">
            </div>

       </div>



       <!--modelo violeta -->
       <div class="row p-0" id="Violeta" style="margin-top: 30px">
           <div class="col-lg-5 col-md-12 col-sm-12 uno-dos imagen padding-0">
               <img src="/img/violeta/GC_Violeta_Fachada-2.jpg" class="img-fluid" alt="">
           </div>
           <div class="col-lg-7 col-md-12 col-sm-12 bg-violeta uno-uno">
               <h1 class="modelo-titulo" style="text-align: center; color: white;">Modelo Violeta</h1>
               <div class="costo-modelo">
                   <button class="boton-modelo-m">Desde: $360,000</button>
               </div>

               <div class="costo-modelo">
                   <p class="espacio-terreno">Terreno de: 6 x 17 m <br>Construcción de: 62.86 m2</p>
               </div>

               <div class="row">
                   <div class="col-4 modelo-car-1">
                       <img src="/img/Icons/Icon-Planta-bco.png" alt="" class="img-fluid caract-mod-1-1-p" >
                       <p class="descri">2 Plantas</p>
                   </div>
                   <div class="col-4 modelo-car">
                       <img src="/img/Icons/Icon-Recaramara-doble-bco.png
                       " alt="" class="img-fluid caract-mod" >
                       <p class="descri">2 Recámaras</p>
                   </div>
                   <div class="col-4 modelo-car-2">
                       <img src="/img/Icons/Icon-Baño-bco.png
                       " alt="" class="img-fluid caract-mod-1-1" >
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

               <div class="row centro-b">
                   <div class="col-6 botones-1 ">
                       <a href="#"><button class="btn- btn-secondary tipo">Cotiza tu casa</button></a>
                   </div>
                   <div class="col-6 botones">
                       <a href="/download/Violeta.pdf" target="_blanK"><button class="btn- btn-secondary tipo">Ficha técnica</button></a>
                   </div>
               </div>


           </div>
       </div> </div>

       <!--CORTAR Y LUEGO PEGAR-->

       <!--modelo magenta-->

      <div class="container" id="Violeta-plus" style="margin-top: 30px">
        <div class="row magenta-model p-0">
            <div class="col-lg-7 col-md-12 col-sm-12 bg-violeta">
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
                        <p class="descri">2 Planta</p>
                    </div>
                    <div class="col-4 modelo-car">
                        <img src="/img/Icons/Icon-Recaramara-doble-bco.png" alt="" class="img-fluid caract-mod" >
                        <p class="descri">2 Recámaras</p>
                    </div>
                    <div class="col-4 modelo-car-2">
                        <img src="/img/Icons/Icon-Baño-bco.png" alt="" class="img-fluid caract-mod-1-1" >
                        <p class="descri">2 1/2 Baño</p>
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

                <div class="row centro-b">
                    <div class="col-6 botones-1 ">
                        <a href="#"><button class="btn- btn-secondary tipo">Cotiza tu casa</button></a>
                    </div>
                    <div class="col-6 botones">
                        <a href="/download/Violeta-plus.pdf" target="_blanK"><button class="btn- btn-secondary tipo">Ficha técnica</button></a>
                    </div>
                </div>


            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 p-0 imagen padding-0 margen-prop">
                <img src="/img/magenta/GC_Magenta_B1_Fachada.jpg" class="img-fluid" alt="">
            </div>

       </div>






</section>

@endsection
