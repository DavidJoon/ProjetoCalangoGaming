<?php
include_once('../View/header.php');
include_once('../Model/conexao.php');
include_once('../Model/bancoFilme.php');

extract($_REQUEST,EXTR_OVERWRITE);

if(alterFilme($conexao, $codfil, $filme, $genero, $sinopse, $ano, $capa, $url)){
echo("<p class='alert alert-success' role='alert'>O Filme foi alterado com sucesso.</p>");
}else{
echo("<p class='alert alert-danger' role='alert'>O Filme não foi alterado com sucesso.</p>");
}

include_once('../View/footer.php');

?>