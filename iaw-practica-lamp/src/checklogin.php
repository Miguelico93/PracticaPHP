<?php

session_start();


//Conexion a BD
include_once("config.php");



if (!isset($_SESSION['logincorrecto'])) {
  $_SESSION['logincorrecto'] = 0;
}


//Recibo Variables
$email = $_POST["email"];
$password = $_POST["password"];

//echo md5($password);

//Comprobar variables vacias
if(empty($email) == 1 || empty($password) == 1){
    header('Location: login.php');
    exit;
}

$query= "SELECT * ".
        "FROM users ".
        "WHERE email = ? AND password = ?";

	// insert data to database
	$stmt = mysqli_prepare($mysqli, $query);
	mysqli_stmt_bind_param($stmt, "ss", $email, md5($password));
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);
    mysqli_stmt_free_result($stmt);
	mysqli_stmt_close($stmt);

mysqli_close($mysqli);

if ($resultado->num_rows == 1){
    
    $_SESSION['logincorrecto'] = 1;
    header('Location: panel.php');
}else{
    $_SESSION['logincorrecto'] = 0;
    header('Location: login.php');
}

?>