@extends('layouts.template-interior')

@section('section')
<section id="h-logo">
   <div class="container-fluid">
    <div class="row">
        <div class="col-lg-5 col-md-12 col-sm-12">
            <img src="{{ asset('img/Icons/Logo-Almada-inv.png') }}" class="img-fluid logo-h" alt="">
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12 p-0">
            <img src="{{ asset('img/violeta-plus/cabeceras-fachada-1.jpg') }}" class="img-fluid fachada-violeta" alt="">
        </div>
    </div>
   </div>

</section>


<section id="amenidades-m">
    <div class="container-fluid">
        <div class="row ameni">
            <div class="col-lg-4 col-md-4 col-sm-6 imag-planta">
                <img src="{{ asset('img/violeta-plus/GC_Violeta_Plus_Planta_Baja_02.png') }}" class="img-fluid planta-b" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 ameni-txt">
                <h1>Modelo Violeta Plus</h1>
                <li>Terreno desde: 7 x 17 m </li>
                <li>Construcción: 65.73 m2</li>
                <br>

                <li>Casa de 2 plantas <br>
                Pasillo lateral <br>
                Amplio patio <br>
                </li> <br>
                <li style="font-weight: 600" class="boold">Planta Arquitectónica</li> <br>
                <li style="font-weight: 600" class="boold">PLANTA BAJA</li>
                <li>Sala / Comedor</li>
                <li>Cocina</li>
                <li>1/2 baño</li>
                <li style="font-weight: 600" class="boold">PLANTA ALTA</li>
                <li>Recámara principal con área
                    para clóset y baño completo</li>
                <li>Recámara secundaria con área
                    para clóset</li>
                <li>1 Baño Completo</li>




                <br>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 imag-planta">
                <img src="{{ asset('img/violeta-plus/GC_Violeta_Plus_Planta_Alta02.png') }}" class="img-fluid planta-b" alt="">
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
            <form class="contact" id="cotizacion" name="contact-form" method="post" action="enviar.php" >
                <div class="form-group">
                    <h1 class="recibe-una" style="text-align: left">Recibe una cotización</h1>

                  <input type="name" name="nombre" class="form-control" id="exampleFormControlInput1" required="required" placeholder="Nombre">
                </div>

                <div class="form-group">

                    <input type="tel" name="telefono" class="form-control" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="required" placeholder="Teléfono">
                  </div>

                <div class="form-group">

                  <input type="email" name="email" class="form-control" id="exampleFormControlInput1" required="required" placeholder="Correo">
                </div>

                <div class="form-group" style="text-align: right">



                <button type="submit" class="btn btn-pink">Enviar</button>
              </form>
        </div>
       </div>
   </div>
</section>
@endsection
