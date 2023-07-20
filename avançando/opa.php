<?php
class MyClass {
    const CONST_VALUE = 'Um valor constante' . PHP_EOL;
}

$classname = 'MyClass';
echo $classname::CONST_VALUE;

echo MyClass::CONST_VALUE;
?>