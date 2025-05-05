<?php
#require_once "./modelos/conexion.php";
require_once "./modelos/registro.modelos.php";
class ControladorRegistro{

    static public function ctrRegistro(){

        if(isset($_POST["registroNombre"])){

            $tabla = "personas";

            $datos = array(
                "pers_nombre" => $_POST["registroNombre"],
                "pers_telefono" => $_POST["registroTelefono"],
                "pers_correo" => $_POST["registroCorreo"],
                "pers_clave" => $_POST["registroPassword"]            

            );

            $respuesta = ModeloRegistro::mdlRegistro($tabla, $datos);

            return $respuesta;

        }

    }

}