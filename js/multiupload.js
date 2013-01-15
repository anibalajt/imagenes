
function multiUploader(config){
  
	this.config = config;
	this.items = "";
	this.all = []
	 var img = new Array() 
	 var o = '0'
	var self = this;
	
	multiUploader.prototype._init = function(){
		if (window.File && 
			window.FileReader && 
			window.FileList && 
			window.Blob) {		
			 var inputId = $("#"+this.config.form).find("input[type='file']").eq(0).attr("id");
			 document.getElementById(inputId).addEventListener("change", this._read, false);
			 document.getElementById(this.config.dragArea).addEventListener("dragover", function(e){ e.stopPropagation(); e.preventDefault(); }, false);
			 document.getElementById(this.config.dragArea).addEventListener("drop", this._dropFiles, false);
			 document.getElementById(this.config.form).addEventListener("submit", this._submit, false);
		} else
			console.log("Browser supports failed");
	}
	
	multiUploader.prototype._submit = function(e){
		e.stopPropagation(); e.preventDefault();
		self._startUpload();
	}
	
	multiUploader.prototype._preview = function(data){
		this.items = data;
		if(this.items.length > 0){
                    var html = "";		
                    var uId = "";
                    var a=0;
                    for(var i = 0; i<this.items.length; i++){
                        
                        
                            uId = this.items[i].name._unique();
                            
                            var sampleIcon = '<img src="images/image.png" />';
                            var errorClass = "";
                            
                              var oFile = document.getElementById('multiUpload').files[i];
                              img[i]=oFile.name;
                                 
                             var oReader = new FileReader();
                             oReader.onload = function(e){

                                 
                                    if(typeof oFile != undefined){
                                            if(self._validate(oFile.type) <= 0) {
                                                    sampleIcon = '<img src="images/unknown.png" />';
                                                    errorClass =" invalid";
                                            } 
//    html += '<div class="dfiles'+errorClass+'" rel="'+uId+'">
//    <h5>'+sampleIcon+this.items[i].name+'</h5>
//    <div id="'+uId+'" class="progress" style="display:none;">
//    <img src="images/ajax-loader.gif" />
//    </div></div>';
//                                              $("#dragAndDropFiles").append('<img src="'+e.target.result+'">');
                                            
                                           
                                            
                                              html =  '<div id="bgfha'+o+'dertgh" class="dfiles '+ a +errorClass+'" rel="'+uId+'">\
                                                    <div class="preview car">\
                                                        <div class="c-i">\
                                                            <div class="sta"></div>\
                                                            <img src="'+e.target.result+'">\
                                                            <input id="uimgas" type="hidden" value="'+img[a]+'">\
                                                        </div>\
                                                    </div><div class="tt">\
                                                    <div class="im-title">\
                                                         <div class="txttt">\
                                                            <input type="text" class="uit txttt" placeholder="TItulo">\
                                                         </div>\
                                                    </div></div>\
                                                    <div id="'+uId+'" class="progress" style="display:none;">\
                                                        <img src="images/ajax-loader.gif" />\
                                                    </div>\
                                                    <div class="start tt">\
                                                            <div class="c-i"><div  id="btn-success" class="btn btn-success '+ o +'"><spam>Guardar</spam></div></div>\
                                                            <div class="c-i"><div id="btn-danger" class="btn btn-danger '+ o +'"><spam>Eliminar</spam></div></div>\
                                                     </div>\
                                                 </div>';
                                              
                                              $("#dragAndDropFiles").append(html)
                                              o++
//                                              alert(img[i-a])
                                          
//                                              txt = document.getElementById('a'+a).className;
//                                                txt = txt.replace(/\D/g,'');
//                                                alert(ofil.name)
//                                                alert(txt)
                                              self._startUpload();
                                            
                                    }
                            
                            }
                             
                                        // read selected file as DataURL
                             oReader.readAsDataURL(oFile);
                             
                    }
                    
                    
//                    $("#dragAndDropFiles").append(html);
            }
        
	}

	multiUploader.prototype._read = function(evt){
		if(evt.target.files){
			self._preview(evt.target.files);
			self.all.push(evt.target.files);
		} else 
			console.log("Failed file reading");
	}
	
	multiUploader.prototype._validate = function(format){
		var arr = this.config.support.split(",");
		return arr.indexOf(format);
	}
	
	multiUploader.prototype._dropFiles = function(e){
		e.stopPropagation(); e.preventDefault();
		self._preview(e.dataTransfer.files);
		self.all.push(e.dataTransfer.files);
	}
	
	multiUploader.prototype._uploader = function(file,f){
		if(typeof file[f] != undefined && self._validate(file[f].type) > 0){
			var data = new FormData();
			var ids = file[f].name._unique();
			data.append('file',file[f]);
			data.append('index',ids);
//                        var data = "&domain="+domain+"&url="+url+"&Option=1";
//			$(".dfiles[rel='"+ids+"']").find(".progress").show();
//			$(".dfiles[rel='"+ids+"']").removeClass("car").show();
			$.ajax({
				type:"POST",
				url:this.config.uploadUrl,
				data:data,
				cache: false,
				contentType: false,
				processData: false,
				success:function(rponse){
					$("#"+ids).hide();
					var obj = $(".dfiles").get();
					$.each(obj,function(k,fle){
						if($(fle).attr("rel") == rponse){
                                                       $(fle).slideUp("normal", $(".sta").removeClass("sta"),$(".preview").removeClass("car"),$(".progress").css("display","none"));
						
                                                }
					});
					if (f+1 < file.length) {
						self._uploader(file,f+1);
					}
				}
			});
		} else
			console.log("Invalid file format - "+file[f].name);
	}
	
	multiUploader.prototype._startUpload = function(){
		if(this.all.length > 0){
			for(var k=0; k<this.all.length; k++){
				var file = this.all[k];
				this._uploader(file,0);
			}
		}
	}
	
	String.prototype._unique = function(){
		return this.replace(/[a-zA-Z]/g, function(c){
     	   return String.fromCharCode((c <= "Z" ? 90 : 122) >= (c = c.charCodeAt(0) + 13) ? c : c - 26);
    	});
	}

	this._init();
}

function initMultiUploader(){
	new multiUploader(config);
}
$(document).ready(function(){
	
        $('#btn-success').live( 'click', function(){
            txt = this.className;
            txt = txt.replace(/\D/g,'');
            val= $('#bgfha'+txt+'dertgh #uimgas').val();
            ref='#bgfha'+txt+'dertgh'
            save_img(val,ref);

        })
//        $('#btn-danger').live( 'click', function(){
//            txt = this.className;
//            txt = txt.replace(/\D/g,'');
//
//            val= $('#bgfha'+txt+'dertgh #uimgas').val();
//
//        })
});

function save_img(url,ref){
      var data = "&url="+url;
            $.ajax({
			url: 'class/saveimg.php',
			type: "post",
                        data:data,
			success: function(html){
//                            frm.domain.value='';
//                            frm.url.value='';
                            $(ref).remove();
                            
                            /*Listo*/}
		});
}