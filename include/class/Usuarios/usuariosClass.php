<?php
    include_once(RAIZ_APLICACION."/functions.php");

    class usuariosClass{
        function listadoUsuarios(){
            $conexionClass = new Tool();
            $conexion = $conexionClass->conectar();

            mysqli_query($conexion, "SET NAMES 'utf8'");
            mysqli_set_charset($conexion, "utf8");

            if(!$conexion){
                die("Conexion fallida por: ".mysqli_connect_error());
            }
            else{
                
            }
        
            $sql = "SELECT * FROM usuarios;";
        
            return $resultado = mysqli_query($conexion, $sql);
        }
    }
?>