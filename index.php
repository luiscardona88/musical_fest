<html>

<head>
<?php require_once("session.php")?>
<?php require_once("header.php")?>
<script src="js/login.js"> </script>

<img src="img/logo3.png"/>
<?php require_once("menu.php")?>
</head>

<body>

<br>
<br>
<form class="form-login" id="form-login">
<input type="hidden" id="id_registro" value="<?php echo isset($_SESSION["id_registro"]) ?$_SESSION["id_registro"] :null?>"/>
<div class="form-group row">
<div class="offset-md-4 col-md-3">
      <img src="img/login_icon.jpg" style="padding-left:15%"/>
      </div>
      </div>
      <br>
      <!--<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>!-->


      <div class="form-group row">
      <div class="offset-md-1 col-md-3"> <label for="inputEmail" class="sr-only">Nombre</label></div>
     
      <div class="col-md-3"><input readonly type="text" id="nombre" class="form-control" placeholder="Nombre" required="" autofocus=""></div>
      </div>
     

      <div class="form-group row">
      <div class="offset-md-1 col-md-3"> <label for="inputEmail" class="sr-only">Direccion</label></div>
     
      <div class="offset-md-1 col-md-3"> Direccion</div>
       <div class="w-100"> </div>
      <div class="offset-md-4 col-md-3">   <textarea readonly id="direccion" class="form-control" style="width:100%"> </textarea></div>
    
      </div>
     
      <div class="form-group row">
      <div class="offset-md-1 col-md-3"> <label for="inputEmail" class="sr-only">Email address</label></div>
     
      <div class="col-md-3"><input readonly type="email" id="correo" class="form-control" placeholder="Email address" required="" autofocus=""></div>
      </div>
     




      <div class="form-group row">
      <div class="offset-md-1 col-md-3"><label for="inputPassword" class="sr-only">Password</label> </div>
      <div class="col-md-3"> <input  readonly  type="password" id="password" class="form-control" placeholder="Password" required=""></div>
      </div>





      <div class="form-group row">
      <div class="offset-md-4 col-md-2">
      <button id="editar" type="button" class="btn btn-primary text-center">Editar</button>
   
      
      </div>
      <div class="col-md-3">
      <button type="button" class="btn btn-danger" id="actualizar"> Actualizar </button>
</div>


      </div>


    </form>


<footer class="">
<img src="img/logo3.png"/>
</footer>

</body>

</html>