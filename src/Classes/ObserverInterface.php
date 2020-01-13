<?php
namespace Observer\Classes;

interface ObserverInterface
{
    public function run(array $parameters) : void;
}
