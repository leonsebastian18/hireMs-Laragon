<?php


namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Providers\RouteServiceProvider; // para la redirección HOME
use App\Models\User;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get(route('register'));
        $response->assertStatus(200);
    }

    public function test_new_users_can_register()
    {
        $response = $this->post(route('register'), [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',                // en local está bien; en producción usa reglas más estrictas
            'password_confirmation' => 'password',
        ]);

        // se autentica y se creó el usuario en la BD
        $this->assertAuthenticated();
        $this->assertDatabaseHas('users', ['email' => 'test@example.com']);

        // redirección esperada (por defecto Breeze usa RouteServiceProvider::HOME)
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    public function test_registration_requires_unique_email_and_valid_password()
    {
        // crear usuario previo para probar unicidad
        User::factory()->create(['email' => 'exists@example.com']);

        $response = $this->from(route('register'))->post(route('register'), [
            'name' => 'Another',
            'email' => 'exists@example.com', // ya existe
            'password' => 'short',
            'password_confirmation' => 'short',
        ]);

        // esperamos volver al formulario con errores en sesión
        $response->assertRedirect(route('register'));
        $response->assertSessionHasErrors(['email', 'password']);
    }
}
