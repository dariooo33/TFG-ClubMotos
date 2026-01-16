<?php
function verificarEmail($email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return FALSE;
    }else{  
        return TRUE;
    }

}


?>