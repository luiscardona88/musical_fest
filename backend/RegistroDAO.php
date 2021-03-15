<?php
require_once("conexion.php");
class RegistroDAO extends Conexion

{

    public function __construct()
    {
      parent::__construct();

    }

    public function listaRows()
{
    
    $this->setQuery("SELECT reg.id,reg.edad,reg.nombre,reg.direccion,reg.correo
    FROM tb_password p INNER JOIN tb_registro reg ON reg.id=p.id_registro ");
    return  $this->getAllResult();

}
public function updateRow($param1=array())
{
    $this->setQuery("UPDATE tb_registro SET direccion=:direccion,nombre=:nombre,correo=:correo WHERE id=:id");
    return  $this->getUpdateDB($param1);

}
    public function getRow($param1=array())

    {
       
        $this->setQuery("SELECT * FROM tb_password p INNER JOIN tb_registro reg ON reg.id=p.id_registro WHERE reg.id=:id_registro");
        return  $this->getRowDB($param1);
        
    }
    public function registro_entrada($param1=array(),$param2=array())
    {
     
       
        $affected=0;
        if(count($param1)>0 and count($param2)>0):
        
        $affected+=$this->InitTransac($param1,$param2);
        
        return $affected;
        else:

            return 0;
    endif;
    }
    public function nuevo($param1=array())
    {
        
        $this->setQuery("INSERT INTO tb_registro (nombre, correo) VALUES (?, ?)");
        $affected=0;
        if(count($param1)>0):
        
        $affected+=$this->affectedRows($param1);
    
        return $affected;
        else:

            return 0;
    endif;
        

    }
    public function getLista()
    {

        $this->setQuery("SELECT * FROM tb_registro");
     return  $this->getResult();


    }

    public function existe($param1)
    {
        $this->setQuery("SELECT reg.ID AS existe  FROM tb_password p INNER JOIN tb_registro reg ON reg.id=p.id_registro WHERE p.password=:password AND reg.correo=:correo");
        return  $this->exists($param1);
    }


}



?>