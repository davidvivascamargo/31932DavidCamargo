<?php

$fullName = filter_input(INPUT_POST, 'fullName');
$userName = filter_input(INPUT_POST, 'userName');
$email =filter_input(INPUT_POST,'email');
$phoneNumber =filter_input(INPUT_POST,'phoneNumber');
$password = filter_input(INPUT_POST, 'password');
$password2 =filter_input(INPUT_POST, 'password2');

if (!empty($userName)){
if (!empty($email)){
if (!empty($password)){
if (!empty($password2)){


$host_db = "localhost:3306";
$user_db = "root";
$pass_db = "12345678";
$db_name = "registros";

// Create connection
$conexion = new mysqli ($host_db, $user_db, $pass_db, $db_name);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
if($password!=$password2)
  {
	  echo "La contraseña no coincide";
  }
else{
$sql = "INSERT INTO user (userName, email, password, password2)
  values ('$userName','$email','$password','$password2')";
}
  if ($conexion ->query($sql)){
    echo "El nuevo registro se insertó correctamente";	
  }
  else{
    echo "Error: ". $sql ."
". $conexion ->error;
  }
  
  $conexion ->close();
}
else
{
  echo "la contraseña no debe estar vacía";
  die();
}
}
else
{
  echo "el correo electrónico no debe estar vacío";
  die();
}
 }
 else
 {
  echo "El nombre de usuario no debe estar vacío.";
  die();
 }
}

 ?>