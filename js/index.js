

$(function(){
 $("#netId,#mdp").keyup(function(){
        if($(this).parent().find(".success").length > 0){
        	$(this).parent().find(".success").remove();
        }
        if($(this).parent().find(".error").length > 0){
        	$(this).parent().find(".error").remove();
        }

       if(/^\w{6,20}$/.test($(this).val())){

          $(this).parent().append("<span class='success'>ok</span>");
         }else{
         	$(this).parent().append("<span class='error'>retype</span>");
         };
 });
 $(".submit").click(function(){
     $("#netId").triggerHandler("keyup");
     $("#mdp").triggerHandler("keyup");
     if($("#user_form").find(".error").length > 0){
     	return false;
     }
 });


});