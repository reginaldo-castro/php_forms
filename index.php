<?php
    session_start();
    $_SESSION['csrf_token'] = sha1(rand(1, 20000));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="send.php" method="POST">
        <input type="hidden" name="_csrf_token" value="<?php echo $_SESSION['csrf_token'] ?>">
        <input type="text" name="nome" placeholder="Nome"><br>
        <input type="text" name="url" placeholder="Url"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <textarea name="descricao" placeholder="Descrição"></textarea><br>
        <img src="captcha.php">
        <input type="text" name="_captcha" placeholder="Digite as letras acima">
        <input type="submit" value="Enviar">
    </form> 

</body>
</html>