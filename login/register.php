<?php 
define  ('INCLUDE_CHECK',true);
require '../class/connect.php';

 $register_name=htmlspecialchars($_POST['register_name'],ENT_QUOTES);
 $register_ltname=htmlspecialchars($_POST['register_ltname'],ENT_QUOTES);
 $register_email=htmlspecialchars($_POST['register_email'],ENT_QUOTES);
 $register_passsword=htmlspecialchars(md5($_POST['register_password']));

 mysql_query("INSERT INTO user SET email='".$register_email."', pass='".$register_passsword."'"); 
 $register_id=mysql_insert_id();
 mysql_query("insert into datapersonal SET iduser='".$register_id."',name='".$register_name."',ltname='".$register_ltname."'"); 
   
 
?>