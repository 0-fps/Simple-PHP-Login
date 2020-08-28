<?php


  $connection = mysqli_connect("localhost", "root", "", "base");

  $username = $_POST['username'];
  $password = $_POST['password'];


  $sql = "SELECT usuario, pass FROM usuarios WHERE usuario = '$username' and pass = '$password'";
  $result = mysqli_query($connection, $sql);
  $array = mysqli_fetch_array($result);

  if($array['usuario'] == $username && $array['pass'] == $password){
    header("location: correcto.png");
  }else{
    header("location: incorrecto.png");
  }

 ?>
