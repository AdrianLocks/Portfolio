<?php
    $servidor = "mysql.hostinger.com.br";
    $usuario = "u662616604_1Iw8P";
    $senha ="x]5kr8GpS^?F";
    $dbname="u662616604_nyil6";

    //criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    //if (!$conn) {
   // die("Connection failed: " . mysqli_connect_error());
   // }
    //echo "Connected successfully";
    //mysqli_close($conn);         // da erro fecha o BD antes de registrar//
?>