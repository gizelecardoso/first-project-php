<?php
function listaProdutos($conexao){
  $produtos = array();
  $resultado = mysqli_query($conexao, "select p.*,c.nome as categoria_nome from produtos as p join categorias as c on c.id=p.categoria_id");
  while($produto = mysqli_fetch_assoc($resultado)){
    array_push($produtos, $produto);
  }
  return $produtos;
}

function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado){
  $query = "insert into produtos(nome, preco, descricao, categoria_id, usado)
            values('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado})";
  return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id){
  $query = "select * from produtos where id={$id}";
  $produto = mysqli_fetch_assoc(mysqli_query($conexao, $query));
  return $produto;
}

function RemoveProduto($conexao, $id){
  $query = "delete from produtos where id = {$id}";
  return mysqli_query($conexao, $query);
}
