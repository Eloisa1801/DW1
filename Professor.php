<?php

class Professor{

    private $nome;
    private $siape;
    private $lotacao;
    private $ingresso;

    public function __construct($nome, $siape, $lotacao, $ingresso){
        $this -> nome = $nome;
        $this -> siape = $siape;
        $this -> lotacao = $lotacao;
        $this -> ingresso = $ingresso;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome=$nome;
    }

    public function getSiape(){
        return $this->siape;
    }

    public function setSiape($siape){
        $this->siape=$siape;
    }

    public function getLotacao(){
        return $this->lotacao;
    }

    public function setLotacao($lotacao){
        $this->lotacao=$lotacao;
    }

    public function getIngresso(){
        return $this->ingresso;
    }

    public function setIngresso($ingresso){
        $this->ingresso=$ingresso;
    }
}
?>