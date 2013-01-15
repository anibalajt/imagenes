//         $(document).ready(function() {
//            $('a.activ').click(function(){
//                preventDefault(panel());
//                
//               
////                $('#output').addClass('out');
////                $('#output').css('display','block');
////                $('.content').css('display','none');
////                var src=this.src;
////                $('#o_p_c-view').attr("src",src);
//            });            
//         }); 
function panel()
{	
    	
$.ajax({
type: "POST",
url: "upload/index.php",
data: {"val":"upload"},
cache: false,
success: function(html){
$(".panel-upload").prepend(html);
}
});
}