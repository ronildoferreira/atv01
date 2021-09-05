<?php

class Aluno{
    private String $nome;
    private int $ra;
    private float $n1;
    private float $n2;
    private float $n3;
    private float $n4;

    public  function __construct ($nome ,$ra, $n1, $n2 , $n3 , $n4 )
    {
        $this -> nome = $nome;
        $this ->ra = $ra;
        $this ->n1 = $n1;
        $this ->n2 = $n2;
        $this ->n3 = $n3;
        $this ->n4 = $n4;
    }

    public function getMedia(){
        $media = ($n1 + $n2 + $n3 + $n4) / 4;
        return $media;
    }


public  function  setNome ($nome)
{
    $this->nome = $nome;
}

public  function  getNome ()
{
    return  $this->nome;
}

public  function  setRa ($ra)
{
    $this->ra = $ra;
}

public  function  getRa ()
{
    return  $this->ra;
}

public  function  setN1 ($n1)
{
    $this->n1 = $n1;
}

public  function  getN1 ()
{
    return  $this->n1;
}

public  function  setN2 ($n2)
{
    $this->n2 = $n2;
}

public  function  getN2 ()
{
    return  $this->n2;
}

public  function  setN3 ($n3)
{
    $this->n1 = $n3;
}

public  function  getN3 ()
{
    return  $this->n3;
}

public  function  setN4 ($n4)
{
    $this->n4 = $n4;
}

public  function  getN4 ()
{
    return  $this->n4;
}

}



    $aluno = new Aluno("Ronildo",123456789,7,7,7,7);
    echo $aluno->getNome();
  
?>