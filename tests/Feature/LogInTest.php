<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class LogInTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_requires_email_and_password()
    {
        Livewire::test('log-in')
            ->call('login')
            ->assertHasErrors(['email' => 'required', 'password' => 'required']);
    }

    /** @test */
    public function it_requires_a_valid_email()
    {
        Livewire::test('log-in')
            ->set('email', 'invalid-email')
            ->call('login')
            ->assertHasErrors(['email' => 'email']);
    }

    /** @test */
    public function it_shows_an_error_for_invalid_credentials()
    {
        $this->artisan('migrate:fresh');
        $this->seed();
        $user = User::factory()->create([
            'email' => 'valid@example.com',
            'password' => bcrypt('valid-password'),
        ]);

        Livewire::test('log-in')
            ->set('email', 'valid@example.com')
            ->set('password', 'invalid-password')
            ->call('login')
            ->assertHasErrors(['email' => 'Credenciales incorrectas.']);
    }

    /** @test */
    public function it_redirects_on_successful_login()
    {
        $this->artisan('migrate:fresh');
        $this->seed();
        $user = User::factory()->create([
            'email' => 'valid@example.com',
            'password' => 'valid-password',
        ]);

        Livewire::test('log-in')
            ->set('email', 'valid@example.com')
            ->set('password', 'valid-password')
            ->call('login')
            ->assertRedirect('/dashboard');
    }
}
