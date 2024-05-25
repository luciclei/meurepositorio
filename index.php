<?php
define("INFERIOR",1);
define("SUPERIOR",100);

$numero = rand(INFERIOR, SUPERIOR);
echo "Meu numero da sorte: <br>";
echo $numero."<br>";
?>
<?php
$x = 5; //Ambito global

function meuTeste () {
    echo "<p>A variavel x dentro da função é: $x</p><br>";
    }
    //Ambito local
         meuTeste ();
    echo "<p>A variavel x dentro da função é: $x</p><br>";
   
?>

<?php
$x = 5;
$y = 10;
function numero(){
    global $x, $y;
    $y= $x + $y;
    }
numero();
echo $y;
?>

<?php
//ambito estatico
function teste(){
        static $x = 0;
        echo $x;
        $x++;
    }
echo "<br>";
echo "<br>";
teste();
echo "<br>";
teste();
echo "<br>";
teste();

?>
<?php
echo "<br>Geovane da Costa";
print "<br>Geovane da Costa<br><br>";
?>
<?php
$x = 5;
var_dump($x);
echo "<br>";
?>
<?php
$x = 'Minha string';
$y = "Minha string 2!";
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";
?>
<?php
$x = 3.14;
var_dump($x);
echo "<br>";
?>

<?php
$x = true;
var_dump($x);
echo "<br>";
?>

<?php
$cars =array("BMW","BYD","AUDI");
var_dump($cars);
echo "<br>";
?>

<?php
echo"<br>";
echo strlen("Ola Mundo")
?>

<?php
echo"<br>";
echo str_word_count("Ola Mundo")
?>

<?php
echo"<br>";
echo strpos("Novo bravo mundo", "Iron maiden")
?>

<?php
//comando letras maiusculas
$x = "Ola Mundo";
echo strtoupper ($x);
?>

<?php
//comando letras minusculas
echo"<br>";
$x="Novo TesTe";
echo strtolower($x);
?>

<?php
$x="Meu Teste";
echo"<br>";
echo str_replace("Teste", "Arquivo", $x);
 
?>

<?php
$x="Meu Teste";
echo"<br>";
echo strrev($x);
?>

<?php
echo"<br>";
$x="Meu Teste";
echo trim($x);
?>
<?php
echo"<br>";
echo "<input value='" . $x ."'>";
echo"<br>";
echo "<input value='" . trim($x) . "'>"; 
?>

<?php
$x="Meu ";
$y="Teste";
$z=$x . $y;
echo"<br>";
echo $z;
echo"<br>"
?>


<?php
$nome="Luciclei ";
$sobre="Oliveira ";
$final=$nome . $sobre;
echo $final;
?>

<?php
$x="Meu Teste";
echo"<br>";
echo substr($x, 3);
?>

<?php
//<--*Caracter de escap*-->
//\' Single quote
//\" Double Quote
//\$ PhP variables 
//\n New Line
//\r Carriage Return
//\t Tab
//\f form Feed
//\ooo Octal valve
//\xhh Hex value

$x="Somos os chamados \"Viking\"do norte";
echo $x;
?>

<?PhP
$a=5;
$b=5.34;
$c="25";
var_dump($a);
echo "< br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($y);
echo "<br>";
echo"<br>";
?>

<?PhP
//verifique se o tipo de uma variavel e inteiro
$x=5985;
var_dump(is_int($x));
echo"<br>";
//verificar novamente
$x=3.14;
var_dump(is_int($x));
echo "<br>";
$x=10.123;
var_dump(is_float($x));
echo"<br>";
$x=1.9e411;
var_dump(is_infinite($x));
echo"<br>";
echo"<br>";
?>


<?PhP
$a=25.232;
var_dump(is_string($a));
echo"<br>";
$b=5489;
var_dump(is_string($b));
echo"<br>";
$c=12.5e896;
var_dump(is_string($c));
echo"<br>";
$d="Meu Teste";
var_dump(is_string($d));
echo"<br>";
?>

<?PhP
echo"<br>";
$x=120450.75;
$int_cast=(int)$x;
echo $int_cast;
echo"<br>";
echo"<br>";
?>

<?PHP
$octeto = 172;
$mascara = 248;
$valor = $octeto & $mascara;
echo "<br> Aplicando a operaçao AND entre a máscara e octeto com $valor";

?>

<?PHP
echo"<br>";
$valor = 10;
if($valor == 15){
   echo "<br> Valor é 15";
}
elseif ($valor >= 10){
	echo "Valor é  maior ou igual a 10";
}
else {
	echo "valor é menor que 10";
}
?>

<?PHP
echo "<br>";
$v = "Fabio";
$nome = $v . " dos Reis";
echo $nome;
?>
