<?php

require_once "conexion.php";

class ModeloInventario{
    /*=============================================
    REGISTRO DE PRODUCTOS
    =============================================*/
    static public function mdlRegistro($tabla, $datos):
    string{
        // Prepare the SQL statement to prevent SQL injection
        // and bind the parameters to the statement
        $sql = "INSERT INTO {$tabla} (inve_nombre_producto, inve_cantidad_producto, inve_precio_producto) 
        VALUES (:nombre, :cantidad, :precio)";

        $stmt = Conexion::conectar()->prepare($sql);

        
        $stmt->bindParam(":nombre", $datos["nombreProducto"], PDO::PARAM_STR);
        $stmt->bindParam(":cantidad",$datos["cantidadProducto"], PDO::PARAM_INT);
        $stmt->bindParam(":precio", $datos["precioProducto"], PDO::PARAM_STR);

        $ok = $stmt->execute();
        $stmt->closeCursor();
        return $ok ? "ok" : "error";
    }
}