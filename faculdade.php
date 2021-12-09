<?php

$carros = ["fusca","corolla","uno","siena","fit","civic"];


//EXERCICIO A
echo "Todos os carros do Array: ";
echo "<br>";

for ($i=0; $i <=  count($carros)-1; $i++) {
    echo($carros[$i]);
    echo "<br>";
}
    echo "<br>";

// EXERCICIO B
echo "o último carro do conjunto é " . $carros[count ($carros)-1];
echo "<br>";


// EXERCICIO C
echo "o penúltimo carro do conjunto é " . $carros[count($carros)-2];
echo "<br>";

//EXERCICIO D
echo "o primeiro carro do conjunto é " . $carros[0];
echo "<br>";
echo "<br>";


//EXERCICIO E
sort ($carros);

echo "Nomes ordenados:";
echo "<br>";
for ($i=0; $i<= count($carros) -1; $i++) {
    echo $carros[$i];
    echo "<br>";

}
echo "<br>";

//EXERCICIO F

echo "Conjunto em ordem decrescente: ";
echo "<br>";
for ($i = count($carros)-1; $i >= 0; $i--) {
    echo $carros[$i];
    echo "<br>";
}
echo "<br>";
// EXERCICIO G
echo "Indice do carro atual: ";
echo "<br>";
echo $i;
































