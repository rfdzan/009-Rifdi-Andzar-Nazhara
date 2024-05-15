<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $appUrl = env('APP_URL');
        $routes = ['/', '/registration', '/fulan'];
        foreach ($routes as $route) {
            $response = $this->get($route);
            if ((int)$response()->status() !== 200) {
                echo $appUrl . $route . '(FAILED) route did not return 200';
                $this->assertTrue(false);
            } else {
                echo $appUrl . $route . '(SUCCESS) route returned 200';
                $this->assertTrue(true);
            }
        }
    }
}
