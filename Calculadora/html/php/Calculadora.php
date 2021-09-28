<?php

$numero1 =$_POST['campo1'];
$numero2 =$_POST['campo2'];
$resulato=0;
if(isset($_POST['Sumar'])){//isset devuelve null si no se a precionado el boton o no hay nada
    $resulato=$numero1+$numero2;
}else if(isset($_POST['Restar'])){
    $resulato=$numero1-$numero2;
}else if(isset($_POST['Multiplicar'])){
    $resulato=$numero1*$numero2;
}else if(isset($_POST['Dividir'])){
    $resulato=$numero1/$numero2;  
}
/*
$suma =$_POST['Sumar'];
$resta =$_POST['Restar'];
$multiplicar =$_POST['Multiplicar'];
$dividir =$_POST['Dividir'];
*/
echo"La suma es :",$resulato;
?>