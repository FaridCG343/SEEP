<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Enum\Rol;
use App\Models\User;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $this->artisan('migrate:fresh');
        $this->seed();
        $user = User::where('rol', Rol::Administrador)->first();
        $response = $this->actingAs($user)->get('/dashboard');

        $response->assertStatus(200);
    }
}
