<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'descrição' => Str::random(10),
            'senha' => static::$password ??= Hash::make('password'),
            'teachers_id' => Str::random(5),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            '' => null,
        ]);
    }
}
