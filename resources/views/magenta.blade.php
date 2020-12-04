@extends('layouts.template-interior')
@section('section')
<section id="h-logo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12">
                <img src="/img/Icons/Logo-Almada-inv.png" class="img-fluid logo-h" alt="">
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 p-0">
                <img src="/img/magenta/GC_Magenta_B1_Fachada-1.jpg" class="img-fluid fachada" alt="">
            </div>
        </div>
    </div>
   
</section>


<section id="amenidades-m">
    <div class="container-fluid">
        <div class="row ameni">
            <div class="col-lg-4 col-md-4 col-sm-6 imag-planta">
                <img src="/img/magenta/GC_Perla_B1_Planta.png" class="img-fluid planta-b" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 ameni-txt magenta">
                <h1>Modelo Aguamarina</h1>
                <li>Terreno desde: 6 x 17 m </li>
                <li>Construcción: 45.82 m2
                </li>
                <br>
                <li style="font-weight: 600" class="boold">Planta Arquitectónica</li> <br>
                
                <li>Sala / Comedor</li>
                <li>Cocina independiente</li>
                <li>1 Baño Completo</li>
                <li>Recámara principal con área para clóset</li>
                <li>Recámara secundaria</li>
                
                

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
                    <img src="/img/Icons/Logo-Calzada.svg" alt="" class="img-fluid circulo-calzada">
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

                <div class="form-group botom">
      
                    
                
                <button type="submit" class="btn btn-pink">Enviar</button>
              </form>
        </div>
       </div>
   </div>
</section>
@endsection