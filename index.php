
<?php require('config/config.php')?>
<?php include('config/header.php')?>

<body style="background-image: url('icon/fondo_5.jpg') ;
	background-position: center;
  	background-repeat: no-repeat;
  	background-size: cover;	
  	background-position-y: center;
  	height: 100%;


		">
<?php include('navbar.php');?>



<div class="main">
      <aside class="left-index">
<div class="grid-container-big-index">
<div class="container-cool-index">
<canvas class="titulo_index" id="cinco-s" width="300" height="300"></canvas>	
</div>
</div>

      </aside>
	
<main class="main">
<div class="grid-container-big">
 <h1 class="strokeme" style="font-size:50px;"  style="justify-content: center;">Areas a Seleccionar</h1>
<div style="display: grid; grid-template-columns: auto auto auto auto; color: white;">
    <h1 class="strokeme" style="font-size:40px;" >Area 1</h1>
    <h1 class="strokeme" style="font-size:40px;">Area 2</h1>
    <h1 class="strokeme" style="font-size:40px;">Area 3</h1>
    <h1 class="strokeme" style="font-size:40px;">Area 4</h1>
</div>
<div class="grid-container">
    <div class="grid-container-botones">
<a href="area.php?Lugar=C1" class="botones">C1</a>
<a href="area.php?Lugar=C2" class="botones">C2</a>
<a href="area.php?Lugar=C3"  class="botones">C3</a>
<a href="area.php?Lugar=C4"  class="botones">C4</a>
<a href="area.php?Lugar=C8" class="botones">C8</a>
<a href="area.php?Lugar=XFMR_Switcher" class="botones">XFMR Switcher</a>
<a href="area.php?Lugar=Cables" class="botones">Cables</a>
    </div>
    <div class="grid-container-botones">
<a href="area.php?Lugar=Preparacion" class="botones">Preparacion</a>
<a href="area.php?Lugar=Almacen" class="botones">Almacen</a>
<a href="area.php?Lugar=Celda7" class="botones">Celda7</a>
<a href="area.php?Lugar=Patios_Rampas_Gerardo" class="botones">Patios Rampas<br>Gerardo M</a>
<a href="area.php?Lugar=Patios_Rampas_Loreley" class="botones">Patios Rampas<br>Loreley B</a>
<a href="area.php?Lugar=Mantenimiento" class="botones">Mantenimiento</a>
<a href="area.php?Lugar=Quimicos" class="botones">Quimicos</a>
    </div>
    <div class="grid-container-botones">
<a href="area.php?Lugar=Ingenieria" class="botones">Ingenieria</a>
<a href="area.php?Lugar=Chassis" class="botones">Chassis</a>
<a href="area.php?Lugar=SMT" class="botones">SMT</a>
<a href="area.php?Lugar=IQC" class="botones">IQC</a>
<a href="area.php?Lugar=BURN_IN" class="botones">BURN IN</a>
<a href="area.php?Lugar=RMA" class="botones">RMA</a>
<a href="area.php?Lugar=Patios_Frontal_Manuel" class="botones">Patios Frontal<br>Manuel S</a>
    </div>
    <div class="grid-container-botones">
<a href="area.php?Lugar=Patios_David" class="botones">Patios<br>David A</a>
<a href="area.php?Lugar=Patios_Miguel" class="botones">Patios<br>Miguel M</a>
<a href="area.php?Lugar=Patio_Jardin" class="botones">Patio Jardin<br>Monica M</a>
<a href="area.php?Lugar=Patio_Pasillo_Acceso" class="botones">Patio Pasillos Acceso<br>Laterla Jesus D</a>
<a href="area.php?Lugar=Patio_Estacionamientos" class="botones">Patio Estacionamientos<br>Marco H</a>
<a href="area.php?Lugar=Celda_PCS" class="botones">Celda PCS</a>
<a href="area.php?Lugar=XFMR_Toroides_Lineales" class="botones">XFMR Toroides/Lineales</a>
    </div>
</div>
</div>
      </main>
</div>
</div>
<?php include('config/footer.php')?>

<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
<script type="text/javascript" src="js/chart.js"></script>
<script type="text/javascript" src="js/chart1.php"></script>
<script>
const canvas = document.getElementById("cinco-s");
const ctx = canvas.getContext("2d");
function drawStroked(text, x, y, l) {
    ctx.font = '290px Arial Black';
    ctx.strokeStyle = 'white';
    ctx.lineWidth = 8;
    ctx.strokeText(text, x, y, l);
    ctx.shadowOffsetX = 3;
      ctx.shadowOffsetY = 3;
      ctx.shadowColor = 'rgba(255, 255, 255, 0.5)';   
      ctx.shadowBlur = 5;  
    ctx.fillStyle = 'rgb(254, 80, 0)';
    ctx.fillText(text, x, y, l);
    
}
function drawStroked2(text, x, y, l) {
    ctx.font = '30px Arial Black';
    ctx.strokeStyle = 'white';
    ctx.lineWidth = 3;
    ctx.strokeText(text, x, y, l);
    ctx.shadowOffsetX = 3;
      ctx.shadowOffsetY = 3;
      ctx.shadowColor = 'rgba(255, 255, 255, 0.5)';   
      ctx.shadowBlur = 5;  
    ctx.fillStyle = 'rgb(254, 80, 0)';
    ctx.fillText(text, x, y, l);
}

drawStroked("5S", 7, 230, 280);
drawStroked2("Dashboard", 55, 270, 600);  

ctx.beginPath();
ctx.strokeStyle = "#FF0000";
ctx.fillStyle = 'rgba(255, 255, 255, 0.1)';
ctx.lineWidth =1;
ctx.moveTo(40,30);
ctx.lineTo(115,30);
ctx.lineTo(75,45);
ctx.fill();

</script>


</body>
</html>