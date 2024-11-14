<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Destinatário do email
    $to = "pedrovinchih9982@gmail.com";
    // Assunto do email
    $subject = "Contato do site de: $nome";
    // Corpo do email
    $body = "Nome: $nome\nEmail: $email\n\nMensagem:\n$mensagem";

    // Cabeçalhos do email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Envia o email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email enviado com sucesso.";
        echo "Você receberá uma cópia deste email";
    } else {
        echo "Erro ao enviar email. Por favor, tente novamente mais tarde.";
    }
} else {
    echo "Método de envio inválido.";
}
?>
