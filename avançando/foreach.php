<?php

$contasCorrentes =[

  '123.456.789-00' => [
    'nome' => 'Vinicius', 
    'saldo' => 1000
  ],
  '189.237.214-22' => [
    'nome' => 'Alberto', 
    'saldo' => 300
  ], 
  '222.313.123-51' => [
    'nome' => 'Maria', 
    'saldo' => 10000
  ]
];

$contasCorrentes['242.388.113-59'] = [
  'nome' => 'Claudia', 
  'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta) {
  echo $cpf . " " . $conta['nome'] . PHP_EOL;
}