<?php

namespace Luigel\LaravelTrait\Tests;

use Orchestra\Testbench\TestCase;
use Luigel\LaravelTrait\LaravelTraitServiceProvider;

class GenerateTraitTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [LaravelTraitServiceProvider::class];
    }


    public function testCanGenerateTrait()
    {
        $this->artisan('make:trait TestTrait');

        $this->assertFileExists(base_path('app/Traits/TestTrait.php'));
    }

    public function testGeneratedTraitHasCorrectContent()
    {
        $this->artisan('make:trait TestTrait');
        $contents = file_get_contents(base_path('app/Traits/TestTrait.php'));
        $this->assertNotFalse(strpos($contents, 'trait TestTrait'));
    }
}
