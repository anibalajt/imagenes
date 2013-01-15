<?php
define  ('INCLUDE_CHECK',true);
require 'class/connect.php';

$result = mysql_query("SELECT i.url,p.name FROM img i, user u,datapersonal p
                        where i.iduser=u.id and i.iduser=p.iduser ORDER BY i.id DESC");

$u=0;
echo '<div class="ct-im">';
while($row = mysql_fetch_array($result))
  {
    $u++;
    $html='<div class="ct-per">
                    <div class="ct-w"></div>
                    <div style="display:table;height: 50px; ">
                    <div class="ct-name">
                    <span style="    font-size: 16px;color: #fdfeff;">'.$row['name'].'</span>
                        </div>
                    </div>    
                </div>';
    switch ($u){
        case 1:
            echo '
            <div class="iay" style="height: 480px;float: left;">
                <a style="cursor:pointer"> <img style="" src="upload/'.$row['url'].'"></a>
                '.$html.'
            </div>

            ';
            break;/*Almacenar*/
        case 2:
            echo '<div style="float: right;width: 580px;margin: 0px 20px 0px 0px;display:inline-block">

        <div class="iay" style="height: 227px;float: left;">
            <a style="cursor:pointer"> <img style="" src="upload/'.$row['url'].'"></a>
                '.$html.'
        </div>

        ';
            break;/*Editar*/
        case 3:
            echo '

        <div class="iay" style="height: 227px;float: left;">
            <a style="cursor:pointer"> <img style="" src="upload/'.$row['url'].'"></a>
                '.$html.'
        </div>
        </div>
        ';
            break;/*Borrar*/
       case 4:
            echo '
         
        <div class="iay" style="height: 480px;width: 274px;float: left;;">
            <a style="cursor:pointer"> <img style="" src="upload/'.$row['url'].'"></a>
                '.$html.'
        </div>

        ';
            break;/*Editar*/
        case 5:
            echo '

        <div class="iay" style="height: 480px;float: left;">
                 <a style="cursor:pointer"> <img style="" src="upload/'.$row['url'].'"></a>
                     '.$html.'
        </div>
        
        ';
            break;/*Borrar*/
       case 6:
            echo '
            <div class="iay" style="height: 480px;width: 274px;float: right;">
                 <a style="cursor:pointer"> <img style="" src="upload/'.$row['url'].'"></a>
                     '.$html.'
             </div>

            ';
           
            break;/*Almacenar*/
       case 7:
            echo '<div style="display:inline-block">
        <div class="iay" style="width: 575px;height: 227px;float: left;">
            <a style="cursor:pointer"> <img style="" src="upload/'.$row['url'].'"></a>
                '.$html.'
        </div>

        ';
            break;/*Editar*/
        case 8:
            echo '

        <div class="iay" style="width: 575px;height: 227px;float: right;">
            <a style="cursor:pointer"> <img style="" src="upload/'.$row['url'].'"></a>
                '.$html.'
        </div>
        </div>
        
        ';
            break;/*Borrar*/
       case 9:
            echo '
                <div  style="float: left;width: 580px;display:inline-block">
        <div class="iay" style="height: 227px;float: left;;">
            <a style="cursor:pointer"> <img style="" src="upload/'.$row['url'].'"></a>
                '.$html.'
        </div>

        ';
            break;/*Editar*/
        case 10:
            echo '

        <div class="iay" style="height: 227px;float: left;">
            <a style="cursor:pointer"> <img style="" src="upload/'.$row['url'].'"></a>
                '.$html.'
        </div>
        </div>
        ';
            break;/*Borrar*/
       case 11:
            echo '
            <div class="iay" style="height: 480px;float: right;">
                 <a style="cursor:pointer"> <img style="" src="upload/'.$row['url'].'"></a>
                     '.$html.'
             </div>

            ';
           $u="0";
            break;/*Almacenar*/
    }

  }
echo '</div>';

?>

