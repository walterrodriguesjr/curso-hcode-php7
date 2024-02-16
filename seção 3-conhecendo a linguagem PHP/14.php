<?php 

$nome = 'Walter';
$sobreNome = 'Rodrigues';
$ultimoNome = 'Junior';
$nomeCompleto = $nome . ' ' . $sobreNome . ' ' . $ultimoNome;
echo $nomeCompleto;

echo '<br>';
echo '<br>';

$empresa = 'Hcode';
$ano = 2000;
$salario = 5500.99;
$bloqueado = false; 
$anoNascimento = 1986;
$dataAtual = new DateTime();
$anoAtual = $dataAtual->format('Y');
$idade = $anoAtual - $anoNascimento;


echo "Eu trabalho na empresa {$empresa},
      desde o ano de {$ano}.
      Tenho um salário de R$ {$salario}
      e minha situação atual é {$bloqueado}.
      Minha idade é {$idade}.";

echo '<br>';
echo '<br>';

$frutas = ['abacaxi', 'uva', 'laranja'];
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";  
}