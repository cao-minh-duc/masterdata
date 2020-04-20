<?php

namespace CaoMinhDuc\Masterdata\Tests;

use Orchestra\Testbench\TestCase;
use CaoMinhDuc\Masterdata\MasterdataServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [MasterdataServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
