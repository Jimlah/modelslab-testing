<?php

//uses(\Tests\TestCase::class);

use App\Models\ApiKey;
use App\Models\User;

test('Get all users', function () {
    $user = User::factory()
        ->has(ApiKey::factory(), 'keys')
        ->create();

    $response = $this->get(route('api.users'),[
        "Accept" => "application/json",
        "Authorization" => "Bearer {$user->keys->first()->key}"
    ]);
    $response->assertStatus(200);
});
