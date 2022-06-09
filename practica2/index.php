<?php

include 'class.php';

if(!empty($_POST)){

    
    if(isset($_POST['btnNuevo'])){

        $mail = new Mail('nuevo',$_POST['user'],$_POST['pass'],'192.168.1.66',true);
        
        $mail->validarAccion();
        
    }
    
    if(isset($_POST['btnRecuperar'])){

        $mail = new Mail('recuperar',null,null,'192.168.1.22',false);
        
        $mail->validarAccion();
        
    }
    
    if(isset($_POST['btnBaja'])){

        $mail = new Mail('baja',$_POST['user'],$_POST['pass'],'192.168.33',true);

        $mail->validarAccion();
        
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de mail</title>
</head>
<body>
    <form method="post">
        <input type="text" name="user" placeholder="Usuario">
        <input type="password" name="pass" placeholder="Password">
        <button type="submit" name="btnNuevo">Ingresar Registro</button>
        <button type="submit" name="btnRecuperar">Recordar Password</button>
        <button type="submit" name="btnBaja">Dar Baja</button>
    </form>
</body>
</html>