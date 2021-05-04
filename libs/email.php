<?php

$to = 'rgnaldo1@gmail.com';
$subject = 'Email de teste com pHp';
$message = "
<p><strong>Nome</strong>: {$nome}</p>
<p><strong>URL</strong>: {$url}</p>
<p><strong>Email</strong>: {$email}</p>
<p><strong>Messagem</strong>: {$descricao}</p>
";
$additional_headers = 'From; ' . $email . '\r\n';
$additional_headers .= 'Replay-To: ' . $email .'\r\n';
$additional_headers .= 'X--Mailer: ' .phpversion();

if(mail($to, $subject, $message, $additional_headers, $additional_parameters)){
    die('OK, enviado ');
}else{
    die('Falha ao enviar');
}

