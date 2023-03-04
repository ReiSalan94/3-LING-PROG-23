<?php
$idade = 17;

if($idade < 18){
	echo "você não pode entrar";
} else {
	echo 'seja bem vindo';
}
$a = 2;
$b = 5;
$c = 2;

if ($b <= $a){
	echo "<hr>B é menor que a";
}else{
	echo "<hr>b é maior que a";
}

$nome = "clara";
if($nome == "Denicreidsson"){
	echo "<hr>Bem Vindo $nome";
}else{
	echo "<hr>Sai daqui";
}
$a = 1;
if($a === '1'){
	echo "<hr>A é igual a 1";
}else{
	echo "<hr>a não é igual a 1";
}
// = atribuição
// == comparação simples
// === comparação identica (tipo de valor)
?>