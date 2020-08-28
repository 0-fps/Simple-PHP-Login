<?php


  $connection = mysqli_connect("localhost", "root", "", "base"); // credentials of our database

  $username = $_POST['username'];
  $password = $_POST['password'];


  $sql = "SELECT usuario, pass FROM usuarios WHERE usuario = '$username' and pass = '$password'"; // syntax SQL for our database
  $result = mysqli_query($connection, $sql); // Request the data from our database 
  $array = mysqli_fetch_array($result); // Save the data in $array

  if($array['usuario'] == $username && $array['pass'] == $password){ // if login is right or not
    header("location: correcto.png"); // Right Login
  }else{
    header("location: incorrecto.png"); // Wrong Login
  }

 ?>
