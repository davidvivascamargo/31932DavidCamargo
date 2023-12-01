<?php

//if( $_SERVER["REQUEST_METHOD"] == "POST" ){
  $fullName = $_POST["fullName"];
  $userName = $_POST["userName"];
  $email = $_POST["email"];
  $phoneNumber = $_POST["phoneNumber"];
  $password = $_POST["password"];
  $password2 = $_POST["password2"];
  

  echo "fullName: " . $fullName . "<br>";
  echo "userName: " . $userName . "<br>";
  echo "email: " . $email . "<br>";
  echo "phoneNumber: " . $phoneNumber . "<br>";
  echo "password: " . $password . "<br>";
  echo "password2: " . $password2 . "<br>";
//}


/*
$fullName = filter_input(INPUT_POST, 'fullName');
$userName = filter_input(INPUT_POST, 'userName');
$email = filter_input(INPUT_POST, 'email');
$phoneNumber = filter_input(INPUT_POST, 'phoneNumber');
$password = filter_input(INPUT_POST, 'password');
$password2 = filter_input(INPUT_POST, 'password2');
*/

if (!empty($userName)) {
  if (!empty($email)) {
    if (!empty($password)) {
      if (!empty($password2)) {


        $host_db = "localhost:3306";
        $user_db = "root";
        $pass_db = "12345678";
        $db_name = "registros";

        // Create connection
        $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

        if (mysqli_connect_error()) {
          die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
        }
        if ($password != $password2) {
          echo "La contraseña no coincide";
        } else {
          $sql = "INSERT INTO registros (fullname, userName, email, password, password2, phoneNumber)
  values ('$fullName', '$userName','$email','$password','$password2', '$phoneNumber')";
        }
        if ($conexion->query($sql)) {
          echo "El nuevo registro se insertó correctamente";
        } else {
          echo "Error: " . $sql . "
" . $conexion->error;
        }

        $conexion->close();
      } else {
        echo "la contraseña no debe estar vacía";
        die();
      }
    } else {
      echo "el correo electrónico no debe estar vacío";
      die();
    }
  } else {
    echo "El nombre de usuario no debe estar vacío.";
    die();
  }

}

?>