<?php

namespace Database\Factories;

use App\Models\ApiKey;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ApiKeyFactory extends Factory
{
	protected $model = ApiKey::class;

	public function definition(): array
	{
		return [
            'user_id' => User::factory(),
            'type' => 'user',
            'name' => $this->faker->name,
            'key' => Str::random(40),
            'last_used_at' => $this->faker->dateTime(),
            'no_calls' => $this->faker->randomNumber(),
            'notes' => $this->faker->name,
            'is_default' => $this->faker->boolean,
            'usage' => $this->faker->word,
		];
	}
}
