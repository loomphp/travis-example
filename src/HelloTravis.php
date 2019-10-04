<?php

declare(strict_types=1);

namespace Loom\Travis;

use InvalidArgumentException;

class HelloTravis
{

    private $greeting;

    public function __construct(string $greeting = null)
    {
        $this->greeting = $greeting;
    }

    public function setGreeting(?string $greeting)
    {
        if ($greeting === '') {
            throw new InvalidArgumentException(
                'Invalid argument: $greeting must be a non-empty string or null'
            );
        }
        $this->greeting = $greeting;
    }

    public function getGreeting(): ?string
    {
        return $this->greeting;
    }
}
