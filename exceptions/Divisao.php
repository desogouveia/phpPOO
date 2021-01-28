<?php

function divisao($numero1, $numero2)
{
    if($numero1 == 0 || $numero2 == 0)
    {
        throw new Exception("Numeros não podem ser = 0");
    }
}

 $n1 = 0;
 $n2 = 2;

 try{
    divisao($n1, $n2);
 } catch (Exception $e){
    echo $e->getMessage();
 } finally{
    echo "\nDigite os números novamente!";
    die();
 }

 echo '...exe...';