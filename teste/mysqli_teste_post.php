<?php

require_once '../includes/funcoes.php';
require_once '../core/conexao_mysql.php';
require_once '../core/sql.php';
require_once '../core/mysql.php';

insert_teste('postagem', 'uma postagem aqui', 1, date('Y-m-d H:i:s'));
buscar_teste();
//update_teste(5, 'nova postagem', 'murilo');
//buscar_teste();

function insert_teste($titulo, $texto, $id_usuario, $data_postagem) :void
{
    $dados = ['titulo' => $titulo, 'texto' => $texto, 'usuario_id' => $id_usuario, 'data_postagem' => $data_postagem];
    insere('post',$dados);
}

function buscar_teste() : void
{
    $usuarios = buscar('post', [ 'id', 'titulo', 'texto'],[],'');
    print_r($usuarios);
}

function update_teste($id, $titulo, $texto) : void
{
    $dados = ['titulo' => $titulo,'texto' => $texto];
    $criterio = [['id', '=', $id]];
    atualizar('post', $dados,$criterio);
}

?>