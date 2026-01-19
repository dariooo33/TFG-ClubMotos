<?php
function verificarEmail($email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return FALSE;
    }else{  
        return TRUE;
    }

}

function guardarIdUsuario($db, $email){
    $selectID = "SELECT id_usuario from usuario where email ='$email'";
    $resultado = mysqli_query($db, $selectID);
    $fila = mysqli_fetch_assoc($resultado);
    $id = $fila['id_usuario'];
    return $id;
}
?>