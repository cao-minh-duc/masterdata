<?php

namespace CaoMinhDuc\Masterdata\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use CaoMinhDuc\Masterdata\MasterdataServiceProvider;

class TestCase extends BaseTestCase
{
    

    protected function getPackageProviders($app)
    {
        return [MasterdataServiceProvider::class];
    }
    
}
