<?php 
$host_direccion = getHostByName(getHostName());
define('ROOT_URL', 'http://'.$host_direccion.'/sandbox/advance/');
define('ROOT_LLENAR_DATA','http://'.$host_direccion.'/sandbox/advance/form_data.php');
define('ROOT_GENERAL','http://'.$host_direccion.'/sandbox/advance/general.php');
define('ROOT_DOWNLOAD','http://'.$host_direccion.'/sandbox/advance/download.php');
define('ROOT_EVALUACION','http://'.$host_direccion.'/sandbox/advance/evaluacion.php');

?>