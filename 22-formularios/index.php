<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
</head>
<body>
  <!--  <form action="processa.php" method="POST">
            Nome: <input type="text" name="nome" required><br>
            E-mail: <input type="email" name="email" required><br>
            Telefone: <input type="tel" name="telefone"><br>
            Pais: <input type= "text" name= "pais"><br>
            <button type="submit">Enviar</button>
</form> -->
<form action="processa.php" method="GET">
     Nome: <input type="text" name="nome" required><br>
     E-mail: <input type="email" name="email" required><br>
     Telefone: <input type="tel" name="telefone"><br>
     Pais: <input type="text" name="pais"><br>
     <button type="submit">Enviar Formulário</button><br>
     
     <!-- Este link envia dados fixos via URL -->
     <a href="processa.php?idade=25&sobrenome=SANTOS">Enviar link com Idade/Sobrenome</a>
</form>
</body>
</html>