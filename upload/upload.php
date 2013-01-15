<?php session_start();
$iduser=$_SESSION["id_a_user"];
$nombre_carpeta = "uploads/t".$iduser."/"; 

if(!is_dir($nombre_carpeta)){ 
@mkdir($nombre_carpeta, 0777); 

}
if($_SERVER['REQUEST_METHOD'] == "POST"){
	if(move_uploaded_file($_FILES['file']['tmp_name'], "$nombre_carpeta/".$_FILES['file']['name'])){
		echo($_POST['index']);
	}
	exit;
        
//$nombre_fichero = '/path/to/foo.txt';
//$filename = $_FILES['file']['name'];
//$imagenoriginal = explode(".",$filename);
//if (file_exists("uploads/".$filename)) {
//    if(move_uploaded_file($_FILES['file']['tmp_name'], "uploads/".$imagenoriginal[0]."(1)".".".$imagenoriginal[1])){
//		echo($_POST['index']);
//	}
//    exit;
//} else {
//    if(move_uploaded_file($_FILES['file']['tmp_name'], "uploads/".$_FILES['file']['name'])){
//		echo($_POST['index']);
//	}
//    exit;
//}
}


?>
