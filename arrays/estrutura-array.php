<?php

$array = [
  1 => 'um',
  2 => 'dois',
  3 => 'tres',
];

$contador = 0;

foreach ($array as $numeral => $nomeDoNumero) {
  echo "$numeral em português é: $nomeDoNumero" . PHP_EOL;
  $contador++;
}

echo "Total: " . count($array) . PHP_EOL;

var_dump(array_is_list($array));