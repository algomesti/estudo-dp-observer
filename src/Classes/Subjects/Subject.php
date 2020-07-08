<?php
declare(strict_types=1);

namespace Observer\Classes\Subjects;

use Observer\Classes\ObserverInterface;

class Subject
{
    private $observers = [];

    public function __construct()
    {
        printf("%s %s", "\n", str_repeat("=", 80));
        printf("%s %s", "\n", __CLASS__);
        printf("%s %s", "\n", str_repeat("=", 80));
    }

    public function __destruct()
    {
        printf("%s %s %s", "\n", str_repeat("=", 80), "\n\n\n");
    }

    public function subscribe(ObserverInterface $observerClass)
    {
        $this->observers[] = $observerClass;
    }

    public function unSubscribe($observerClass)
    {
        $this->observers = array_filter(
            $this->observers,
            function ($observer) use ($observerClass) {
                if (get_class($observer) === get_class($observerClass)) {
                    return false;
                }
                return true;
            }
        );
    }

    public function imprime($parameters)
    {
        $this->notifyAll($parameters);
    }

    public function notifyAll($parameters)
    {
        foreach ($this->observers as $observer) {
            $observer->notify($parameters);
        }
    }
}
