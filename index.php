<?php

// $meuNome = "Marla Ingridh";
// echo "Meu nome: " . $meuNome;

echo date("d/m/Y"); echo "<br/>";
echo date("d/m/y"); echo "<br/>";
echo date("d/M/Y"); echo "<br/>";

date_default_timezone_set("American/Manaus");
echo date("d/m/Y h:i:s"); echo "<br/>";



echo strlen("Marla Ingridh");  echo "<br/>";

print_r([1,2,3,4]); echo "<br/>";

print_r(explode(",","3,4,5,6")); echo "<br/>";

$idades = "10,20,30,40";
$array = explode(",",$idades);
print_r($idades); echo "<br/>";
print_r($array); echo "<br/>";
echo str_replace("a","e","casa"); echo "<br/>";


function remove_espacos($frase){
    return str_replace(" ","",$frase);
}

$texto = "Adoro programar em PHP!";

echo remove_espacos($texto);


echo strtoupper("marla ingridh"); echo "<br/>";

echo strtolower("MARLA MINUSCULA"); echo "<br/>";

echo trim("1      Lorem     1"); echo "<br/>";

echo json_encode(["meuArray"=>1,"teste"=>2]); echo "<br/>";

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

print_r(json_decode($jsonobj));

echo "<br/>";


function maiorMenorIdade($idade){
    if($idde<18){
        echo "Menor de idade";
        return;
    }
    echo "Maior de Idade";
}

maiorMenorIdade(25);

echo "<br/>";

// for($i=0;$i<5;$i++){
//     echo $i+1 .". Olá <br/>";
    
// }


// $i=0;
// while($i<10){
//     echo $i. ". Olá <br/>";
//     $i++;
// }

// $i++;
// do{
//     echo $i.".Olá <br/>";
//     $i++;
// }while($i<10);

// $notas = [9,8,7,8.6];

// foreach($notas as $nota){
//     echo $nota. "<br/>";
// }
// echo "<br/> <br/>";

// foreach($notas as $indice => $nota){
//     echo $indice . "Indice <br/>";
// }


echo file_get_contents("arquivo.pdf");