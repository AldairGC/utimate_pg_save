<?php
class DB {
    //Propiedades
    private $servername = "sql306.tonohost.com";
    #private $servername = "localhost";
    private $dbname = "ottos_26411898_savebd";
    #private $dbname = "savebd";
    private $conn;

    function __construct($username, $password) {
        $this->conn = new mysqli($this->servername, $username, $password, $this->dbname);
        $this->conn->set_charset("utf8");
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    function __destruct() {
        $this->conn->close();
    }

    function insert_user($nombre, $pass, $correo){
        session_start();
        $sql = "SELECT nombreUsuario, correo, contraseña FROM login WHERE correo = '$correo' || nombreUsuario = '$nombre'";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0)
        {
            $validar = false;
        }else{
            $sql = "INSERT INTO login (nombreUsuario, contraseña, correo) VALUES ('$nombre', md5('$pass'), '$correo')";
            $result = $this->conn->query($sql);            
            $_SESSION['user'] = $nombre;
            $validar = true;
        }
        return $validar;
    }

    function validar_user($nombre, $passw){
        session_start();
        $sql = "SELECT nombreUsuario, contraseña FROM login WHERE nombreUsuario = '$nombre' and contraseña = md5('$passw')";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0)
        {
            $_SESSION['user'] = $nombre;
            $_SESSION['finish'] = $nombre;
            $validar = true;
        }
        else {   
            $validar = false;
        }
        return $validar;
    }

    function NewPass($passA){
        session_start();
        if(isset($_SESSION['user'])){
            $session = $_SESSION['user'];
            $sqlC = "SELECT * FROM login WHERE nombreUsuario = '$session'";
            $result = $this->conn->query($sqlC);
            if($result->num_rows > 0){
                $sqlA = "UPDATE login SET contraseña = md5('$passA') WHERE nombreUsuario = '$session'";
                $result = $this->conn->query($sqlA);
                if($result) {
                    $validar = true;
                }                
            }else{
                $validar = false;
            }       
        }else{
            $validar = false;
        }
        return $validar;
    }

    function DatasUser($nombre, $aPaterno, $aMaterno, $Fnacimiento, $Enacimiento , $curp, $rfc){
        session_start();
        $user = $_SESSION['user'];        
        $sql = "SELECT idLogin, contraseña, nombreUsuario FROM Login where nombreUsuario = '$user'";
        $result = $this->conn->query($sql);
        $row = mysqli_fetch_array($result);
        if($result->num_rows > 0){
            $id = $row['idLogin'];
            $sqlA = "INSERT into usuario VALUES($id,'$nombre','$aPaterno','$aMaterno','$Fnacimiento','$Enacimiento','$curp','$rfc',$id)";
            $result = $this->conn->query($sqlA);
            $validar = true;
        }
        else{              
            $validar = false;
        }
        return $validar;
    }

    function Dcontactos($tel1, $tel2, $email){
        session_start();
        $_SESSION['contacto'] = $email;
        $user = $_SESSION['user'];
        $sql = "SELECT idLogin FROM Login WHERE nombreUsuario = '$user'";
        $result = $this->conn->query($sql);
        $array = mysqli_fetch_assoc($result);
        $id = $array['idLogin'];
        if($result->num_rows > 0){
            $sql = "INSERT contacto VALUES($id,'$tel1','$tel2','$email',$id)";
            $result = $this->conn->query($sql);
            if($result){
                $validar = true;
            }
        }else{
            $validar = false;
        }    
        return $validar;
    }
    function Domicilio($calle, $numeroE, $colonia, $codigoP){
        session_start();        
        $_SESSION['domicilio'] =  $calle;
        $user = $_SESSION['user'];
        $sql = "SELECT idLogin FROM Login WHERE nombreUsuario = '$user'";
        $result = $this->conn->query($sql);
        $array = mysqli_fetch_assoc($result);
        $id = $array['idLogin'];
        if($result->num_rows > 0){
            $sql = "INSERT domicilio VALUES($id, '$calle', '$numeroE', '$colonia', '$codigoP', $id)";
            $result = $this->conn->query($sql);
            if($result){                
                $validar = true;
            }
        }else{
            $validar = false;
        }
        return $validar;
    }
    function CuentaB($Ncuenta, $Nbanco, $Clave, $Beneficiario){
        session_start();
        $_SESSION['cuentaB'] = $Ncuenta;
        $_SESSION['finish'] = $Ncuenta;
        $user = $_SESSION['user'];
        $sql = "SELECT idLogin FROM Login WHERE nombreUsuario = '$user'";
        $result = $this->conn->query($sql);
        $array = mysqli_fetch_assoc($result);
        $id = $array['idLogin'];
        if($result->num_rows > 0){
            $sql = "INSERT cuentabancaria VALUES($id, '$Ncuenta', '$Nbanco', md5('$Clave'), '$Beneficiario', $id)";
            $result = $this->conn->query($sql);
            if($result){                
                $validar = true;
            }
        }
        else{        
            $validar = false;
        }
        return $validar;
    }    
}
?>

