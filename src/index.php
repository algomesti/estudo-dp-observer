<?php
declare(strict_types=1);

require_once '../vendor/autoload.php';

use Observer\Classes\Subjects\Subject;
use Observer\Classes\Observers\Classe1;
use Observer\Classes\Observers\Classe2;
use Observer\Classes\Observers\Classe3;

$array_parameters = [
    'campoa' => 'vl a',
    'campob' => 'vl b',
    'campoc' => 'vl c',
];



$subject = new Subject();

$classe1 = new Classe1();
$classe2 = new Classe2();
$classe3 = new Classe3();

$subject->subscribe($classe1);
$subject->subscribe($classe2);
$subject->subscribe($classe3);

$subject->imprime($array_parameters);

$subject->unSubscribe($classe2);

$subject->imprime($array_parameters);
