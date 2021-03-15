<?php
class Conexion
{

    private $query;
    private  $conn;
    public function getQuery()
    {

     return $this->query;

    }

    public function setQuery($query_param)
    {

        $this->query=$query_param;

    }
  public function __construct()
  {
    try {
        $servername = "localhost";
    $username = "root";
    $password = "";
      $this->conn = new PDO("mysql:host=$servername;dbname=bd_musical", $username, $password);
   
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
    } catch(PDOException $e) {
     
    }

  }  
    
  public function InitTransac($param1=array(),$param2=array())
  {


    try
    {
        $affected=0;
        $this->conn->beginTransaction();
        $sentencia = $this->conn->prepare("INSERT INTO tb_registro (nombre,correo,direccion,edad) VALUES (?,?,?,?)");
        $sentencia->bindParam(1, $nombre);
        $sentencia->bindParam(2, $correo);
        $sentencia->bindParam(3, $direccion);
        $sentencia->bindParam(4, $edad);

        $nombre = $param1["nombre"];
        $correo = $param1["correo"];
        $direccion = $param1["direccion"];
        $edad = $param1["edad"];
        

        $affected+=$sentencia->execute();
         
        $last_id=$this->conn->lastInsertId();

        $sentencia = $this->conn->prepare("INSERT INTO tb_password (id_registro, password) VALUES (?, ?)");
        $sentencia->bindParam(1, $id_registro);
        $sentencia->bindParam(2, $password);
        $id_registro = $last_id;
        $password = hash('sha256',$param2["password"]);
        

        $affected+=$sentencia->execute();


    
    $this->conn->commit();
    $this->closeConexion();
    return 1;

   
    
    
    }
    catch(Exception $ex)
    {
    $this->conn->rollBack();
     echo $ex->getMessage();


    }
        

  }

  public function affectedRows($param=array())
  {

    try
    {
       
        $sentencia = $this->conn->prepare($this->getQuery());
        $sentencia->bindParam(1, $nombre);
        $sentencia->bindParam(2, $correo);
        $nombre = $param["nombre"];
        $correo = $param["correo"];
        $sentencia->execute();


    $resultado=$sentencia->rowCount();
    $this->closeConexion();

    return $resultado;
    
    
    }
    catch(Exception $ex)
    {
     echo $ex->getMessage();


    }
        

  }
  
public function getUpdateDB($param=array())
{
   // $edad = $param["edad"];
    $nombre = $param["nombre"];
    $direccion = $param["direccion"];
    $correo = $param["correo"];
    $id= $param["id"];
    $sentencia = $this->conn->prepare($this->getQuery());
    return $sentencia->execute(array("nombre"=>$nombre,"direccion"=>$direccion,"correo"=>$correo,"id"=>$id));


}
  public function getRowDB($param=array())
  {

   
    try
    {
        $correo = $param["id_registro"];
      
      $sentencia = $this->conn->prepare($this->getQuery());
      $sentencia->execute(array("id_registro"=>$correo));
      
      $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
      
      
      $this->closeConexion();

      return $resultado;
    }

    catch(Exception $ex)
    {
        echo $ex->getMessage();

    }
  
  }
  public function getAllResult()
  {
    try
    {
      $sentencia = $this->conn->prepare($this->getQuery());
      $sentencia->execute();
      
      $resultado = $sentencia->fetchAll();
     
      $this->closeConexion();

      return $resultado;
    }

    catch(Exception $ex)
    {
        echo $ex->getMessage();

    }
  
  }

  public function exists($param=array())
  {
      
    $sentencia = $this->conn->prepare($this->getQuery());

    $sentencia->bindParam(1, $correo);
    $sentencia->bindParam(2, $password);

    $correo = $param["correo"];
    $password =  hash('sha256',$param["password"]);
    

   
    
    $sentencia->execute(array("correo"=>$correo,"password"=>$password));

    $row = $sentencia->fetch(PDO::FETCH_ASSOC);

    $resultado=$row['existe'];
  
    $this->closeConexion();

    return $resultado;

  }
  public function closeConexion()
  {
      $this->conn=null;
  
  }
}
