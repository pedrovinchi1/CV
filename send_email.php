<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitização dos dados recebidos
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

    // Validação
    if (empty($nome) || empty($email) || empty($mensagem)) {
        echo "Todos os campos são obrigatórios.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Endereço de email inválido.";
        exit;
    }

    // Destinatário do email
    $to = "pedrovinchih9982@gmail.com";
    
    // Assunto do email
    $subject = "Contato do site de: $nome";
    
    // Corpo do email
    $body = "Nome: $nome\nEmail: $email\n\nMensagem:\n$mensagem";

    // Cabeçalhos do email (sempre use um e-mail válido no campo From)
    $headers = "From: contato@seudominio.com\r\n"; // Use o endereço de e-mail do seu site
    $headers .= "Reply-To: $email\r\n";  // O e-mail do usuário vai no Reply-To
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Envia o email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email enviado com sucesso.";
    } else {
        echo "Erro ao enviar email. Por favor, tente novamente mais tarde.";
    }
} else {
    echo "Método de envio inválido.";
}
?>