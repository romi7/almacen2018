<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
     <body style="background-image:url(imagenes/fondo_incio.png)">
         <div class ="container" id="primario" >
                <br>  
                <br> 
                     <br>  
                <br> 
                      <br>  
                
                 <div class="row" style="background-color:#ffffff"> 
                     <div class="col-12" style="background-color:#ffffff" >  
                     
         <h2 class="text-center" style="color:black;"> <img src="imagenes/icono_sesion.png" class="img-fluid" alt="Responsive image" align="center"> </h2>      

                     <br>
                </div> 
                     <div class="col-12" style="background-color:#ffffff" >  
                         <h2 fo class="text-center" style="color:#007bff;"> INICIO DE SESION</h2>
                </div> 
                <div class="col-4">
                
                 </div>
                <div class="col-4">
                    <br><br>
                    
                    <input id ="cajaNombre" class="form-control" type="text" placeholder="Usuario" required="required">
                    <br>
                    
                    <input id ="cajaPassword" class="form-control" type="password" placeholder="Contraseña">
                    <br>
                  
                    <button id="boton2" class="btn btn-primary btn-block">login</button>
                    <br>
                    
                    
       
                </div>
                <div class="col-4"></div>
               
            </div>
       
                </div> 
    </body>
     <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    
    <script>
        //document ready se ejecuta cuando la página se ha cargado correctamente
       $(document).ready(function(){
           //$('#cajaNombre').hide(); 
       });
       
       
       
        $('#boton2').click(function(){
            //leo el contenido de las cajas de nombre y contraseña
            var _cajaNombre = $('#cajaNombre').val();
            var _cajaPassword = $('#cajaPassword').val();
            
            
            $('#primario').load("login.php",{
                cajaNombre : _cajaNombre,
                cajaPassword : _cajaPassword
            });
        });
        
    </script>
</html>
