<?php
session_start();
?>
<style>
  @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #FF4500;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #00000;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #f56403;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #FF4500, #f56403);
  background: -moz-linear-gradient(right,  #FF4500, #f56403);
  background: -o-linear-gradient(right,  #FF4500, #f56403);
  background: linear-gradient(to left, #FF4500, #f56403);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
</style>

<div class="login-page">
  <div class="form">
    <h1><a class="navbar-brand" href="index.php"><img src="/amigossolidarios/adm/img/icon.png" alt="logo" style="width: 50%;"></a></h1>
    <form class="login-form">
      <input  placeholder="Usuario" id="usuario" name="usuario" required>  
      <input type="password" placeholder="Senha" id="senha" name="senha"required>
      <button type="button" onclick="Acessar();">Entrar</button>
    </form>
  </div>
</div>
<script src="adm/js/jquery-3.5.1.min.js"></script>
<script src="adm/js/Acessar.js"></script>