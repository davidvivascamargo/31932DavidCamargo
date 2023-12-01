<?php
$userName = filter_input(INPUT_POST, 'userName');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)){
if (!empty($password)){
$host_db = "localhost:3306";
$user_db = "root";
$pass_db = "12345678";
$db_name = "registros";


// Crear Conexión
$conexion = new mysqli ($host_db, $user_db, $pass_db, $db_name);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO user (username, password)
  values ('$username','$password')";
  if ($conexion->query($sql)){
    echo "El nuevo registro se insertó correctamente";
  }
  else{
    echo "Error: ". $sql ."
". $conexion->error;
  }
  $conexion->close();
}
}
else{
  echo "La contraseña no debe estar vacía";
  die();
}
 }
 else{
  echo "El nombre de usuario no debe estar vacío";
  die();
 }
 if($username !=''&& $password !=''){
// Para redirigir el formulario en una página en particular
header("Location:https://C:\Users\david\OneDrive\Documentos\DESARROLLO\WS_ProgramacionWeb\Proyecto\Login.html");
}
?>