@extends('layouts.template-interior-miraverde')

@section('section')

    <section id="h-logo">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <img src="{{ asset('img/Icons/Logo-miraverde-inv.png') }}" class="img-fluid logo-h" alt="">
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 p-0">

                    <!--SLIDER-->
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="{{ asset('img/miraverde/balche/slider-interior-2.jpg') }}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ asset('img/miraverde/balche/slider-interior-1.jpg') }}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ asset('img/miraverde/balche/slider-interior.jpg') }}" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>



                    
                </div>
            </div>
        </div>
    </section>



    <section id="amenidades-m">
        <div class="container-fluid">
            <div class="row ameni">
                <div class="col-lg-4 col-md-4 col-sm-6 imag-planta">
                    <img src="{{ asset('img/miraverde/balche/Planta-baja.jpg') }}" class="img-fluid planta-b" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 ameni-txt">
                    <h1>Modelo Balche</h1>
                    <li>Terreno desde: 7 x 17 m </li>
                    <li>Construcción: 63.28 m2</li>
                    <br>
                    <li class="boold"><b>Planta Arquitectónica</b>
                    </li> <br>

                    <li>Sala / Comedor</li>
                    <li>Cocina</li>
                    <li>1 Baño Completo</li>
                    <li>2 recámaras con área para closet</li>
                    <li>Patio</li>
                    <li>Cuarto de lavado</li>


                    <br>
                </div>

            </div>
        </div>

    </section>




    <section id="formulario">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">

                    <h2 class="un-desarrollo" style="text-align: center;">Un desarrollo de</h2>
                    <div style="text-align: center">
                        <img src="{{ asset('img/Icons/Logo-Calzada.svg') }}" alt="" class="img-fluid circulo-calzada">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 formulario-2">
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
                    <script>
                        hbspt.forms.create({
                            portalId: "5510950",
                            formId: "4f90ffd0-7b0f-4c20-a2db-b9e052b6a546"
                        });

                    </script>
                </div>
            </div>
        </div>
    </section>
@endsection
