<?php

namespace kirillbdev\PHPSimpleTravis\Tests\Unit;

use kirillbdev\PHPSimpleTravis\Core\Kernel;
use PHPUnit\Framework\TestCase;

class KernelFeatureTest extends TestCase
{
    public function testNewFeature()
    {
        $kernel = new Kernel();

        $this->assertEquals(10, $kernel->newFeature());
    }
}