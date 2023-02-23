<style>
  .logo {
    max-width: 200px;
  }

  .custom-nav {
    background-color: #0B3B2E;
  }
</style>


<div class="ui inverted menu custom-nav">
  <a href="#" class="item">
    <img src="../imagens/Logo_Sulamericana_Sem_Fundo.png" alt="Logo" class="ui logo">
  </a>
  <a href="/" class="item" data-inverted="" data-tooltip="Página Inicial" data-position="bottom center"><i class="home icon"></i></a>


  <div class="ui dropdown item" data-inverted="" data-tooltip="Documentos" data-position="bottom center">
    <i class="file alternate outline icon"></i>
    <div class="menu">
      <a href="../aprov_docs/upload.php" class="item" data-inverted="" data-tooltip="Enviar Documento" data-position="bottom center"><i class="upload icon"></i>Enviar Documento</a>
      <a href="../aprov_docs/geral.php" class="item" data-inverted="" data-tooltip="Visualizar Documentos" data-position="bottom center"><i class="check icon"></i>Visualizar Documentos</a>
    </div>
  </div>
  <a href="<?= verifica_login()['url']  ?>" class="right item"><?= verifica_login()['text'] ?></a>
</div>
<div class="ui sidebar vertical menu" id="mobile-nav">
  <a href="/" class="item" data-inverted="" data-tooltip="Página Inicial" data-position="bottom center"><i class="home icon"></i>Página Inicial</a>
  <div class="ui dropdown item" data-inverted="" data-tooltip="Documentos" data-position="bottom center">
    <i class="file alternate outline icon"></i>
    <div class="menu">
      <a href="../aprov_docs/upload.php" class="item" data-inverted="" data-tooltip="Enviar Documento" data-position="bottom center"><i class="upload icon"></i>Enviar Documento</a>
      <a href="../aprov_docs/aprovar.php" class="item" data-inverted="" data-tooltip="Aprovar Documentos" data-position="bottom center"><i class="check icon"></i>Aprovar Documentos</a>
    </div>
  </div>
  <a href="<?= verifica_login()['url']  ?>" class="item"><?= verifica_login()['text'] ?></a>
</div>

<script>
  $('.ui.dropdown').dropdown();
</script>