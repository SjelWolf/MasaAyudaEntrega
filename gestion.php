<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>MesaAyuda</title>
  <link rel="stylesheet" href="css/index.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="img/logo_size.jpg">
</head>

<body>
  <header>
      <?php include "header.html"?>
  </header>

  <main>
    <section>
      <p style=" font-size: 45px;color:white;font-family:Comic Sans MS" >Accede aqui para poder realizar la gestion de las Areas de la empresa</p>
      <p style=" font-size: 45px;color:white;font-family:Comic Sans MS" >consultas, actualizacion, borrado, insercion</p>
      <a href="#"><button type="button" onclick="location.href='vista/VistaCrudAreasAux.php'" class="btnAreas">Crud de Areas</button></</a>
    </section>
    <section>
      <p style=" font-size: 45px;color:white;font-family:Comic Sans MS" >Accede aqui para poder realizar la gestion de los empleados de la empresa</p>
      <p style=" font-size: 45px;color:white;font-family:Comic Sans MS" >consultas, actualizacion, borrado, insercion</p>
      <a href="#"><button type="button" onclick="location.href='vista/VistaCrudEmpleadosAux.php'" class="btnAreas">Crud de Empleados</button></</a>
    </section>
    <section>
      <p style=" font-size: 45px;color:white;font-family:Comic Sans MS" >Accede aqui para poder realizar un requerimiento o insidencia</p>
      <p style=" font-size: 45px;color:white;font-family:Comic Sans MS" >consultas, actualizacion, borrado, insercion</p>
      <a href="#"><button type="button" onclick="location.href='vista/VistaRadicacion.php'" class="btnAreas">Crud de </button></</a>
    </section>
  </main>

  <footer>
    <?php include "footer.html"  ?>
  </footer>
</body>
</html>
