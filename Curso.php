<?php

class Curso{

    private $codigoCurso;
    private $nomeCurso;
    private $tempoIntegralizacao;
    private $cargaHoraria;
    private $turma;

    public function __construct($codigoCurso, $nomeCurso, $tempoIntegralizacao, $cargaHoraria, $turma){
        $this -> codigoCurso = $codigoCurso;
        $this -> nomeCurso = $nomeCurso;
        $this -> professor = $professor;
        $this -> tempoIntegralizacao = $tempoIntegralizacao;
        $this -> cargaHoraria =  $cargaHoraria;
        $this -> turma = $turma;
    }

    public function getCodigoCurso(){
        return $this->codigoCurso;
    }

    public function setCodigoCurso($codigoCurso){
        $this->codigoCurso=$codigoCurso;
    }

    public function getNomeCurso(){
        return $this->nomeCurso;
    }

    public function setNomeCurso($nomeCurso){
        $this->nomeCurso=$nomeCurso;
    }

    public function getTempoIntegralizacao(){
        return $this->tempoIntegralizacao;
    }

    public function setTempoIntegralizacao($tempoIntegralizacao){
        $this->tempoIntegralizacao=$tempoIntegralizacao;
    }

    public function getCargaHoraria(){
        return $this->cargaHoraria;
    }

    public function setCargaHoraria($cargaHoraria){
        $this->cargaHoraria=$cargaHoraria;
    }

    public function getTurma(){
        return $this->turma;
    }

    public function setTurma($turma){
        $this->turma=$turma;
    }

}
?>