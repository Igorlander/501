<?php

namespace Escola;	

require_once 'Aluno/Aluno.php';
require_once 'Curso/Curso.php';
require_once 'Matricula/Matricula.php';
require_once 'Turma/Turma.php';


use Escola\Aluno;
use Escola\Curso;
use Escola\Matricula;
use Escola\Turma;


echo "<pre>";

$igor = new Aluno("Igor","igor@cisl.com");
echo $igor->getNome();
echo"<br>";
echo"<br>";
$turma = new Turma("501","sabado");
echo $turma->getCurso();
echo"<br>";
echo"<br>";
$matriculaIgor = new Matricula($igor,$turma);

echo $matriculaIgor->getAluno()->getNome();
echo "<br>";
echo"<br>";
echo $matriculaIgor->getTurma()->getCurso();













?>