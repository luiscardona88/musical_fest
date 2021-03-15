<?php
require_once("registrodao.php");
class Facade extends RegistroDAO
{
public function __construct()
{
    parent::__construct();

}

public function lista_admin()
{

    return $this->listaRows();

}
public function nuevoRegistro($param1=array(),$param2=array())
{
   
    return $this->registro_entrada($param1,$param2);
}

public function existeRegistro($param1=array())
{

    return $this->existe($param1);
}

public function getRegistro($parametro_registro=array())
{
    
  return $this->getRow($parametro_registro);

}


public function actualizar_registro($parametro_registro=array())
{
    return $this->updateRow($parametro_registro);

}


}

?>