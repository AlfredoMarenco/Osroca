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
                    <div class="col-lg-6 ">
                        <img src="/img/Icons/Calzada-1.png" class="img-fluid icono" alt="">
                        <p class="caracteristicas">Poniente <br> de la ciudad</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="/img/Icons/3km.png" class="img-fluid icono-2" alt="">
                        <p class="caracteristicas">Distancia<br> de periférico</p>
                    </div>
                </div>
                <div class="row cont">
                    <div class="col-lg-6 ">
                        <img src="/img/Icons/116.png" class="img-fluid icono-1" alt="">
                        <p class="caracteristicas">Hectáreas</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="/img/Icons/Calzada-1.png" class="img-fluid icono" alt="">
                        <p class="caracteristicas">Distancia<br> de periférico</p>
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
                <a href="#" class="boton-rosa"><button class="btn btn-pink">Precalifícate</button></a>
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
            <div class="col-lg-3 col-md-6 col-sm-6">
                <img src="/img/2-escuelas.png" alt="2 escuelas" class="i-resumen img-fluid">
            </div>
            <!-- uno -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <img src="/img/21-zonas-comerciales.png" alt="2 escuelas" class="i-resumen img-fluid">
            </div>
            <!-- uno -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <img src="/img/1-ciclopista.png" alt="2 escuelas" class="i-resumen img-fluid">
            </div>
            <!-- uno -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <img src="/img/8-parques.png" alt="2 escuelas" class="i-resumen img-fluid">
            </div>
        </div>
    </div>
</section>

<section id="rosa">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 190"><path fill="#ee4a7b" fill-opacity="1" d="M0,160L60,149.3C120,139,240,117,360,122.7C480,128,600,160,720,170.7C840,181,960,171,1080,160C1200,149,1320,139,1380,133.3L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    <div class="row texto">
        <div class="col-lg-3 col-md-3 col-sm-12">
            <img src="/img/puntos.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 centro">
            <img src="/img/Icons/Calzada.svg" class="img-fluid calzada-rosa" alt="Gran Calzada | Ciudad Viva">
            <h2 class="estas-en">Estás en el camino correcto para 
                cambiar y mejorar tu estilo de vida, <br> 
                es el momento de vivir otro entorno.</h2>
                <a href="#" class="boton-rosa"><button class="btn btn-blue">Conoce los desarrollos</button></a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 linea">
                <img src="/img/linea.png" class="img-fluid " alt="">
            </div>
        </div>
        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250"><path fill="#ee4a7b" fill-opacity="1" d="M0,64L80,69.3C160,75,320,85,480,122.7C640,160,800,224,960,240C1120,256,1280,224,1360,208L1440,192L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
        
    
    
</section>

@endsection