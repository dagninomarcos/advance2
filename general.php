<?php require('config/config.php')?>
<?php 
if(isset($_GET['antes'])){
  $fecha_sistema= "week('".date("Y-m-d").'\')-1';
  $Titulo='Semana Pasada';
}
else{
  $fecha_sistema="week('".date("Y-m-d").'\')';
  $Titulo='Semana Actual';
}

?>

<?php include('config/header.php')?>


<body style="background-image: url('icon/fondo_5.jpg') ;
	background-position: center;
  	background-repeat: no-repeat;
  	background-size: cover;	
  	background-position-y: center;
  	height: 890px;
		">
	
<?php include('navbar.php');?>
<div class="main">
<aside class="left_general">
	
</aside>

<main class="main_general" style="display: grid;">
		<h1 style="text-align: center; color:white; font-family: arial black;" ><?php echo $Titulo ;?></h1>
		<div class="chart-general">
  		<canvas id="grafica1" height="250" width="1600"></canvas>
		</div>
		<div class="grid-container-general">
		<div class="chart-general">
  		<canvas id="grafica2" height="280" width="533"></canvas>
		</div>
		<div class="chart-general">
  		<canvas id="grafica3" height="280" width="533"></canvas>
		</div>
		<div class="chart-general">
  		<canvas id="grafica4" height="280" width="533"></canvas>
		</div>
		</div>
		<div class="grid-container-general-botones">
		<form>
		<div>
		<input type="submit" value="antes" name="antes" class="btn btn-lg btn-primary">
		<input type="submit" value="despues" name="despues" class="btn btn-lg btn-primary">
		</div>
		</form>
		</div>
</main>	

<aside class="right_general">
	
</aside>
</div>
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
<script type="text/javascript" src="js/chart.js"></script>
<!-- <script type="text/javascript" src="js/chart1.php"></script> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
<?php include('js/barchar.php')?>
<?php include('config/footer.php')?>
 </body> 
</html>