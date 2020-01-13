<?php
require_once 'observerAbstract.php';

class subject
{
    private $observers = [];
    public function __construct()
    {
    }

    public function subscribe($observerClass)
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
