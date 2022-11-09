<?php

class Estudante{

    private $raAluno;
    private $nomeAluno;
    private $curso;
    private $ingresso;

    public function __construct($raAluno, $nomeAluno, $curso, $ingresso){
        $this -> raAluno = $raAluno;
        $this -> nomeAluno = $nomeAluno;
        $this -> curso = $curso;
        $this -> ingresso = $ingresso;
    }

    public function getRaAluno(){
        return $this->raAluno;
    }

    public function setRaAluno($raAluno){
        $this->raAluno=$raAluno;
    }

    public function getNomeAluno(){
        return $this->nomeAluno;
    }

    public function setNomeAluno($nomeAluno){
        $this->nomeAluno=$nomeAluno;
    }

    public function getCurso(){
        return $this->curso;
    }

    public function setCurso($curso){
        $this->curso=$curso;
    }

    public function getIngresso(){
        return $this->ingresso;
    }

    public function setIngresso($ingresso){
        $this->ingresso=$ingresso;
    }
}
?>