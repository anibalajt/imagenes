<?php session_start();
define  ('INCLUDE_CHECK',true);
require '../class/connect.php';

$iduser=$_SESSION["id_a_user"];
$url=htmlspecialchars("uploads/t".$iduser."/".($_POST['url']));

mysql_query("INSERT INTO img SET iduser='".$iduser."', url='".$url."'"); 


?>
