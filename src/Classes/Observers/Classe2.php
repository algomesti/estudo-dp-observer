<?php
declare(strict_types=1);

namespace Observer\Classes\Observers;

use Observer\Classes\ObserverAbstract;

class Classe2 extends ObserverAbstract
{
    public function run(array $parameters) : void
    {
        printf("\n\nExecutada funcao %s com parametros %s", __CLASS__, json_encode($parameters));
    }
}
