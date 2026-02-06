<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
</head>
<body>

<?php

if(isset($_POST['enviar-formulario'])):
    $erros = array();
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);

    echo "O nome do usuário é $nome <br>";
    echo "A idade do usuário é $idade <br>";
    echo "O email do usuário é $email <br>";
    echo "A URL do usuário é $url <br>";
endif;
?>
        
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Nome:  <input type="text" name="nome"><br>
    Idade: <input type="text" name="idade"><br>
    Email: <input type="email" name="email"><br>
    URL:   <input type="text" name="url"><br>
    <button type="submit" name="enviar-formulario"> Enviar </button><br>
</form>
</body>
</html>