<?php

declare(strict_types=1);

namespace Hello;

/**
 * Class that represents the string "Hello World"
 */
class HelloWorld
{
    protected ?string $string = null;

    public function __construct(string $string = null)
    {
        $this->string = $string;
    }

    public function __toString(): string
    {
        $string = "World";

        if (!empty($this->string)) {
            $string = $this->string;
        }

        return "Hello " . $string . "!";
    }
}
