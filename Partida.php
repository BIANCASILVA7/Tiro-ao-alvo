<?php
class Partida {
    private int $id;
    private string $nome;
    private int $quantAcertos;
    private int $quantErros;
    private string $dataHora;


    public function getId() : int 
    {
        return $this->id;
    }

    public function setId($id) :self
    {
        $this->id = $id;

        return $this;
    }

    public function getNome() : string
    {
        return $this->nome;
    }

    public function setNome($nome) : self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getQuantAcertos() : int 
    {
        return $this->quantAcertos;
    }

    public function setQuantAcertos($quantAcertos) :self
    {
        $this->quantAcertos = $quantAcertos;

        return $this;
    }

    public function getQuantErros() : int 
    {
        return $this->quantErros;
    }

    public function setQuantErros($quantErros) :self
    {
        $this->quantErros = $quantErros;

        return $this;
    }

    public function getDataHora() : string
    {
        return $this->dataHora;
    }

    public function setDataHora($dataHora) :self
    {
        $this->dataHora = $dataHora;

        return $this;
    }
}







?>