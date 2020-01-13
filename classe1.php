<?php
require_once 'observerInterface.php';

class classe1 implements observerInterface
{
    public function run(array $parameters) : void
    {
        printf("\n\nExecutada funcao %s com parametros %s", __CLASS__, json_encode($parameters));
    }
}
