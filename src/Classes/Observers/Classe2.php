<?php
declare(strict_types=1);

namespace Observer\Classes\Observers;

use Observer\Classes\ObserverAbstract;
use Observer\Classes\ObserverInterface;

class Classe2 implements ObserverInterface
{
    public function notify(array $parameters) : void
    {
        printf(
            "%s%s%s%s%s%s%s",
            "\n\t" . str_repeat("-", 70),
            "\n\t" . __CLASS__,
            "\n\t" . str_repeat("-", 70),
            "\n\t\tChamada: " . __METHOD__,
            "\n\t\tParameters: "  . json_encode($parameters),
            "\n\t" . str_repeat("-", 70),
            "\n"
        );
    }
}
