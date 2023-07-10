# php-conceitos

### Aula 01 

- PHP é uma linguagem de programação interpretada (embora por baixo dos panos aconteça uma "compilação");

- PHP é uma linguagem de propósito geral (para web, para desktop, para IOT, na linha de comando etc);

- O site oficial do PHP é https://php.net/;

- Para executar um código em PHP o seu interpretador precisa ser instalado antes;

- O arquivo principal de configuração é o `php.ini`;

- Para o PHP funcionar na linha de comando, o sistema operacional precisa encontrá-lo no `PATH`;

- O comando `php -v` imprime a versão do PHP instalado;

- O comando `php -a` abre o shell interativo (CLI);

- Arquivos PHP geralmente possuem a extensão `.php`.

### Aula 02 

- Uma variável tem um $ na frente e para atribuir um valor usamos =;

- O nome da variável não deve usar caracteres especiais;

- Para imprimir o valor de uma variável também usamos o comando echo;

- PHP dá suporte às operações matemáticas através dos seguintes operadores:
  - Soma: +
  - Subtração: -
  - Multiplicação: *
  - Divisão: /
  - Resto da divisão (módulo): %
  - Potência: **

- PHP possui tipos de dados como integer, double, string ou boolean (tipos primitivos);

- PHP descobre os tipos de variáveis dinamicamente (tipagem dinâmica);

- Utilizando gettype conseguimos descobrir o tipo de uma variável.

### Aula 03

- Para concatenar uma string com uma outra variável usamos o . (ponto);

- Podemos definir uma string com aspas simples(') ou duplas(");

- Para interpretar um valor da variável ou caractere especial dentro da string devemos usar aspas duplas;

- caracteres especias são:
  - Nova linha: `\n` ou `\r`;
  - Tab: `\t`.

- PHP possui uma constante para indicar uma quebra de linha: `PHP_EOL`.

### Aula 04

- Podemos tomar uma decisão no código através do `if`, `elseif` e `else`;

- `if` e `elseif` vão avaliar uma condição, se for verdadeira executam o bloco associado;

- O `if` é o primeiro comando, `elseif` e `else` são opcionais;

- O bloco `elseif` sempre precisa de um `if` antes;

- O bloco `else` sempre precisa de um `if` ou `elseif` antes -O bloco `else` só executa se nenhuma das condições anteriores forem verdadeiras;

- Através do `&&` (AND lógico) e do `||` (OR lógico) podemos avaliar mais de uma condição.

### Aula 05

- Existem algumas variações de laços, dentre elas:

  - `while` que possui uma condição de entrada;
  - `do-while` que possui uma condição de permanência (sempre executa o bloco pelo menos uma vez);
  - `for` que possui a declaração de uma variável, uma condição entrada e o increment;

- Dentro do bloco do laço podemos pular uma interação com o comando `continue`;

- Com o comando `break` podemos sair do laço;

- A variável `contador` normalmente se chama `i`.