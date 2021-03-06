<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include("header.php");
?>

<div class="container mt-4">
<form action="../Controller/inserirPstres.php" method="get" class="row g-3">
  
  <div class="col-md-12">
    <label for="inputJogo" class="form-label">Jogo</label>
    <input type="text" name="jogo" class="form-control" id="inputJogo" placeholder="Nome do Jogo" required>
  </div>

  <div class="col-md-2">
    <label for="inputData" class="form-label">Data</label>
    <input type="text"  name="data" class="form-control" id="inputData" placeholder="Data do Jogo" required>
  </div>

  <div class="col-md-5">
    <label for="inputGenero" class="form-label">Gênero</label>
    <input type="text"  name="genero" class="form-control" id="inputGenero" placeholder="Gênero do Jogo" required>
  </div>
  
  <div class="col-md-5">
    <label for="inputDesenvolvedora" class="form-label">Desenvolvedora</label>
    <input type="text"  name="desenvolvedora" class="form-control" id="inputDesenvolvedora" placeholder="Desenvolvedora do Jogo" required>
  </div>
  
  <div class="col-md-12">
    <label for="inputCapa" class="form-label">Capa</label>
    <input type="text"  name="capa" class="form-control" id="inputCapa" placeholder="Capa do Jogo" required>
  </div>

  <div class="col-12">
    <label for="inputSinopse" class="form-label">Sinopse</label>
    <textarea class="form-control" name="sinopse" placeholder="Digite um resumo do Jogo" required id="floatingTextarea2" style="height: 100px"></textarea>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-info">Cadastro</button>
  </div>

</form>
</div>




<?php
include("footer.php");
?>