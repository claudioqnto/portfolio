<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Definir o endereço de e-mail do destinatário
    $destinatario = "claudioqnto10@gmail.com";

    // Assunto do e-mail
    $assunto = "Mensagem de Contato - $nome";

    // Corpo do e-mail
    $corpo = "Você recebeu uma mensagem de contato.\n\n";
    $corpo .= "Nome: $nome\n";
    $corpo .= "E-mail: $email\n";
    $corpo .= "Mensagem: \n$mensagem";

    // Definindo os headers do e-mail
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Enviar o e-mail
    if (mail($destinatario, $assunto, $corpo, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem. Tente novamente.";
    }
}
?>
