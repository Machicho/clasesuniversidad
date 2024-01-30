<?php
    class CRUD {
        private $servidor = 'localhost';
        private $usuario = 'root';
        private $contraseña = '';
        private $baseDeDatos = 'curso';

        private function ConectarBD() {
            $conexion = mysqli_connect($this->servidor, $this->usuario, $this->contraseña, $this->baseDeDatos) or die ("Error al conectarse con la base de datos");
            return $conexion;
        }
        
    
        private function CerrarConexion($conexion) {
            mysqli_close($conexion);
        }

        public function RegistrarUsuario($objeto) {
            $conexion = $this->ConectarBD();
            $insertar = "INSERT INTO matriculados VALUES('$objeto->id', '$objeto->nombre', '$objeto->primer_apellido', '$objeto->segundo_apellido', '$objeto->sexo')";
        
            mysqli_query($conexion, $insertar) or die ("Error al registrar al usuario");

            echo "Datos insertados correctamente";
            
            $this->CerrarConexion($conexion);
        }

        public function EliminarUsuario($id) {
            $conexion = $this->ConectarBD();
            $eliminar = "DELETE FROM matriculados WHERE id = '$id'";

            mysqli_query($conexion, $eliminar) or die ("Error al eliminar el usuario"); 

            echo "Datos eliminados correctamente";

            $this->CerrarConexion($conexion);
        }

        public function ActualizarUsuario($objeto) {
            $conexion = $this->ConectarBD();
            $actualizar = "UPDATE matriculados SET nombre = '$objeto->nombre' WHERE id = '$objeto->id'";

            mysqli_query($conexion, $actualizar) or die ("Error registro no actualizado");

            echo "Registro actualizado correctamente";

            $this->CerrarConexion($conexion);
        }
    }

    class Objeto {}
?>
<button><a href="./index.html">Regresar al inicio</a></button>