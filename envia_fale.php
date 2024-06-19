<?

# alterar a variavel abaixo colocando o seu email

$destinatario = "adrianlocks2013@gmail.com";

$nome = $_REQUEST['nome_usuario'];
$email = $_REQUEST['email_usuario'];
$telefone = $_REQUEST['telefone_usuario'];
$mensagem = $_REQUEST['mensagem_usuario'];

 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "FORMULARIO - PORTFOLIO" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Telefone: " . $telefone . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:thanks.php");


?>
