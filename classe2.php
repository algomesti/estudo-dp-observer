<?php
require_once 'observerAbstract.php';
class classe2 extends observerAbstract
{
    public function run(array $parameters) : void
    {
        printf("\n\nExecutada funcao %s com parametros %s", __CLASS__, json_encode($parameters));
    }
}
