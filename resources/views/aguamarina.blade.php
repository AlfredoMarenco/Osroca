@extends('layouts.template-interior')

@section('section')

<section id="h-logo">
   <div class="container-fluid">
    <div class="row" >
        <div class="col-lg-5 col-md-12 col-sm-12">
            <img src="/img/Icons/Logo-Almada-inv.png" class="img-fluid logo-h" alt="">
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12 p-0">
            <img src="/img/aguamarina/GC_Aguamarina_fachada-1.jpg" class="img-fluid p-0" alt="">
        </div>
    </div>
   </div>
</section>
   


<section id="amenidades-m">
    <div class="container-fluid">
        <div class="row ameni">
            <div class="col-lg-4 col-md-4 col-sm-6 imag-planta">
                <img src="/img/aguamarina/Planta_01.jpg" class="img-fluid planta-b" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 ameni-txt">
                <h1>Modelo Aguamarina</h1>
                <li>Terreno desde: 5 x 17 m </li>
                <li>Construcción: 42.94 m2</li>
                <br>
                <li><b>Planta Arquitectónica</b> 
                </li> <br>
                
                <li>Sala/Comedor</li>
                <li>Cocina</li>
                <li>1 Baño Completo</li>
                <li>2 recámaras</li>
                <li>(Principal con espacio para clóset)</li>
                

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

                <div class="form-group" style="text-align: right">
      
                    
                
                <button type="submit" class="btn btn-pink">Enviar</button>
              </form>
        </div>
       </div>
   </div>
</section>
@endsection