
<?php require('config/config.php')?>
<?php

if(isset($_GET['submite'])){
	$Fecha=$_GET['Fecha'];
	$Auditor=$_GET['Auditor'];
	$Area=$_GET['Area'];
	$C_Despejado[]=array_sum([intval($_GET['1SQ1']),intval($_GET['1SQ2']),intval($_GET['1SQ3']),intval($_GET['1SQ4']),intval($_GET['1SQ5']),intval($_GET['1SQ6']),intval($_GET['1SQ7'])]);
	$C_Organizar[]=array_sum([intval($_GET['2SQ1']),intval($_GET['2SQ2']),intval($_GET['2SQ3']),intval($_GET['2SQ4']),intval($_GET['2SQ5']),intval($_GET['2SQ6']),intval($_GET['2SQ7']),intval($_GET['2SQ8'])]);
	$C_Limpiar[]=array_sum([intval($_GET['3SQ1']),intval($_GET['3SQ2']),intval($_GET['3SQ3']),intval($_GET['3SQ4']),intval($_GET['3SQ5']),intval($_GET['3SQ6']),intval($_GET['3SQ7'])]);
	$C_Estandarizar[]=array_sum([intval($_GET['4SQ1']),intval($_GET['4SQ2']),intval($_GET['4SQ3']),intval($_GET['4SQ4']),intval($_GET['4SQ5']),intval($_GET['4SQ6']),intval($_GET['4SQ7'])]);
	$C_Disciplina[]=array_sum([intval($_GET['5SQ1']),intval($_GET['5SQ2']),intval($_GET['5SQ3']),intval($_GET['5SQ4']),intval($_GET['5SQ5']),intval($_GET['5SQ6']),intval($_GET['5SQ7'])]);
	$C_Seguridad[]=array_sum([intval($_GET['6SQ1']),intval($_GET['6SQ2']),intval($_GET['6SQ3']),intval($_GET['6SQ4']),intval($_GET['6SQ5']),intval($_GET['6SQ6']),intval($_GET['6SQ7'])]);

$query="INSERT INTO `test_data_5s` (`Fecha`, `Auditor`, `Area`, `C_Despejar`, `C_Organizar`, `C_Limpiar`, `C_Estandarizar`, `C_Disciplina`, `C_Seguridad`) VALUES ('$Fecha', '$Auditor', '$Area', '$C_Despejado[0]', '$C_Organizar[0]', '$C_Limpiar[0]', '$C_Estandarizar[0]', '$C_Disciplina[0]', '$C_Seguridad[0]');";}
?>
<?php include('config/header.php')?>
<style>
td, th {
  padding: 1.5rem;
}
table {
    border-spacing: 5px;
}
table, td, th {
  border: 1px solid;

}		

.stilo-preguntas{
	text-align: center;
	font-family: arial black;
	font-size: 15px;
	width: 940px;
}
.grid-container-evaluacion{
	display: flex;
	grid-template-columns: 1fr;

}	

.main_evaluacion{
	display: grid;
	grid-template-columns: auto;

	align-content: center;
/*	background-color: white;*/
	padding: .5rem;
	flex: 10 10 100px;
	align-items: center;
	justify-content: center;
	margin: 4px;
}
</style>
<body style="background-image: url('icon/fondo_5.jpg');
	background-position: center;
  	background-repeat: no-repeat;
  	background-size: cover;	
  	background-position-y: center;
  	background-attachment: fixed;
    height: 880px;
    width: 100%;
	">

<?php include('navbar.php');?>

<div class="main">
	<aside class="left_general">
		
	</aside>
<main class="main_evaluacion">

<div class="grid-container-evaluacion">
	<form>
