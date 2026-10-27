<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HealthCheckTest extends TestCase
{
    use RefreshDatabase;

    public function test_application_returns_json_health_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertJsonPath('status', 'ready')
            ->assertJsonPath('stack.laravel', '13')
            ->assertJsonPath('stack.filament', '5');
    }
}
