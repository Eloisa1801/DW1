<?php

class UnidadeCurricular{
    private $codigoUnidadeCurricular;
    private $nomeUnidadeCurricular;
    private $professor;
    private $cargaHoraria;
    private $ementa;
    private $objetivoGeral;
    private $objetivoEspecifico;
    private $curso;

    public function __construct($codigoUnidadeCurricular, $nomeUnidadeCurricular, $professor, $cargaHoraria, $ementa, $objetivoGeral, $objetivoEspecifico, $curso){
        $this -> codigoUnidadeCurricular = $codigoUnidadeCurricular;
        $this -> nomeUnidadeCurricular = $nomeUnidadeCurricular;
        $this -> professor = $professor;
        $this -> cargaHoraria = $cargaHoraria;
        $this -> ementa =  $ementa;
        $this -> objetivoGeral = $objetivoGeral;
        $this -> objetivoEspecifico = $objetivoEspecifico;
        $this -> curso = $curso;
    }

    public function getCodigoUnidadeCurricular(){
        return $this->codigoUnidadeCurricular;
    }

    public function setCodigoUnidadeCurricular($codigoUnidadeCurricular){
        $this->codigoUnidadeCurricular=$codigoUnidadeCurricular;
    }

    public function getNomeUnidadeCurricular(){
        return $this->nomeUnidadeCurricular;
    }

    public function setNomeUnidadeCurricular($nomeUnidadeCurricular){
        $this->nomeUnidadeCurricular=$nomeUnidadeCurricular;
    }

    public function getProfessor(){
        return $this->professor;
    }

    public function setProfessor($professor){
        $this->professor=$professor;
    }

    public function getCargaHoraria(){
        return $this->cargaHoraria;
    }

    public function setCargaHoraria($cargaHoraria){
        $this->cargaHoraria=$cargaHoraria;
    }

    public function getEmenta(){
        return $this->ementa;
    }

    public function setEmenta($ementa){
        $this->ementa=$ementa;
    }

    public function getObjetivoGeral(){
        return $this->objetivoGeral;
    }

    public function setObjetivoGeral($objetivoGeral){
        $this->objetivoGeral=$objetivoGeral;
    }

    public function getObjetivoEspecifico(){
        return $this->objetivoEspecifico;
    }

    public function setObjetivoEspecifico($objetivoEspecifico){
        $this->objetivoEspecifico=$objetivoEspecifico;
    }
    public function getCurso(){
        return $this->curso;
    }

    public function setCurso($curso){
        $this->curso=$curso;
    }
}

?>