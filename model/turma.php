<?php

include "aluno.php";

class Turma{

    $aluno = new Aluno("Ronildo",123456789,7,7,7,7);
    echo $aluno->getNome();
    echo $aluno->getRa();
    echo $aluno->getN1();
    echo $aluno->getN2();
    echo $aluno->getN3();
    echo $aluno->getN4();




}

?>