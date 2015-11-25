<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    
    
    
    
        <link rel="stylesheet" href="css/style1.css">

    
    
    
  </head>

  <body>

    <body class="align">

  <div class="site__container">

    <div class="grid__container">

      <img src="images/aja11.jpg" width="320 px" height="300 px">
      <form action="validar.php" method="post" class="form form--login">
				<center>	<h2>LOGIN DE INGRESO</h2> </center>
        <div class="form__field">
          <input type="text" class="form-control" name="txtNombre" autocomplete"off" required> <br><br>
        </div>

        <div class="form__field">
          <input type="password" class="form-control" name="txtPassword" autocomplete"off" required> <br><br>
        </div>

        <div class="form__field">
          <input type="submit" name="login" value="login">
        </div>

      </form>

      <p class="text--center">¿No es un miembro? <a href="insertarusuarios.php">Regístrese ahora</a> <span class="fontawesome-arrow-right"></span></p>

    </div>

  </div>

</body>
    
    
    
    
    
  </body>
</html>
