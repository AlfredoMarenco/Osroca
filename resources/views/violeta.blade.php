@extends('layouts.template')

<header id="h-logo">
    <img src="/img/Icons/Logo-Almada-inv.png" class="img-fluid logo-h" alt="">
</header>

<section id="cabecera-img">
    <img src="/img/aguamarina/GC_Aguamarina_fachada.jpg" class="img-fluid fachada" alt="">
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
                <li>Construcción: 42.98 m2</li>
                <li>Planta Arquitectónica
                </li>
                <li>Sala/Comedor</li>
                <li>Cocina</li>
                <li>1 Baño Completo</li>
                <li>2 recámaras</li>
                <li>(Principal con espacio para clóset)</li>
                

                <br>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12" id="cotizacion">
                <h2 style="text-align: center">Un desarrollo de</h2>
                <div style="text-align: center">
                    <img src="/img/Icons/Logo-Calzada.svg" alt="" class="img-fluid circulo-calzada">
                </div>

                <form class="contact" id="cotizacion" name="contact-form" method="post" action="enviar.php">
                    <div class="form-group">
                        <h1>Recibe una cotización</h1>
        
                      <input type="name" name="nombre" class="form-control" id="exampleFormControlInput1" required="required" placeholder="Nombre">
                    </div>
    
                    <div class="form-group">
                      
                        <input type="tel" name="telefono" class="form-control" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="required" placeholder="Teléfono">
                      </div>
    
                    <div class="form-group">
                      
                      <input type="email" name="email" class="form-control" id="exampleFormControlInput1" required="required" placeholder="Correo">
                    </div>
    
                    <div class="form-group" style="text-align: center">
          
                        
                    
                    <button type="submit" class="btn btn-pink">Enviar</button>
                  </form>


            </div>
            
                
                
    
            
        </div>
    </div>

</section>



</section>