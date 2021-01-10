<?php

namespace kirillbdev\PHPSimpleTravis\Tests\Unit;

use kirillbdev\PHPSimpleTravis\Core\Kernel;
use PHPUnit\Framework\TestCase;

class SuperFeatureTest extends TestCase
{
    public function testFeature()
    {
        $kernel = new Kernel();

        $this->assertEquals(10, $kernel->feature());
    }
}