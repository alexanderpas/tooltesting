<?php

declare(strict_types=1);

namespace Hello\Tests;

use Hello\HelloWorld;
use PHPUnit\Framework\TestCase;

final class HelloWorldTest extends TestCase
{
    public function testDefaultValue(): void
    {
        $hello = new HelloWorld();

        static::assertThat(
            (string) $hello,
            static::equalTo(
                "Hello World!"
            ),
        );
    }

    public function testCustomValue(): void
    {
        $hello = new HelloWorld('Alexander');

        static::assertThat(
            (string) $hello,
            static::equalTo(
                "Hello Alexander!"
            ),
        );
    }
}
