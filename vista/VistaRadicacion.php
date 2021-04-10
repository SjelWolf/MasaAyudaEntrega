<!DOCTYPE html> 
<?php
date_default_timezone_set('America/Bogota');
$hoy = date('Y-m-d H:i:s');
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="../img/logo_size.jpg">
        <link rel="stylesheet" href="../css/header.css">
          <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/vistaCargos.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>radicación Requerimientos</title>
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
               <?php 
             if(!empty($_SESSION)){
             echo'<li><a href="../control/ControlLogout.php">Cerrar Sesión</a></li>';
             }
             ?> 
            </ul>
          </nav>
        </div>
      </header>
      <main>
        <div class="container-main">
          <h1>Radicacion Requerimientos</h1>
                <form class="form-signin" action="../control/ControlRadicacion.php" method="post" name="form">
                    <div class="row">
                        <div class="col-md-6">
                             <label>Fecha Actual</label>
                <input type="datetime-local" name="txtfecha" id="codigo" class='form-control' maxlength="20" value="<?php echo'' . $hoy; ?>">
                        </div>
                        <div class="col-md-6">
                             <label>Vista Fecha Actual</label>
                             <input type="text" name="txtfecha2" id="codigo" class='form-control' maxlength="20" value="<?php echo'' . $hoy; ?>" disabled="true">
                        </div>

                        <div class="col-md-6">
                           
                <label >detalles de su requerimiento</label>
                <textarea id="form24" class="form-styling" rows="20" cols="50" maxlength="4000" name="txtobservacion"></textarea>
                        </div>

                        <div class="col-md-6">
                           
               <label>Area a la cual desea remitir su requerimiento</label>
                        <select name="txtAreaRequerimiento" class="form-styling">
                            <option value="30">Mantenimiento</option>
                            <option value="20">Gestión Humana</option>
                            <option value="10">Informática</option>
                        </select> 
                        </div>
              

                    <center>
                        <input type="submit" class="btn" class="btn-animate" style="font-family:'Britannic'; color: red" value="Radicar Requerimiento" id="enviar" style="text-align: center;">
                        
                    </center>
              </form>

            </div>
          </div>
      </main>
         <footer>
    <?php include "../footer.html"  ?>
  </footer>
  </body>

</html>