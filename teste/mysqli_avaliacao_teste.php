<?php

require_once '../includes/funcoes.php';
require_once '../core/conexao_mysql.php';
require_once '../core/sql.php';
require_once '../core/mysql.php';

insert_teste(10, 'legal', 2, 1);
buscar_teste();
update_teste(4 , 'pessimo');
buscar_teste();

function insert_teste($nota, $comentario, $usuario_id, $post_id  ) :void
{
    $dados = ['nota' => $nota, 'comentario' => $comentario, 'usuario_id ' => $usuario_id, 'post_id' => $post_id  ];
    insere('avaliacao',$dados);
}

function buscar_teste() : void
{
    $usuarios = buscar('avaliacaos', [ 'id', 'nota', 'comentario'],[],'');
    print_r($usuarios);
}

function update_teste($id, $nota, $comentario,) : void
{
    $dados = ['nota' => $nota, 'comentario' => $comentario];
    $criterio = [['id', '=', $id]];
    autalizar('avaliacao', $dados,$criterio);
}

?>