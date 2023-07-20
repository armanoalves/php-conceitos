<?php

function sacar(array $conta, float $valor) : array 
{
  if($valor > $conta['saldo']) {
    exibeMensagem("Você não pode sacar esse valor");
  } else {
    $conta['saldo'] -= $valor;
  }
  return $conta;
}

function exibeMensagem(string $mensagem) : void
{
  echo $mensagem . '<br>';
}

function depositar(array $conta, float $valor) : array 
{
  if ($valor > 0) {
    $conta['saldo'] += $valor;
  } else {
    exibeMensagem('Depositos precisam ser positivos!'); //
  }
 return $conta;
}

function titularComLetrasMaiusculas(array &$conta) :void
{
  $conta['nome'] = mb_strtoupper($conta['nome']);
}

function exibeConta(array $conta) : void
{
  ['nome' => $titular, 'saldo' => $saldo] = $conta;
  echo "<li>Titular: $titular. Saldo: $saldo </li>";
}