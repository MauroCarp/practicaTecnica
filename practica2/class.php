<?php

class Mail {
    /**
    * Indica si la conexión con el servidor de correo requiere autenticación
    * @var <boolean>
    */
    private $authentication;
    /**
    * Indica el host donde se realizará la conexión con el servidor de correo
    * @var <string>
    */
    private $host;
    /**
    * Indica el usuario que se empleará en la autenticación con el servidor de correo
    * @var <string>
    */
    private $user;
    /**
    * Indica el password que se empleará en la autenticación con el servidor de correo
    * @var <string>
    */
    private $password;

    public function __construct($accion,$usuario,$pass,$server,$auth){
        
        $this->accion = $accion;
        $this->user = $usuario;
        $this->password = $pass;
        $this->host = $server;
        $this->authentication= $auth;

    }

    private function nuevo(){

        $user = $this->user;

        if($user == 'registro' AND $this->password == 'r3g1str0' AND $this->authentication == true AND $this->host == '192.168.1.66'){
            
            $subject = 'Nuevo Registro';
            
            $body = "<p>Bienvenido <strong>$this->user</strong>,<br>
            su registro se ha realizado con éxito.<p>
            <p>Esperemos que nustros servicios sean de su agrado</p>
            <p>Un saludo</p>";
            
            return $this->sendEmail($user,$subject,$body);
        
        }else{

            throw new Exception("No se ha podido realizar esta accion");

        }

    }

    private function recuperar(){

        if($this->host == '192.168.1.22'){
        
            $subject = 'Recuperar Datos de Sesion';
            
            $body = "<p>Estimad@ usuario,
            le recordamos que sus datos de acceso son los siguientes:</br>
            Usuario:<strong>Usuario</strong></br>
            Password:<strong>pasSWorD1234</strong></br>
            Un saludo.</p>";

            return $this->sendEmail('Usuario',$subject,$body);

        }


    }

    private function baja(){

        $user = $this->user;

        if($user == 'usuario' AND $this->password == 'pAss12345' AND $this->authentication == true AND $this->host == '192.168.33'){
            
            $subject = 'Baja de Registro';
            
            $body = "<p>Hola <strong>$this->user</strong>,<br>
            lamentamos que tengas que despedirte.<p>
            <p>Esperemos que nustros servicios hayan sido de su agrado</p>
            <p>Un saludo</p>";
            
            return $this->sendEmail($user,$subject,$body);
        
        }else{

            throw new Exception("No se ha podido realizar esta accion");

        }

    }
    
    public function validarAccion(){

        switch ($this->accion) {
            case 'nuevo':
                    $this->nuevo();
                break;

            case 'recuperar':
                $this->recuperar();
                break;

            case 'baja':
                $this->baja();
                break;
            
            default:
                # code...
                break;
        }
        

    }

    /**
    * Envia el email
    * @param <string> $to Es la dirección de email del destinatario
    * @param <string> $subject Es el asunto del mensaje
    * @param <string> $body Es el cuerpo del mensaje
    * @param <boolean> $is_html Indica si el cuerpo del mensaje está en formato html
    * @param <array> $para_cc Un array de direcciones de email para copia Cc
    * @param <array> $para_bcc Un array de direcciones de email para copia Bcc
    * @return <boolean> Devuelve true si se envia el email y lanza una excepción en caso de fallo
    */

    private function sendEmail($to, $subject, $body, $is_html=false, Array $para_cc=array(), Array
    $para_bcc=array()){
        //... Envia el email y devuelve true si todo ha ido bien o lanza una excepción si falla
    }
}
?>