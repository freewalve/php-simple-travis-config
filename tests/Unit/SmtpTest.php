<?php

namespace kirillbdev\PHPSimpleTravis\Tests\Unit;

use kirillbdev\PHPSimpleTravis\Core\Kernel;
use PHPUnit\Framework\TestCase;

class SmtpTest extends TestCase
{
    public function testSmtp()
    {
        $kernel = new Kernel();

        $this->assertEquals(10, $kernel->smtp());
    }
}