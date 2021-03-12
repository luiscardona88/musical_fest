<html>

<head>


<?php require_once("header.php");?>
<img src="img/logo3.png"/>
<?php require_once("menu.php")?>

</head>

<body>

<br>
<br>
<div style="">
<form class="form-signin" id="form-signin" >
<div class="form-group row">
<div class="offset-md-4 col-md-3">
      <img src="img/login_icon.jpg" style="padding-left:15%"/>
      </div>
      </div>
      <br>
      <!--<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>!-->

      <div class="form-group row">
      <div class="offset-md-1 col-md-3"> <label for="inputEmail" class="sr-only">Nombre</label></div>
     
      <div class="col-md-3"><input type="text" id="nombre" class="form-control" placeholder="Nombre" required="" autofocus=""></div>
      </div>

        
      <div class="form-group row">
      <div class="offset-md-1 col-md-3"> <label for="inputEmail" class="sr-only">Edad</label></div>
     
      <div class="col-md-3"><input type="number" id="edad" class="form-control" placeholder="Edad" required="" autofocus=""></div>
      </div>

      <div class="form-group row">
      <div class="offset-md-1 col-md-3"> <label for="inputEmail" class="sr-only">Email address</label></div>
     
      <div class="col-md-3"><input id="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus=""></div>
      
      </div>

      <div class="form-group row">
      <div class="offset-md-5 col-md-3">
      <p>Direccion:</p>
      </div>
<div class="w-100"> </div>

<div class="offset-md-4 col-md-8"> <textarea id="direccion" class="form-control" style="width:35%" placeholder="Direccion"> </textarea> </div>

      </div>
      
      


      <div class="form-group row">
      <div class="offset-md-1 col-md-3"><label for="inputPassword" class="sr-only">Password</label> </div>
      <div class="col-md-3"> <input name="password" type="password" id="password" class="form-control" placeholder="Password" required=""></div>
      </div>



<!--
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div> !-->


      <div class="form-group row">
      <div class="offset-md-4 col-md-3">
      <button class="btn btn-lg btn-dark btn-block" type="submit" id="submit">Crear</button>
     
      </div>
      </div>


    </form>
</div>

<footer class="">
<img src="img/logo3.png"/>
</footer>

</body>

</html>