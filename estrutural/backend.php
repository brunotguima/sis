<?php
$ambiente = 'localhost';
$userBD = 'root';
$senhaBD = 'sil2023@#';
$BD = 'sis';

session_start();
// verifica se o usuário está logado
function verifica_login() {
  if (isset($_SESSION['usuario_id'])) {
    $login_url = '../login/logout.php';
    $login_text = 'Sair';
  } else {
    $login_url = '../login/login.php';
    $login_text = 'Fazer Login';
  }
  return array('url' => $login_url, 'text' => $login_text);
}

// conecta ao banco de dados e prepara a consulta para o sistema de aprovação de documentos
function prepara_consulta_aprov_docs() {
  $conn = new mysqli($GLOBALS['ambiente'], $GLOBALS['userBD'], $GLOBALS['senhaBD'], $GLOBALS['BD']);
  $stmt = $conn->prepare('SELECT documentos.id, documentos.titulo, documentos.arquivo, usuarios.nome, documentos.data_envio, documentos.status FROM documentos JOIN usuarios ON documentos.usuario_id = usuarios.id WHERE documentos.usuario_aprovador_id = ?');
  $stmt->bind_param('i', $_SESSION['usuario_id']);
  $stmt->execute();
  $stmt->bind_result($documento_id, $titulo, $arquivo, $nome_usuario, $data_envio, $status);
  return $stmt;
}

function efetuaLogin(){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $conn = new mysqli($GLOBALS['ambiente'], $GLOBALS['userBD'], $GLOBALS['senhaBD'], $GLOBALS['BD']);
        $stmt = $conn->prepare('SELECT id, senha FROM usuarios WHERE email = ?');
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->bind_result($usuario_id, $senha_hash);
        $stmt->fetch();
      
        if (password_verify($senha, $senha_hash)) {
          $_SESSION['usuario_id'] = $usuario_id;
          header('Location: ../index.php');
          exit();
        } else {
          $erro = 'E-mail ou senha incorretos.';
        }
      }
}
?>
