<?php
session_start();
require_once("Facade.php");

$rutas_posts = array("nuevoRegistro", "login", "actualizar_registro");
$rutas_gets = array("login_detalles","lista_admin");
$http_request = ($_REQUEST["object_send"]) ?? null;
$session = ($_REQUEST["session_fin"]) ?? null;

if($session and $session>=1):
    session_destroy();
    echo "<script>window.location.href='../login.php' </script>";
endif;


$class_method = null;

$nombre = $http_request["nombre"] ?? null;
$edad = $http_request["edad"] ?? null;
$correo = $http_request["correo"] ?? null;
$direccion = $http_request["direccion"] ?? null;
$password = $http_request["password"] ?? null;
$id= $http_request["id"] ?? null;
$jquery_datable=($_REQUEST["jquery_datable"]) ?? null;
$facade = null;


$facade = new Facade();
if (!empty($http_request)) :
    $class_method = $http_request["class_method"];
   

    elseif($jquery_datable==1):
        $class_method="lista_admin";
endif;

if ($_POST and  in_array($class_method, $rutas_posts)) {



    switch ($class_method) {


        case "nuevoRegistro":

            $parametro_registro = array("nombre" => $nombre, "edad" => $edad, "correo" => $correo, "direccion" => $direccion);
            $parametro_password = array("password" => $password);
            echo $facade->registro_entrada($parametro_registro, $parametro_password);
            break;



        case "login":

            $parametro_registro = array("correo" => $correo, "password" => $password);
            $result = $facade->existeRegistro($parametro_registro);
            if(!empty($result)) $_SESSION["id_registro"]=$result;
            echo $result;
            break;

        case "actualizar_registro":

             
            $parametro_registro = array("id"=>$id,"nombre"=>$nombre,"direccion"=>$direccion,"correo" => $correo, "password" => $password);
            $result = $facade->actualizar_registro($parametro_registro);
            echo $result;
            break;
			
			default:
			//404 NOT FOUND
			
			break;
    }
} else if ($_GET and  in_array($class_method, $rutas_gets)) {


    switch ($class_method) {
        case "login_detalles":
           
            $parametro_registro = array("id_registro" => $id);
            $result = $facade->getRegistro($parametro_registro);
            echo json_encode($result);
            break;


            case "lista_admin":
              
            $result = $facade->lista_admin();

            echo json_encode(array("data"=>$result));
           
            break;

          default:
			//404 NOT FOUND
			
			break;
    }
}
