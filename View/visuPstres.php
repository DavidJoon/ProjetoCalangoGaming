<?php
include_once("../Model/bancoPstres.php");
include_once("../Model/conexao.php");
?>

<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="icon" type="text/css" href="img/logo.jpeg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Jogos Playstation 3</title>
</head>

<body background="img/orion.jpg">
  <!--Nav-->
  <header>
    <a href="index.php"><img class="logotipo" alt="Logo" title="Logo" src="img/logo.jpeg" width="50px"></a>
    <h5 class="textlogo"  alt="Calango Gaming" title="Calango Gaming" >CALANGO GAMING</h5>
      <nav class="nvprincipal">
		  	<ul class="ulprincipal">
				  <a href="index.php"><li class="bot">HOME</li></a>
				  <a href="novidades.php"><li class="bot">NOVIDADES</li></a>
				  <a href="galeria.php"><li class="bot">GALERIA</li></a>
				  <a href="curiosidades.php"><li class="bot">CURIOSIDADES</li></a>
			  </ul>
      </nav>
    <div class="botaologar"><a href="acessofun.php"><button class="btnn" type="submit">Logar</button></a></div>
  </header>

<!--Destaque-->
<section class="destaquebusca">
<img src="img/bannerps3.jpg" alt="Banner Jogos PS3" title="Banner Jogos PS3">
</section>

  <!--Barra de pesquisa-->
  <section>
    <div class="d-flex justify-content-center">
      <div class="buscando">
        <div class="card-body">
        <h5 class="card-title" alt="Pesquise abaixo" title="Pesquise abaixo">Pesquise pelo nome de um jogo</h5>
        </div>
      </div>
    </div>
  </section>
  
    <div class="container">
      <form action="" method="post" class="row g-3">
        <div class="col-12">
          <input type="text" placeholder="Digite aqui" class="form-control" name="jogo">
        </div>
        <div class="col-12">
          <button type="submit" class="botoes"> Localizar </button>
        </div>
      </form>
    </div>

<?php 
$jogo = isset($_POST["jogo"]) ? $_POST["jogo"]:"";
if(!$jogo){
}else{
$dado = visuNomePstres($conexao, $jogo); 
foreach($dado as $dados) :
?>

  <div class="tabgame">
  <table class="table table-striped">
    <thead class="fundotabgame">
      <tr>
        <th class="cortabpstres" scope="col">Capa</th>
        <th class="cortabpstres" scope="col">Jogo</th>
        <th class="cortabpstres" scope="col">Data</th>
        <th class="cortabpstres" scope="col">Gênero</th>
        <th class="cortabpstres" scope="col">Desenvovedora</th>
        <th class="cortabpstres" scope="col">Resumo</th>
      </tr>
    </thead>
    
    <tbody>
    <tr>
      <td><img src="<?=$dados["capapstres"]?>" height="250" width="200" ></td>
      <td class="namegame"><?=$dados["nomepstres"]?></td>
      <td class="datagame"><?=$dados["datapstres"]?></td>
      <td class="gengame"><?=$dados["generopstres"]?></td>
      <td class="desengame"><?=$dados["desenpstres"]?></td>
      <td class="singame"><?=$dados["sinpstres"]?></td>
    </tr>

<?php
endforeach;
}
?>

    </tbody>
  </table>
  </div>
  <!--FOOTER-->
  <footer>
    <a href="https://github.com/DavidJoon" target="blanck"><img src="img/git.png"  widht="40" height="40" class="git" alt="Link Github" title="Rede Social Github"></a> <!-- Icone Link Github -->
    <p class="direitos" alt="Direitos autorais" title="Direitos autorais"> © 2021 Direitos autorais reservados.</p>
  </footer>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>