<?php
declare(strict_types=1);

namespace Observer\Classes\Observers;

use Observer\Classes\ObserverInterface;

class Classe1 implements ObserverInterface
{
    public function run(array $parameters) : void
    {
        printf("\n\nExecutada funcao %s com parametros %s", __CLASS__, json_encode($parameters));
    }
}
