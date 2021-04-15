<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="estilos.css.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
      img {
        display: block;
        margin-left: auto;
        margin-right: auto;
      }
    </style>
   
   <title>Login</title>
  </head>
  
  <body>
<div class="container-sm" >
<h2>Iniciar sesión</h2>
    <form action="proceso.php" method ="POST" >
        <div class="mb-2">
            <label for="correo" class="form-label" name="correo">Correo electrónico</label>
            <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp">
        </div>
        <div class="mb-2">
            <label for="contra" class="form-label" name="contra">Contraseña</label>
            <input type="password" class="form-control" id="contra" name="contra">

            <?php
              if(isset($_GET['error'])){
                $error =$_GET['error'];
                if($error == "incorrecto"){
                  echo "<h6><i>El usuario o contraseña no son correctos</i</h6>";
                }
                if($error == 'vacio'){
                  echo "<h6><i>Los datos enviados están vaciós</i></h6>";
                }
              }
          ?>
        
        </div>
     <p>Probando git 3</p>
        <button type="submit" class="btn btn-primary" value="enviar">Enviar</button>
    </form>

</div>























    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>