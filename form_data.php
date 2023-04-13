<?php 
$valor=false;
$cosa='';
$existe='';
require('config/config.php');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = mysqli_connect("localhost", "root", "1234", "test_5s");

 if(isset($_GET['submite'])){
 	$Fecha=$_GET['Fecha'];
	$Auditor=$_GET['Auditor'];
	$Area=$_GET['Area'];
	$C_Despejado=$_GET['Despejar'];
	$C_Organizar=$_GET['Organizar'];
	$C_Limpiar=$_GET['Limpiar'];
	$C_Estandarizar=$_GET['Estandarizar'];
	$C_Disciplina=$_GET['Disciplina'];
	$C_Seguridad=$_GET['Seguridad'];

$query_verificar="SELECT * FROM test_5s.test_data_5s where week(Fecha)=week('$Fecha') and Area='$Area';";
$array_existe=mysqli_query($mysqli,$query_verificar);
$existe=mysqli_fetch_all($array_existe,MYSQLI_NUM);
mysqli_free_result($array_existe);

if (empty($existe[0])) {
$query="INSERT INTO `test_data_5s` (`Fecha`, `Auditor`, `Area`, `C_Despejar`, `C_Organizar`, `C_Limpiar`, `C_Estandarizar`, `C_Disciplina`, `C_Seguridad`) VALUES ('$Fecha', '$Auditor', '$Area', '$C_Despejado', '$C_Organizar', '$C_Limpiar', '$C_Estandarizar', '$C_Disciplina', '$C_Seguridad')";
mysqli_query($mysqli,$query);
  }
  else{
    $cosa = 'pelas';
  }  



// $query="INSERT INTO `test_data_5s` (`Fecha`, `Auditor`, `Area`, `C_Despejar`, `C_Organizar`, `C_Limpiar`, `C_Estandarizar`, `C_Disciplina`, `C_Seguridad`) VALUES ('$Fecha', '$Auditor', '$Area', '$C_Despejado', '$C_Organizar', '$C_Limpiar', '$C_Estandarizar', '$C_Disciplina', '$C_Seguridad')";
//var_dump($query);
// mysqli_query($mysqli,$query);
}

$db= $mysqli;
$tableName="test_data_5s";
$columns= ['id', 'Fecha','Auditor','Area','C_Despejar','C_Organizar', 'C_Limpiar','C_Estandarizar','C_Disciplina','C_Seguridad'];

$fetchData = fetch_data($db, $tableName, $columns);
function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{
$columnName = implode(", ", $columns);
$query = "SELECT ".$columnName." FROM $tableName"." ORDER BY id DESC Limit 15";
$result = $db->query($query);
if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
?>




<?php include('config/header.php')?>
<script>
    function hello() {
        alert('Este registro ya esta agreago por esta semana');
    }
    </script>
<body style="background-image: url('icon/fondo_5.jpg') ;
  background-position: center;
    background-repeat: no-repeat;
    background-size: cover; 
    background-position-y: center;
    height: 800px;
  ">
<?php include('navbar.php') ?>
<?php if($cosa=='pelas'){
  echo '<script>
    hello();
    </script>';
  }?>

	<div class="main">

      <aside class="left">
  <h1 style="text-align: center; color: white;">Calificaciones</h1>
<form class="formato">
<!-- seleccionar la fecha -->
	<label class="letras_forma" for="Fecha">Fecha:</label>
 	<input type="date" id="Fecha" name="Fecha" required>
	<br></br>
<!-- Seleccionar el Auditor -->
	<label class="letras_forma" for="Auditor">Auditor</label>
	<select  name="Auditor" id="Auditor" required>
		<option value="">--Please choose an option--</option>
		<option value="Rodrigo Gutierrez">Rodrigo Gutierrez</option>
		<option value="Joselin Salazar">Yoselin Salazar</option>
	</select>
	<br></br>
<!-- Seleccionar las calificaciones de cada 5s -->
<div class="container_calificaciones">
	<label class="letras_forma" for="Despejar">Despejar</label>
	<input type="number" id="Despejar" name="Despejar" min="0" max="7"   required>

	<label class="letras_forma" for="Organizar">Organizar</label>	
	<input type="number" id="Organizar" name="Organizar" min="0" max="8"  required>

	<label class="letras_forma" for="Limpiar">Limpiar</label>
	<input type="number" id="Limpiar" name="Limpiar" min="0" max="7" required>

	<label class="letras_forma" for="Estandarizar">Estandarizar</label>
	<input type="number" id="Estandarizar" name="Estandarizar" min="0" max="7"  required>

	<label class="letras_forma" for="Disciplina">Disciplina</label>
	<input type="number" id="Disciplina" name="Disciplina" min="0" max="7" required>

	<label class="letras_forma" for="Seguridad">Seguridad</label>
	<input type="number" id="Seguridad" name="Seguridad" min="0" max="7" required>
</div>
	<br>
	<label class="letras_forma" for="Area">Area</label>
	<select class="Opiciones" name="Area" id="Area" required>
<?php include('config/list_areas.php');?>
</select>
	<br></br>	
  <div class="container"><input type="submit" value="Aceptar" name="submite" class="btn btn-lg btn-primary"></div>
	</form>
      </aside>
      
<main class="main">

<div class="container_tabla">
 <div class="row">
   <div class="col-sm-20">
    <?php echo $deleteMsg??''; ?>
    <div class="table table-striped">
      <table class="table table-striped" style="color: white; text-align: center; background-color:rgba(255, 255, 255, 0.2); ">
       <thead><tr>
         <th>id</th>
         <th>Fecha</th>
         <th>Auditor</th>
         <th>Area</th>
         <th>C_Despejar</th>
         <th>C_Organizar</th>
         <th>C_Limpiar</th>
         <th>C_Estandarizar</th>
         <th>C_Disciplina</th>
         <th>C_Seguridad</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <!-- <td><?php echo $sn; ?></td> -->
      <td><?php echo $data['id']??''; ?></td>
      <td><?php echo $data['Fecha']??''; ?></td>
      <td><?php echo $data['Auditor']??''; ?></td>
      <td><?php echo $data['Area']??''; ?></td>
      <td><?php echo $data['C_Despejar']??''; ?></td>
      <td><?php echo $data['C_Organizar']??''; ?></td>
      <td><?php echo $data['C_Limpiar']??''; ?></td>  
      <td><?php echo $data['C_Estandarizar']??''; ?></td>  
      <td><?php echo $data['C_Disciplina']??''; ?></td>  
      <td><?php echo $data['C_Seguridad']??''; ?></td>  
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</main>
<aside class="right">
	
</aside>
	</div>
<?php include('config/footer.php')?>
</body>
</html>