<?php
declare(strict_types=1);

namespace Observer\Classes\Subjects;

use Observer\Classes\ObserverAbstract;

class Subject
{
    private $observers = [];

    public function __construct()
    {
    }

    public function subscribe(ObserverAbstract $observerClass)
    {
        $this->observers[] = $observerClass;
    }

    public function unSubscribe()
    {
    }

    public function imprime(string $texto, $parameters)
    {
        echo "\n $texto";
        $this->notify($parameters);
    }

    public function notify($parameters)
    {
        foreach ($this->observers as $observer) {
            $observer->run($parameters);
        }
    }
}