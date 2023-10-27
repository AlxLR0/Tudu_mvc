<?php
    include_once("./app/login/model/registro.model.php");

    class UsuariosRepository{
        private static $_intance = [];
        
        private mysqli $mysqli;

        private function __construct() {
            $host = $_ENV['DB_HOST'];
            $user = $_ENV['DB_USER'];
            $password = $_ENV['DB_PASSWORD'];
            $database = $_ENV['DB_DATABASE'];
           
            $this->mysqli = new mysqli($host, $user, $password, $database);
        
        }
        
        public static function getInstance(): UsuariosRepository {
            $class = static::class;
            if ( !isset( $_intance[ $class ] ) ){
                $_intance[ $class ] = new static();
            }

            return $_intance[ $class ];
        }

        public function getMysqli():mysqli{
            return $this->mysqli;
        }

        public function isCorreoRegistrado($correo): bool {
            $query = "SELECT COUNT(*) FROM usuarios WHERE correo = ?";
            $sentencia = $this->mysqli->prepare($query);
            $sentencia->bind_param("s", $correo);// Bind (vincular) el parámetro $correo a la consulta SQL
            $sentencia->execute();
            $sentencia->bind_result($count);// Bind  el resultado de la consulta a la variable $count
            $sentencia->fetch(); // Obtener el resultado de la consulta
            $sentencia->close();// Cerrar la consulta preparada
        
            // Si $count es mayor que 0, significa que el correo ya está registrado
            return $count > 0;
        }

        public function validarLogin($correo, $contrasena): bool {
            $query = "SELECT contrasena FROM usuarios WHERE correo = ?";
            $sentencia = $this->mysqli->prepare($query);
            $sentencia->bind_param("s", $correo);
            $sentencia->execute();
            $sentencia->bind_result($contrasena_bd);
            $sentencia->fetch();
            $sentencia->close();
        
            // Verificar si la contraseña ingresada coincide con la almacenada en la base de datos
            return $contrasena === $contrasena_bd;
        }
        
        


        public function saveNewUser(Registro $user): bool{
            $this->mysqli->begin_transaction();

            $query = "INSERT INTO usuarios (correo, contrasena) VALUES (?,?)";
            $sentencia = $this->mysqli->prepare($query);
            
            $correo =$user->getCorreo();
            $contrasena=$user -> getContrasena();

            $sentencia->bind_param("ss",$correo,$contrasena );

            if (!$sentencia->execute()) {
                $this->mysqli->rollback();
                return false;
            }

            $this->mysqli->commit();
            return true;
        }


    }