<!-- tabla 1s  -->
<table class="table table-hover">
  
  <thead>
    <tr class="table-dark">
      <th scope="col">No.</th>
      <th scope="col" style="text-align:center;">1'S DESPEJAR:"Mantener solo lo necesario"</th>
      <th scope="col">SI</th>
      <th scope="col">NO</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-light">
      <th scope="row">1</th>
      <td>
    <p class="stilo-preguntas">
    1.- Esta el area de trabajo libre de cajas vacias y/o trapos sucios? Si
	la respuesta es NO; entonces Tiene un area asifnada para 
	evidencia objtiva: Tomar Foto</p>
      </td><td><input class="form-check-input" type="radio" name="1SQ1" id="1SQ1-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="1SQ1" id="1SQ1-0" value="0" required></td>
    </tr>
    <tr class="table-secondary" >
      <th scope="row">2</th>
      <td>
    <p class="stilo-preguntas">
    2.- Estan los pasillos de transito libres de obstaculos que afecten el 
	flujo: Pallets, carritos, material, botes de basura? evidencia objtiva: Tomar Foto</p>
	  </td>
      </td><td><input class="form-check-input" type="radio" name="1SQ2" id="1SQ2-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="1SQ2" id="1SQ2-0" value="0" required></td>
    </tr>

    <tr class="table-light">
      <th scope="row">3</th>
      <td>
	<p class="stilo-preguntas">
    3.- Se encuentra el area libre de documentos sin uso, obsoletos o en mal estado?: Ayudas visuales obsoletas,
	documentos fuera de revision, documentacion ilegible o rayados? De acuerdo a ayudas visuales actuales evidencia objtiva: Tomar Foto</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="1SQ3" id="1SQ3-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="1SQ3" id="1SQ3-0" value="0" required></td>
    </tr>

    <tr class="table-secondary">
      <th scope="row">4</th>
      <td>
	<p class="stilo-preguntas">
    4.- Se encuentran los escritorios libres de materiales, herramientas y/o equipo que se no se utiliza en el area de trabajo
	evidencia objtiva: Tomar Foto</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="1SQ4" id="1SQ4-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="1SQ4" id="1SQ4-0" value="0" required></td>
    </tr>

    <tr class="table-light">
      <th scope="row">5</th>
      <td>
	<p class="stilo-preguntas">
    	5.- Las estaciones de trabajo estan libres de herramientas y/o equipos innecesarios? De acuerdo a ayuda visual 
		actual evidencia objtiva: Tomar Foto</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="1SQ5" id="1SQ5-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="1SQ5" id="1SQ5-0" value="0" required></td>
    </tr>

    <tr class="table-secondary">
      <th scope="row">6</th>
      <td>
	<p class="stilo-preguntas">
    	6.- Las estaciones de trabajo estan libres de material o producto rezagado? evidencia objtiva: Tomar Foto y 
    	tomar informacion de numero de parte de material extra o rezagado</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="1SQ6" id="1SQ6-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="1SQ6" id="1SQ6-0" value="0" required></td>
    </tr>

    <tr class="table-light">
      <th scope="row">7</th>
      <td>
	<p class="stilo-preguntas">
    	7.- Esta el area libre de carton, tanto en materia prima como estaciones de trabajo?
    	evidencia objetiva: foto</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="1SQ7" id="1SQ7-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="1SQ7" id="1SQ7-0" value="0" required></td>
    </tr>
  </tbody>
