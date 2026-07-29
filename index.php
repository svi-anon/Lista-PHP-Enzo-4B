<?php

//1.
$idade = 20;
if ($idade >= 18) {
    $msgIdade = "Voce e maior de idade";
} else {
    $msgIdade = "Voce e menor de idade";
}

//2.
$dinheiro = 5000;
if ($dinheiro < 1000) {
    $msgDinheiro = "Pobre";
} elseif ($dinheiro < 10000) {
    $msgDinheiro = "Classe Media";
} elseif ($dinheiro < 100000) {
    $msgDinheiro = "Riquinho";
} elseif ($dinheiro < 100000000) {
    $msgDinheiro = "Ricao";
} else {
    $msgDinheiro = "Elon Musk";
}

//3.
$numero1 = 10;
$numero2 = 5;
$operacao = '+';

switch ($operacao) {
    case '+': $resultadoOp = $numero1 + $numero2; break;
    case '-': $resultadoOp = $numero1 - $numero2; break;
    case '*': $resultadoOp = $numero1 * $numero2; break;
    case '/': $resultadoOp = $numero1 / $numero2; break;
    default: $resultadoOp = "Invalido"; break;
}

//6.
function saudar($nome) {
    return "Ola " . $nome . "!";
}

//7.
function operacaoIncrevel($n1, $n2) {
    $soma = $n1 + $n2;
    $sub = $n1 - $n2;
    $frase = "Vc e bom!";
    return [$soma, $sub, $frase];
}

//8.
$memes = [
    "Doge",
    "Gigachad",
    "Bicho Piruleta",
    "Jailson Mendes",
    "Fortin"
];

//9.
$papagaios = [
    "Papagaio verdadeiro",
    "Papagaio do mangue",
    "Papagaio chaua"
];
$papagaios[] = "Papagaio Imperial";

//10.
$pessoa = [
    "Nome" => "Big Smoke",
    "Idade" => 30,
    "Cidade" => "Los Santos",
    "Tchola" => "Sepa que sim"
];

//11.
$imcResultado = "";
if (isset($_POST['calc_imc'])) {
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    if ($altura > 0) {
        $imc = $peso / ($altura * $altura);
        $imcResultado = "Seu IMC e: " . number_format($imc, 2);
    }
}

//12.
$calcResultado = "";
if (isset($_POST['calc_num'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $op = $_POST['op'];

    if ($op == 'Somar') $calcResultado = $n1 + $n2;
    if ($op == 'Subtrair') $calcResultado = $n1 - $n2;
    if ($op == 'Multiplicar') $calcResultado = $n1 * $n2;
    if ($op == 'Dividir') $calcResultado = ($n2 != 0) ? $n1 / $n2 : "Erro divisao por zero";
}

//13.
$cadastro = null;
if (isset($_POST['cadastrar'])) {
    $cadastro = $_POST;
}

include 'template.php';