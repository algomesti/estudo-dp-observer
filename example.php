<?php

require_once 'classe1.php';
require_once 'classe2.php';
require_once 'classe3.php';
require_once 'subject.php';

$subject = new subject();
$subject->subscribe(new classe1());
$subject->subscribe(new classe2());
$subject->subscribe(new classe3());

$subject->imprime(
    'Mandou Imprimir',
    [
        'campoa' => 'valora',
        'campob' => 'valorb',
        'campoc' => 'valorc',
        'campod' => 'valord',
    ]
);