</table>
<!-- tabla 2s -->
<table class="table table-hover">
  
  <thead>
    <tr class="table-dark">
      <th scope="col">No.</th>
      <th scope="col" style="text-align:center;">2'S ORGANIZAR:"Un lugar para cada cosa y cada cosa para su lugar"</th>
      <th scope="col">SI</th>
      <th scope="col">NO</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-light">
      <th scope="row">1</th>
      <td>
    <p class="stilo-preguntas">
    1.- Estan Claramente marcadas en amarillo las posiciones de los principales corredores, pasillos internos
	y externos? (no sucios, no rotos y alineados) Evidencia objetiva: foto</p>
      </td><td><input class="form-check-input" type="radio" name="2SQ1" id="2SQ1-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="2SQ1" id="2SQ1-0" value="0" required></td>
    </tr>
    <tr class="table-secondary" >
      <th scope="row">2</th>
      <td>
    <p class="stilo-preguntas">
    2.- Estan claramente (de acuerdo al estandar de codigo de colores) marcadas las zonas para dejar el material y los 
	pasillos libres dentreo del area de trabajo? Evidencia objetiva: foto</p>
	  </td>
      </td><td><input class="form-check-input" type="radio" name="2SQ2" id="2SQ2-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="2SQ2" id="2SQ2-0" value="0" required></td>
    </tr>

    <tr class="table-light">
      <th scope="row">3</th>
      <td>
	<p class="stilo-preguntas">
    3.- Estan en uso los paneles de herramientas (shadow board) en las estaciones de trabajo? Evidencia objetiva: foto</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="2SQ3" id="2SQ3-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="2SQ3" id="2SQ3-0" value="0" required></td>
    </tr>

    <tr class="table-secondary">
      <th scope="row">4</th>
      <td>
	<p class="stilo-preguntas">
    4.- Estan los materiales en proceso identificados correctamente de acuerdo al estandar de identificacion?
	Evidencia objetica: foto</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="2SQ4" id="2SQ4-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="2SQ4" id="2SQ4-0" value="0" required></td>
    </tr>

    <tr class="table-light">
      <th scope="row">5</th>
      <td>
	<p class="stilo-preguntas">
    	5.- Se encuentran las herramientas, puntos de uso y fixtures almacenados en un lugar seguro, organizados
    	faciles de usar e identificados? Evidencia objtiva: Tomar Foto</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="2SQ5" id="2SQ5-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="2SQ5" id="2SQ5-0" value="0" required></td>
    </tr>

    <tr class="table-secondary">
      <th scope="row">6</th>
      <td>
	<p class="stilo-preguntas">
    	6.- Los Equipos utilizados presentan calibraciones vigentes? Los fixtures utilizados tienen la etiqueta de vigencia
    actualizada? Reportar si su vigencia esta proxima a vencer (1 semana) Evidencia Objetiva, # de asset, registrar informacion
	de equipos con calibracion proxima a vencer (1 semana) reportarlo</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="2SQ6" id="2SQ6-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="2SQ6" id="2SQ6-0" value="0" required></td>
    </tr>

    <tr class="table-light">
      <th scope="row">7</th>
      <td>
		<p class="stilo-preguntas">
    	7.- Se encuentran las unidades terminadas, y set up/kits etiquetadas por numero de parte o modelo? Evidencia objetiva: foto</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="2SQ7" id="2SQ7-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="2SQ7" id="2SQ7-0" value="0" required></td>
    </tr>

    <tr class="table-secondary">
      <th scope="row">8</th>
      <td>
		<p class="stilo-preguntas">
    	8.- Estan las estaciones de trabajo claramente marcadas de acuerdo al codigo de colores y de facil acceso para seguir un 
	    flujo? Evidencia objetiva: Foto</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="2SQ8" id="2SQ8-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="2SQ8" id="2SQ8-0" value="0" required></td>
    </tr>

  </tbody>
