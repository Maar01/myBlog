<?php

namespace Incfile\MyBlog\Tests;

use Incfile\MyBlog\MyBlogServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            MyBlogServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetup($app)
    {
        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.connections.testing', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
    }

    protected function setUp(): void
    {
        parent::setUp();
    }
}
