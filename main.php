  <?php

// $nomes = ["Ana", "Bruno", "Carla", "Diogo", "Eduarda","Felipe", "Gabriela", "Heitor"];

// for($i = 0; $i <= 7; $i++){
//   echo "$nomes[$i] \n";
// }

// echo "Agora com o foreach \n";

// foreach($nomes as $nome){
//   if($nome == "Diogo"){
//    continue;
//   }else{
//     echo "$nome \n";
//   }
// }

$nomeseNotas = [
  ["Ana", 9.5, 8.3, 10.0],
  ["Bruno", 8.6, 5.4, 3.2],
  ["Carla", 4.5, 3.2, 6.8],
  ["Diego", 6.1, 5.9, 8.3],
  ["Eduarda", 8.6, 7.8, 7.9]

];

for ($i = 0; $i <= 4; $i++){
  for($j = 0; $j <= 3; $j++){
    echo $nomeseNotas[$i][$j] . "\n";
  }
}