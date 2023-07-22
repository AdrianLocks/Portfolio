<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome_usuario', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email_usuario', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone_usuario', FILTER_SANITIZE_NUMBER_INT);
$mensagem = filter_input(INPUT_POST, 'mensagem_usuario', FILTER_SANITIZE_STRING);
//echo "Nome: $nome <br>";
//echo "Telefone: $tel <br>";

                    

$result_portfolioform = "INSERT INTO portfolioform(nome_usuario, email_usuario, telefone_usuario, mensagem_usuario, created) VALUES ('$nome','$email','$telefone','$mensagem', NOW())";
$resultado_portfolioform = mysqli_query($conn, $result_portfolioform);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:green;text-align:center;position:center'> Dados salvos!Retorno em breve! </p>";
    header("Location: index.php#contato");
  

}else{
    $_SESSION['msg'] = "<p style='color:red;'> Erro! Dados não salvos! </p>";
    header("Location: index.php#contato");
}


                    