<?php
declare(strict_types=1);

require_once '../vendor/autoload.php';

//$loader = require '../vendor/autoload.php';
//$loader->addPsr4('Observer\\', __DIR__.'/src/');

use Observer\Classes\Subjects\Subject;
use Observer\Classes\Observers\Classe1;
use Observer\Classes\Observers\Classe2;
use Observer\Classes\Observers\Classe3;

$subject = new Subject();
$subject->subscribe(new Classe1());
$subject->subscribe(new Classe2());
$subject->subscribe(new Classe3());

$subject->imprime(
    'Mandou Imprimir',
    [
        'campoa' => 'valora',
        'campob' => 'valorb',
        'campoc' => 'valorc',
        'campod' => 'valord',
    ]
);
