<html>

<head>

<?php require_once("header.php")?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"> </script>

<script src="js/admin.js"> </script>

<img src="img/logo_admin.png"/>
<?php require_once("session.php")?>
<?php require_once("menu.php")?>
</head>

<body>

<br>
<br>
<form class="form-login" id="form-login">
<table id="tabla_gestion">
 <thead class="thead-light">
                    <tr>
                        <th>id</th>
                        <th >Edad</th>
                        <th >Nombre</th>
                        <th >Direccion</th>
                        <th >Correo</th>
                    </tr>
                </thead>

</table>


    </form>


<footer class="fixed-bottom">
<img src="img/logo_admin.png"/>
</footer>

</body>

</html>