
<style>
*{
  font-family: sans-serif;
}
#titulo{
  font-size: 60px;

  display:block;
  background-color: #47B600;

}
input[type="text"], input[type="password"]{
  outline: none;
  padding: 20px;
  display: block;
  width: 300px;
  border-radius: 3px;
  border: 1px solid #000000;
  margin: 20px auto;
}
input[type="submit"]{
  padding: 10px;
  color: #fff;
  background: #47B600;
  width: 320px;
  margin: 20px auto;
  margin-left: 450px;
  margin-top: 0;
  border: 0;
  border-radius: 3px;
  cursor: pointer;
}
input[type="submit"]:hover{
  background-color: #64FF00;
}


</style>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PITO</title>
  </head>
  <body>
      <p id="titulo">Iniciar Sesion</p>
        <form action="process.php" method="post">
          <input type="text" name="username" placeholder="Ingresa tu nombre">
          <input type="password" name="password" placeholder="Ingresa tu contraseña">
          <input type="submit" value="Login">
        </form>
  </body>
</html>
