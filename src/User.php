<?php

declare(strict_types=1);

namespace App;

final class User
{
    /** string */
    private const GREETING = "Hello";

    public function __construct(
        private string $name
    ) {
    }

    public function name(): string
    {
        return $this->name;
    }

    public function greet(): string
    {
        return self::GREETING . ' ' . $this->name();
    }
}
