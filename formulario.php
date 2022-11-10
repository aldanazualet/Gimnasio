<div class="container">
<head>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<header>
  <h2><a href="#"><i class="ion-plane"></i> B&B Entrenamiento</a></h2>
  <nav>
    <ul>
      <li>
        <a class="btn" href="admin.html" title="Admin">Administrador</a>
      </li>
    </ul>
  </nav>
</header>

<div class="cover">
  <h1>Validación de DNI</h1>
  <form action="formulario.php" method="POST" class="flex-form">
    <label for="from">
      <i class="ion-location"></i>
    </label>
    <input type="text" name="dni" placeholder="DNI">
    <input type="submit" value="Aceptar">
  </form>
  <div id="madeby">
    <span>
     <a href="https://unsplash.com/@benblenner" target="_blank"></a>
    </span>
  </div>
</div>

</div>
</html>
        <?php
            require_once('conexion.php');
            if(isset($_POST['dni'])){
                $dni=$_POST['dni'];
                if($dni == ""){
                    echo "El campo DNI no puede estar vacío";
                }
            }
            if(count($dni)>0){
                $validar_dni = "SELECT FROM * gimnasio where usuario.dni = $dni";
                $validar_estado = "SELECT FROM * gimnasio WHERE usuario.estado = 'A'";
                if($validar_dni){
                    if($validar_estado){
                        $mensaje.="<h5>Validado correctamente</h5>";
                    }
                    else{
                        $mensaje.="<h5>Cuota pendiente</h5>";
                    }
                }
                else{
                    $mensaje.="<h5>DNI No registrado</h5>";
                }
            }
            else{
                $mensaje.="<h5>El campo debe completarse</h5>";
            }
        ?>
        