</table>
<!-- tabla 3s -->
<table class="table table-hover">
  
  <thead>
    <tr class="table-dark">
      <th scope="col">No.</th>
      <th scope="col" style="text-align:center;">3'S LIMPIEZA:"Un area de trabajo impecable"</th>
      <th scope="col">SI</th>
      <th scope="col">NO</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-light">
      <th scope="row">1</th>
      <td>
    <p class="stilo-preguntas">
    1.- Se encuentran el piso libre de polvo, fluidos y materiales utilizados en el area? Evidencia objetiva: foto</p>
      </td><td><input class="form-check-input" type="radio" name="3SQ1" id="3SQ1-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="3SQ1" id="3SQ1-0" value="0" required></td>
    </tr>
    <tr class="table-secondary" >
      <th scope="row">2</th>
      <td>
    <p class="stilo-preguntas">
    2.- Estan accesibles e identificados facilmente los suministros de limpieza? Evidencia Objetiva: foto</p>
	  </td>
      </td><td><input class="form-check-input" type="radio" name="3SQ2" id="3SQ2-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="3SQ2" id="3SQ2-0" value="0" required></td>
    </tr>

    <tr class="table-light">
      <th scope="row">3</th>
      <td>
	<p class="stilo-preguntas">
    3.- Se encuentran los equipos y estaciones de trabajo limpias? (Libres de polvo, manchas, liquidos)
    	 Evidencia objetiva: foto</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="3SQ3" id="3SQ3-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="3SQ3" id="3SQ3-0" value="0" required></td>
    </tr>

    <tr class="table-secondary">
      <th scope="row">4</th>
      <td>
	<p class="stilo-preguntas">
    4.- Se encuentran los escritorios, archiveros y mesas limpias en el area de trabajo? (Libres de polvo, manchas, liquidos
	Evidencia Objetiva: foto</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="3SQ4" id="3SQ4-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="3SQ4" id="3SQ4-0" value="0" required></td>
    </tr>

    <tr class="table-light">
      <th scope="row">5</th>
      <td>
	<p class="stilo-preguntas">
    	5.- Esta el EXTERIOR de las maquinas y equipos libres de aceite, basura, tierra y desecho?
    	 Evidencia objtiva: Tomar Foto y registrar # de asset de equipo</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="3SQ5" id="3SQ5-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="3SQ5" id="3SQ5-0" value="0" required></td>
    </tr>

    <tr class="table-secondary">
      <th scope="row">6</th>
      <td>
	<p class="stilo-preguntas">
    	6.- Se desaloja la basura antes de que sobrepase el limite del contenedor? Evidencia objetiva: foto</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="3SQ6" id="3SQ6-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="3SQ6" id="3SQ6-0" value="0" required></td>
    </tr>

    <tr class="table-light">
      <th scope="row">7</th>
      <td>
		<p class="stilo-preguntas">
    	7.- Se encuentran las estaciones de trabajo en buenas condiciones(sin manchas de RTV, torque seal y pintadas debidamente)? Evidencia objetiva: foto</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="3SQ7" id="3SQ7-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="3SQ7" id="3SQ7-0" value="0" required></td>
    </tr>

  </tbody>
</table>
<!-- tabla 4s -->
<table class="table table-hover">
  
  <thead>
    <tr class="table-dark">
      <th scope="col">No.</th>
      <th scope="col" style="text-align:center;">4'S ESTANDARIZAR:"Todo siempre igual"</th>
      <th scope="col">SI</th>
      <th scope="col">NO</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-light">
      <th scope="row">1</th>
      <td>
    <p class="stilo-preguntas">
    1.- Se asignan responsabilidad de 5S? Rol de Limpieza Evidencia objetiva: foto</p>
      </td><td><input class="form-check-input" type="radio" name="4SQ1" id="4SQ1-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="4SQ1" id="4SQ1-0" value="0" required></td>
    </tr>
    <tr class="table-secondary" >
      <th scope="row">2</th>
      <td>
    <p class="stilo-preguntas">
    2.- Estan la material prima en uso y el almacenamiento de los equipo marcadas y etiquetadas de manera consistente y comprensible?
    Verificacion de consistenten en revisar las envidencias objetivas de auditoria previas., compresible, pregunta al personal y registrar #empleado</p>
	  </td>
      </td><td><input class="form-check-input" type="radio" name="4SQ2" id="4SQ2-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="4SQ2" id="4SQ2-0" value="0" required></td>
    </tr>

    <tr class="table-light">
      <th scope="row">3</th>
      <td>
	<p class="stilo-preguntas">
    3.- Los metricos estan actualizados: GEMBAS, hora por hora, bitacora ESD, defectos en proc., mantto. Preventivo y 5S
	Evidencia objetiva: foto</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="4SQ3" id="4SQ3-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="4SQ3" id="4SQ3-0" value="0" required></td>
    </tr>

    <tr class="table-secondary">
      <th scope="row">4</th>
      <td>
	<p class="stilo-preguntas">
    4.- Los Materiales suministros en las areas presentan un buen manejo de inventario?(no exceso de material, solo que 
	indique el tamaño de canaleta y/o charola) Evidencia objetiva: foto</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="4SQ4" id="4SQ4-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="4SQ4" id="4SQ4-0" value="0" required></td>
    </tr>

    <tr class="table-light">
      <th scope="row">5</th>
      <td>
	<p class="stilo-preguntas">
    	5.- Las demarcaciones estan de acuerdo a los estandares de 5'S? (codigo de colores y estandar de identificacion)
    	Evidencia objetiva: foto</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="4SQ5" id="4SQ5-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="4SQ5" id="4SQ5-0" value="0" required></td>
    </tr>

    <tr class="table-secondary">
      <th scope="row">6</th>
      <td>
	<p class="stilo-preguntas">
    	6.- La matriz de entrenamiento esta actualizada y visible? Evidencia Objetiva, tomar # Empleado y revisar la matriz</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="4SQ6" id="4SQ6-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="4SQ6" id="4SQ6-0" value="0" required></td>
    </tr>

    <tr class="table-light">
      <th scope="row">7</th>
      <td>
		<p class="stilo-preguntas">
    	7.- El Personal porta su gafete a la vista y con sus respectivas certificaciones de operaciones que realiza?
    	Evidencia objtiva, tomar # de empleado y revisar matriz</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="4SQ7" id="4SQ7-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="4SQ7" id="4SQ7-0" value="0" required></td>
    </tr>

  </tbody>
</table>
<!-- tabla 5s -->
<table class="table table-hover">
  
  <thead>
    <tr class="table-dark">
      <th scope="col">No.</th>
      <th scope="col" style="text-align:center;">5'S DISCIPLINA:"Seguir las reglas y ser consistente"</th>
      <th scope="col">SI</th>
      <th scope="col">NO</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-light">
      <th scope="row">1</th>
      <td>
    <p class="stilo-preguntas">
    1.- Tiene el area una apariencia limpia y organizada vista desde el exterior? (Todo de acuerdo a demarcaciones de 5S)
	Se cumplio el punto 5 de Estandarizacion</p>
      </td><td><input class="form-check-input" type="radio" name="5SQ1" id="5SQ1-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="5SQ1" id="5SQ1-0" value="0" required></td>
    </tr>
    <tr class="table-secondary" >
      <th scope="row">2</th>
      <td>
    <p class="stilo-preguntas">
    2.- Los Metricos de SQDIP (Seguridad, Calidad, Entrega, Inventario, Productividad) demuestran seguimiento activo
	y se llenan rutinarimente? Se cumpli el punto 3 de Estandarizacion? Evidencia Objetiva: foto</p>
	  </td>
      </td><td><input class="form-check-input" type="radio" name="5SQ2" id="5SQ2-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="5SQ2" id="5SQ2-0" value="0" required></td>
    </tr>

    <tr class="table-light">
      <th scope="row">3</th>
      <td>
	<p class="stilo-preguntas">
    3.- Se encuentran establecido un control visual para revisar frecuentemente el progreso de las acciones correctivas de 5S?
	Evidencia objetiva: foto</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="5SQ3" id="5SQ3-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="5SQ3" id="5SQ3-0" value="0" required></td>
    </tr>

    <tr class="table-secondary">
      <th scope="row">4</th>
      <td>
	<p class="stilo-preguntas">
    4.- Se encuentran los resultados de las auditorias disponibles para el equipo de trabajo? Evidencia objetiva foto y 
	preguntar al personal registrar # empleado</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="5SQ4" id="5SQ4-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="5SQ4" id="5SQ4-0" value="0" required></td>
    </tr>

    <tr class="table-light">
      <th scope="row">5</th>
      <td>
	<p class="stilo-preguntas">
    	5.- Estan definidos claramente las responsabilidades de 5S para el personal local, todos se involucran y se ejecutan?
    	Se cumplieron todos los puntos de limpieza en seccion 3 Evidencia Objetiva, preguntar al personal, registrar 
    # de empleado</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="5SQ5" id="5SQ5-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="5SQ5" id="5SQ5-0" value="0" required></td>
    </tr>

    <tr class="table-secondary">
      <th scope="row">6</th>
      <td>
	<p class="stilo-preguntas">
    	6.- Son identificados, rastreadas, desplegadas visualmente y revisadas regularmente las contramedidas de acuerdo a la
    auditoria de 5S? Grafica o historial. Se cumplio el punto 3 de Estadarizacion? Evidencia Objetiva, reporte de contramedida con status actualizado, correos de seguimientos, juntas etc</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="5SQ6" id="5SQ6-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="5SQ6" id="5SQ6-0" value="0" required></td>
    </tr>

    <tr class="table-light">
      <th scope="row">7</th>
      <td>
		<p class="stilo-preguntas">
    	7.- Los resultados de esta auditoria son comunicados clara y visualmente a los miembros del area? Evidencia objetiva,
    	preguntar al personal, registrar # de empleado</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="5SQ7" id="5SQ7-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="5SQ7" id="5SQ7-0" value="0" required></td>
    </tr>

  </tbody>
</table>
<!-- tabla 6s -->
<table class="table table-hover">
  
  <thead>
    <tr class="table-dark">
      <th scope="col">No.</th>
      <th scope="col" style="text-align:center;">6'S SEGURIDAD</th>
      <th scope="col">SI</th>
      <th scope="col">NO</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-light">
      <th scope="row">1</th>
      <td>
    <p class="stilo-preguntas">
    1.- El operador sabe cual es la ubicacion de la documentacion de MSDS (Hojas de datos de seguridad de material)?
	Evidencia objetiva, pregunta al personal, registrar # de empleado</p>
      </td><td><input class="form-check-input" type="radio" name="6SQ1" id="6SQ1-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="6SQ1" id="6SQ1-0" value="0" required></td>
    </tr>
    <tr class="table-secondary" >
      <th scope="row">2</th>
      <td>
    <p class="stilo-preguntas">
    2.- Estan accesibles y presentes los procedimientos y las ubicaciones de los paros de emergencia de las maquinas?
	Evidencia objetiva foto y registrar asset de equipos</p>
	  </td>
      </td><td><input class="form-check-input" type="radio" name="6SQ2" id="6SQ2-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="6SQ2" id="6SQ2-0" value="0" required></td>
    </tr>

    <tr class="table-light">
      <th scope="row">3</th>
      <td>
	<p class="stilo-preguntas">
    3.- Estan los pisos y pasillos libres de aceite, agua o cualquier tipo de obstaculo que pueda causar una caida?
	Evidencia objetiva foto</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="6SQ3" id="6SQ3-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="6SQ3" id="6SQ3-0" value="0" required></td>
    </tr>

    <tr class="table-secondary">
      <th scope="row">4</th>
      <td>
	<p class="stilo-preguntas">
    4.- El personal cuenta con el equipo de seguridad correspondiente al area de trabajo y de acuerdo a cada operacion?
	Evidencia objetiva registrar # de empleado</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="6SQ4" id="6SQ4-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="6SQ4" id="6SQ4-0" value="0" required></td>
    </tr>

    <tr class="table-light">
      <th scope="row">5</th>
      <td>
	<p class="stilo-preguntas">
    	5.- Se mantienen seguros y ordenados los cables electricos y extensiones sin riesgo de tropiezo
    	Evidencia objtiva foto</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="6SQ5" id="6SQ5-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="6SQ5" id="6SQ5-0" value="0" required></td>
    </tr>

    <tr class="table-secondary">
      <th scope="row">6</th>
      <td>
	<p class="stilo-preguntas">
    	6.- Estan identificados apropiadamente (español) los controles del operador de las maquinas? (ejemplo: activacion
    	, desactivacion y paro emergencia) Evidencia objetiva foto y registrar asset equipo </p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="6SQ6" id="6SQ6-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="6SQ6" id="6SQ6-0" value="0" required></td>
    </tr>

    <tr class="table-light">
      <th scope="row">7</th>
      <td>
		<p class="stilo-preguntas">
    	7.- Estan los recipientes, tambos, cubetas, botellas, etc. identificados y etiquetados con los contenidos y almacenados apropiadamente? Evidencia objetiva foto</p>
      </td>
      </td><td><input class="form-check-input" type="radio" name="6SQ7" id="6SQ7-1" value="1" required></td>
      </td><td><input class="form-check-input" type="radio" name="6SQ7" id="6SQ7-0" value="0" required></td>
    </tr>

  </tbody>
</table>
</div>

<div style="align-content:center; text-align: center;">
	<input type="submit" name="submite" value="Aceptar" class="btn btn-lg btn-primary" style="width:200px; text-align:center; align-content:center;">
	<label class="letras_forma" for="Fecha">Fecha:</label>
 	<input class="Opiciones" type="date" id="Fecha" name="Fecha" required>
 	<label class="letras_forma" for="Auditor">Auditor</label>
	<select class="Opiciones" name="Auditor" id="Auditor" required>
		<option value="">--Please choose an option--</option>
    <option value="Yoselin Salazar ">Yoselin Salazar </option>
    <option value="Enrique Ambriz">Enrique Ambriz</option>
    <option value="Julio Saavedra">Julio Saavedra</option>
    <option value="Marco Barajas">Marco Barajas</option>
    <option value="Jaime Murillo">Jaime Murillo</option>
    <option value="Arturo Melendrez ">Arturo Melendrez </option>
    <option value="Gisel Carmona">Gisel Carmona</option>
    <option value="Luis Aguillon">Luis Aguillon</option>
    <option value="Arcadio Navarro">Arcadio Navarro</option>
    <option value="Nestor German">Nestor German</option>
    <option value="German Aguilar">German Aguilar</option>
    <option value="Rafael Espinoza">Rafael Espinoza</option>
    <option value="Manuel Flores ">Manuel Flores </option>
    <option value="Octavio Hernandez">Octavio Hernandez</option>
    <option value="Adrian Delgado">Adrian Delgado</option>
    <option value="Rafael Rodriguez">Rafael Rodriguez</option>
    <option value="Zaida Sanchez">Zaida Sanchez</option>
    <option value="Edgardo Palero">Edgardo Palero</option>
    <option value="Rodrigo Gutierrez">Rodrigo Gutierrez</option>
    <option value="Andres Osorio">Andres Osorio</option>
    <option value="Ramiro Garcia">Ramiro Garcia</option>
    <option value="Sergio Godoy">Sergio Godoy</option>
    <option value="Estefania Peña">Estefania Peña</option>
	</select>
	<label class="letras_forma" for="Area">Area</label>
	<select class="Opiciones" name="Area" id="Area" required>
		<option value="">--Please choose an option--</option>
    <option value="C1">C1</option>
    <option value="C2">C2</option>
    <option value="C3">C3</option>
    <option value="C4">C4</option>
    <option value="C8">C8</option>
    <option value="XFMR_Switcher">XFMR_Switcher</option>
    <option value="Cables">Cables</option>
    <option value="Preparacion">Preparacion</option>
    <option value="Almacen">Almacen</option>
    <option value="Celda7">Celda7</option>
    <option value="Patios_Rampas_Gerardo">Patios_Rampas_Gerardo</option>
    <option value="Patios_Rampas_Loreley">Patios_Rampas_Loreley</option>
    <option value="Mantenimiento">Mantenimiento</option>
    <option value="Quimicos">Quimicos</option>
    <option value="Ingenieria">Ingenieria</option>
    <option value="Chassis">Chassis</option>
    <option value="SMT">SMT</option>
    <option value="IQC">IQC</option>
    <option value="BURN_IN">BURN_IN</option>
    <option value="RMA">RMA</option>
    <option value="Patios_Frontal_Manuel">Patios_Frontal_Manuel</option>
    <option value="Patios_David">Patios_David</option>
    <option value="Patios_Miguel">Patios_Miguel</option>
    <option value="Patio_Jardin">Patio_Jardin</option>
    <option value="Patio_Pasillo_Acceso">Patio_Pasillo_Acceso</option>
    <option value="Patio_Estacionamientos">Patio_Estacionamientos</option>
    <option value="Celda_PCS">Celda PCS</option>
    <option value="XFMR_Toroides_Lineales">XFMR Toroides/Lineales</option>
</select>
</div>

</form>

</main>
<aside class="right_general">
	
</aside>
</div>
</body>
</html>