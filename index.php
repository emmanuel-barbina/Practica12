<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo XA</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.html">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href=basicoPhp7.php>Básico Php7</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
  <h2>Problema: Calcular la masa de la Tierra:</p>
  <p>conociendo que el periodo orbital de la luna sobre la Tierra es 27.32 dias y la distancia entre ambos es de 3.84x108[m]. G=6.67x10-11[m3 kg-1 s-2]<br>
</p>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
      Periodo:1 dia=86400
      MasaTierra=(2pi/periodo)^2((distancia)^3/G)<br>
</section>
<section class="datos">
<h2>Datos:</h2>
      periodo=27.32 x 86400 <br>
      G= 6.67x10-11 <br>
      distancia=3.84x108m

</section>
<section class="calculos">
<h2>Solución</h2>
   <p>a)la masa de la Tierra es:<br>
      periodo=2360448segundos <br>
      MasaTierra=(2pi/2360448)^2((3.84x108)^3/6.67x10-11)<br>
      (2pi/2360448)^2 = 7.0855x10-12
      ((3.84x108)^3/6.67x10-11) = 8.48922x1035
    </p>

</section>
<?php
     function calcula_distancia(){
        
      $a= 7.0855;
        $b= 8.48922;
        $MasaTierra= ($a*$b)/10;
        return $MasaTierra;
     }
?>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php
 print "<h1> resultado: La masa es = ".calcula_distancia(). "  x10^24</h1>";
?>
</section>
</section>
    <footer class="pie">
     EMMANUEL BARBINA CARRERA 21090960
    </footer>
   </section>
</body>
</html>
