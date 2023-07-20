<?php

require_once 'funcoes.php';

$contasCorrentes = [

  '123.456.789-00' => [
    'nome' => 'Vinicius', 
    'saldo' => 100
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

$contasCorrentes['123.456.789-00'] = depositar($contasCorrentes['123.456.789-00'], 900);

$contasCorrentes['189.237.214-22'] = sacar($contasCorrentes['189.237.214-22'], 500);

$contasCorrentes['222.313.123-51'] = sacar($contasCorrentes['222.313.123-51'], 500);

unset($contasCorrentes['189.237.214-22']);

titularComLetrasMaiusculas($contasCorrentes['222.313.123-51']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Contas correntes</h1>

  <dl>
    <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
    <dt>
      <h3><?= $conta['nome']?> - <?php echo $cpf; ?></h3>
     </dt>
    <dd>
      Saldo: <?= $conta['saldo']; ?>
    </dd>
    <?php } ?>
</dl>
</body>
</html>