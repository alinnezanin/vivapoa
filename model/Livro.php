<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Editora
 *
 * @author aline.zanin
 */
class Editora {
    private $titulo;
    private $status;
    private $obs;
    private $codigo;
    private $id;
    
    
    function __construct() {
        
    }
    
    function getTitulo() {
        return $this->titulo;
    }

    function getStatus() {
        return $this->status;
    }

    function getObs() {
        return $this->obs;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getId() {
        return $this->id;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setObs($obs) {
        $this->obs = $obs;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setId($id) {
        $this->id = $id;
    }





}
 