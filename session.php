<?php
@session_start();

if(!isset($_SESSION["id_registro"])):

header("Location:login.php");
endif;



?>