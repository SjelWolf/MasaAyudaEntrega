<?php

?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="../img/logo_size.jpg">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/vistaAreas.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
      <header>
        <div class="box-nav">
            <a href="../index.php"><div class="logo-header"><img src="../img/logo_size.jpg"></div></a>
          <section class="logo">
            <p><a href="#">MesaAyuda</a></p>
          </section>

          <nav class="nav">
            <ul>
              <li><a href="../index.php">HOME</a></li>
              <li><a href="../quienessomos.php">Quienes somos</a></li>
              <li><a href="../gestion.html">Gestiones Mesa de Ayuda</a></li>
              <li><a href="../integrantes.php">INTEGRANTES</a></li>
            </ul>
          </nav>
        </div>
      </header>
      <main>

        <div class="container-main">
          <h1>Inicio de Sesión</h1>

        <form action="../Control/ControlLogin.php" method="POST">
            <div class="row">
                <div class="col-md-6">
                <label><p>Email</p></label>
                <input type="email" name="txtemailingreso" id="nombres" class='form-control'>
              </div>
                <div class="col-md-6">
                <label><p>Número de Identificación</p></label>
                <input type="text" name="txtdocumentoingreso" id="nombres" class='form-control'>
              </div>
            
            <center>    <input type="submit" class="btn" style="font-family:'Maiandra GD'" value="login" id="enviar" style="text-align: center;"> </center>
        </div>
                                    </form>

                </div>
        </main>
  <footer>
    <?php include "../footer.html"  ?>
  </footer>
</body>
</html>