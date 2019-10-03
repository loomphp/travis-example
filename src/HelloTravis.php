<?php

declare(strict_types=1);

namespace Loom\Travis;

class HelloTravis
{

    private $greeting = 'Hello Travis';

    public function __construct(string $greeting = null)
    {
        if ($greeting != null) {
            $this->greeting = $greeting;
        }
    }

    public function setGreeting(string $greeting)
    {
        $this->greeting = $greeting;
    }

    public function getGreeting(): string
    {
        return $this->greeting;
    }
}
