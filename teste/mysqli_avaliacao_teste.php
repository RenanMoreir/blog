<?php

require_once '../includes/funcoes.php';
require_once '../core/conexao_mysql.php';
require_once '../core/sql.php';
require_once '../core/mysql.php';

insert_teste(10, 'legal', 8, 3);
//buscar_teste();
//update_teste(1, 4,'pessimo');
//buscar_teste();

function insert_teste($nota, $comentario, $usuario_id, $post_id) :void
{
    $dados = ['nota' => $nota, 'comentario' => $comentario, 'usuario_id ' => $usuario_id, 'post_id' => $post_id  ];
    insere('avaliacao',$dados);
}

function buscar_teste() : void
{
    $avaliacao = buscar('avaliacao', [ 'id', 'nota', 'comentario'],[],'');
    print_r($avaliacao);
}

function update_teste($id, $nota, $comentario,) : void
{
    $dados = ['nota' => $nota, 'comentario' => $comentario];
    $criterio = [['id', '=', $id]];
    atualizar('avaliacao', $dados,$criterio);
}

?>