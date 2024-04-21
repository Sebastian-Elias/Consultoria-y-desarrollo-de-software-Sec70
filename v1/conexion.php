<?php
class Conexion
{
    private $connection;
    private $host;
    private $username;
    private $password;
    private $db;
    private $port;
    private $server;

    public function __construct()
    {
        // Elementos que nos permiten ver detalles
        $this->server = $_SERVER['HTTP_HOST'];
        $this->connection = null;
        $this->port = 3307;
        $this->db = 'ciisa_backend_v1';

        if($this->server == 'localhost'){
            $this->host = 'localhost'; // Asegúrate de definir el host
            $this->username = 'ciisa_backend_v1';
            $this->password = 'l4cl4v3-c11s4';
        }
    }

    // Método para procesar el formulario
    public function procesarFormulario($datosFormulario)
    {
        // Conectar a la base de datos
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->db, $this->port);
        mysqli_set_charset($this->connection, 'utf8');
        
        // Verificar la conexión
        if (!$this->connection) {
            return mysqli_connect_errno();       
        }

        // Obtener datos del formulario
        $nombres = $datosFormulario['nombres'];
        $phone = $datosFormulario['phone'];
        $email = $datosFormulario['email'];
        $rut = $datosFormulario['rut'];
        $comentario = $datosFormulario['comentario'];

        // Preparar la consulta SQL para insertar los datos en la tabla
        $sql = "INSERT INTO contactos (nombres, phone, email, rut, comentario) VALUES (?, ?, ?, ?, ?)";

        // Preparar la sentencia
        $stmt = $this->connection->prepare($sql);

        // Vincular parámetros
        $stmt->bind_param("sssss", $nombres, $phone, $email, $rut, $comentario);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            return "Datos insertados correctamente";
        } else {
            return "Error al insertar datos: " . $this->connection->error;
        }

        // Cerrar la sentencia y la conexión
        $stmt->close();
        $this->connection->close();
    }
}
?>
