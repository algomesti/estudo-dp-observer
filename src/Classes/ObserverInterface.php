<?php
namespace Observer\Classes;

interface ObserverInterface
{
    public function notify(array $parameters) : void;
}
