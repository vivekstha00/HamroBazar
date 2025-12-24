<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function setUp(): void
    {
        parent::setUp();

        // Run migrations for the in-memory SQLite database used by phpunit.xml
        $this->artisan('migrate');
    }
}
