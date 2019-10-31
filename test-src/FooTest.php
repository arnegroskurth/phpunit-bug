<?php

namespace Test;

use Test\Sub\BarTest;

class FooTest extends BarTest
{
    public function testBaz()
    {
        $this->assertTrue(true);
    }
}
