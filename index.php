<?Php
ob_start();
?>
<?php
include 'class/loade.php';
?>
<?php
  //Assign all Page Specific variables
  $pagemaincontent = ob_get_contents();
  ob_end_clean();
  $pagetitle = "nombre titulo pagina";
  //Apply the template
	include("master.php");
?>
