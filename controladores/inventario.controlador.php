<?php
require_once "./modelos/inventario.modelo.php";

class ControladorInventario{
    /*=============================================
    REGISTRO DE PRODUCTOS
    =============================================*/
    static public function ctrInventario()
    {
        if (isset($_POST["nombreProducto"])) {
            $tabla = "inventarios";
            $datos = array(
                "nombreProducto" => $_POST["nombreProducto"],
                "cantidadProducto" => $_POST["cantidadProducto"],
                "precioProducto" => $_POST["precioProducto"],

            );  
            $respuesta = ModeloInventario::mdlRegistro($tabla, $datos);

            return $respuesta;
        }
    }

}