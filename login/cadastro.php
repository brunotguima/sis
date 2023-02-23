<?php include '../estrutural/backend.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cadastro de Usuário</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body>

<?php include '../estrutural/navbar.php'; ?>

  <div class="ui container">
    <h1>Cadastro de Usuário</h1>
    <form method="POST" class="ui form">
      <div class="field">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
      </div>
      <div class="field">
        <label for="email">E-mail:</label>
        <input type="email" name="email" required>
      </div>
      <div class="field">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>
      </div>
      <button class="ui primary button" type="submit">Cadastrar</button>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
</body>
</html>