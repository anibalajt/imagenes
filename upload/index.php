<?Php
ob_start();
?>

<link href='http://fonts.googleapis.com/css?family=Boogaloo' rel='stylesheet' type='text/css'>
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>-->
<script type="text/javascript" src="js/multiupload.js"></script>
<script type="text/javascript">
var config = {
	support : "image/jpg,image/png,image/bmp,image/jpeg,image/gif",		// Valid file formats
	form: "demoFiler",					// Form ID
	dragArea: "dragAndDropFiles",		// Upload Area ID
	uploadUrl: "upload/upload.php"				// Server side upload url
}
$(document).ready(function(){
	initMultiUploader(config);

});
</script>
<link href="css/stylep.css" type="text/css" rel="stylesheet" />

<div style="margin: 10px auto;text-align: center;color: white;width: 80px;height: 80px;position: relative">
    <div class="add">+</div>
    <form name="demoFiler" id="demoFiler" enctype="multipart/form-data" style="position: absolute;">
<input type="file" name="multiUpload" id="multiUpload" multiple />
<!--<input type="submit" name="submitHandler" id="submitHandler" value="Upload" class="buttonUpload" />-->
</form>
</div>
<div id="dragAndDropFiles" class="uploadArea"></div>

<div class="progressBar">
	<div class="status"></div>
</div>




<!--<select class="ui select bind-photo-category" data-bind="category" id="photo-category" name="category">
<option value="10"><font><font>Abstracto</font></font></option>
<option value="11"><font><font>Animales</font></font></option>
<option value="5"><font><font>Blanco y Negro</font></font></option>
<option value="1"><font><font>Celebridades</font></font></option>
<option value="9"><font><font>Ciudad y Arquitectura</font></font></option>
<option value="15"><font><font>Comercial</font></font></option>
<option value="16"><font><font>Concierto</font></font></option>
<option value="20"><font><font>Familia</font></font></option>
<option value="14"><font><font>Moda</font></font></option>
<option value="2"><font><font>Película</font></font></option>
<option value="24"><font><font>Fine Art</font></font></option>
<option value="23"><font><font>Alimento</font></font></option>
<option value="3"><font><font>Periodismo</font></font></option>
<option value="8"><font><font>Paisajes</font></font></option>
<option value="12"><font><font>Macro</font></font></option>
<option value="18"><font><font>Naturaleza</font></font></option>
<option value="4"><font><font>Desnudo</font></font></option>
<option value="7"><font><font>Personas</font></font></option>
<option value="19"><font><font>Artes Escénicas</font></font></option>
<option value="17"><font><font>Deporte</font></font></option>
<option value="6"><font><font>Naturaleza muerta</font></font></option>
<option value="21"><font><font>Calle</font></font></option>
<option value="26"><font><font>Transporte</font></font></option>
<option value="13"><font><font>Viajar</font></font></option>
<option value="22"><font><font>Submarino</font></font></option>
<option value="27"><font><font>Urban Exploration</font></font></option>
<option value="25"><font><font>Boda</font></font></option>
<option value="0"><font><font>Uncategorized</font></font></option></select>-->

