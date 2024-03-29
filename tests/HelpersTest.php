<?php

namespace Codedefective\CGHooks\Tests;

use PHPUnit\Framework\TestCase as PHPUnitTestCase;

class HelpersTest extends PHPUnitTestCase
{
    /**
     * @test
     */
    public function it_checks_os()
    {
        $this->assertIsBool(is_windows());
    }
}
