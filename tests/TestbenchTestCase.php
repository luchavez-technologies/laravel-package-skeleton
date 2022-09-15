<?php

namespace :uc:vendor\:uc:package\Tests;

use Orchestra\Testbench\TestCase as Testbench;

/**
 * Class TestbenchTestCase
 *
 * @author :author_name <:author_email>
 */
abstract class TestbenchTestCase extends Testbench
{
    /**
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @return void
     */
    public function tearDown(): void
    {
       parent::tearDown();
    }

    /**
     * @param $app
     * @return string[]
     */
    protected function getPackageProviders($app): array
    {
        return [':uc:vendor\:uc:package\:uc:packageServiceProvider'];
    }
}
