<?php

include_once '../model/Editora.php';
include_once '../dao/Conexao.php';

class EditoraDao {

    public static function inserir($editora) {

        $sql = "INSERT INTO livro (titulo status, obs, codigo, id)"
                . " VALUES "
                . " ( '" . $editora->getTitulo() . "', "
                . "'" . $editora->getStatus() . "',"
                . "'" . $editora->getobs() . "',"
                . "'" . $editora->getCodigo() . "',";

        Conexao::executar($sql);
    }

}
