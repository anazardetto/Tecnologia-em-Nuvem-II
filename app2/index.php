<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Contato</title>
</head>
<body>
    <h1>Fale Conosco</h1>

    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="mansagem">Mensagem:</label>
        <textarea name="mensagem" id="mensagem" rows="10" required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>

   <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        //Coleta os dados do formulário
        $nome = htmlspecialchars($_POST['nome']);
        $email = htmlspecialchars($_POST['email']);
        $mensagem = htmlspecialchars($_POST['mensagem']);

      //Exibe os dados (em uma aplicação real, voce poderia salvar ou mandar por email)
        echo"<h2>Dados recebidos:</h2>";
        echo"<p><strong>Nome:</strong> $nome</p>";
        echo"<p><strong>E-mail:</strong> $email</p>";
        echo"<p><strong>Mensagem:</strong> $mensagem</p>";
    }
    ?>
</body>
</html>
