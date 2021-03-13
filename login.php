<html>

<head>
<?php require_once("header.php")?>
<img src="img/login.png"/>
<?php require_once("menu.php")?>
</head>
<body>

<br>
<br>
<form class="form-login" id="form-login">
<div class="form-group row">
<div class="offset-md-4 col-md-3">
      <img src="img/login_icon.jpg" style="padding-left:15%"/>
      </div>
      </div>
      <br>
      <div class="form-group row">
      <div class="offset-md-1 col-md-3"> <label for="inputEmail" class="sr-only">Email address</label></div>
     
      <div class="col-md-3"><input type="email" id="email" class="form-control" placeholder="Email address" required="" autofocus=""></div>
      </div>
     
      <div class="form-group row">
      <div class="offset-md-1 col-md-3"><label for="inputPassword" class="sr-only">Password</label> </div>
      <div class="col-md-3"> <input type="password" id="password" class="form-control" placeholder="Password" required=""></div>
      </div>


      <div class="form-group row">
      <div class="offset-md-4 col-md-3">
      <button class="btn btn-lg btn-dark btn-block" type="submit" id="login">Sign in</button>
      
      </div>
      </div>


    </form>

<footer class="">
<img src="img/login.png"/>
</footer>

</body>

</html>