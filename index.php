<?php

require "./vendor/autoload.php";

use Src\Fibonacci;

$fibo = new Fibonacci();

echo $fibo->calculate(3);
