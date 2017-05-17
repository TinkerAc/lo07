<?php


function form_begin($class,$action){
	echo"<form action='$action' name='$class' method='POST'>";	
}
function form_end(){
    echo"</form>";
}
function form_select($label,$name,$multiple,$size,$hashtable){
    echo"<p>";
    echo"<label>$label</label>";
    if($multiple){
    	printf("<select name='%s[]' multiple='multiple' size='%s'/>\n",$name,$size);
    }else{
        printf("<select name='%s' size='%s'/>\n",$name,$size);
    }
    foreach($hashtable as $key => $value){
    	printf("<option value='%s'>%s</option>",$key,$value);
    }
    echo"</select>";
    echo"</p>";
}

function form_input_text($label,$name,$size,$value){
     echo"<p>";
     echo"<label>$label</label>";
     echo"<input type='text' name='$name' size='$size' value='$value' />";
     echo"</p>";
}
function form_input_password($label,$name,$size){
    echo"<p>";
    echo"<label>$label</label>";
    echo"<input type='password' name='$name' size='$size'/>";
    echo"</p>";
}

function form_input_checkbox($name,$checked,$label){
    $select = ($checked?"checked='checked'":"");
    printf("<input type='checkbox' name='%s' %s>%s</input><br/>",$name,$select,$label);
}

function form_input_radio($name,$checked,$value,$label){
    $select = ($checked?"checked='checked'":"");
    printf("<input type='radio' name='%s' %s>%s</input><br/>",$name,$select,$label);
}

function form_input_submit($name,$value){
    printf("<input type='submit' name='%s' value='%s'>",$name,$value);
}

function form_input_reset($value){
 printf("<input type='reset' value='%s'/>\n",$value);
}
 
function form_textarea($label,$name,$value){
    printf("<label>%s</label>",$label);
    printf("textarea name='%s'>%s</textarea>",$name,$value);
}

// function input_button(){
//     printf("<input type='button' name");


// }
// function table($tb){



}
?>