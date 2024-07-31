<?php

use App\Models\ApiKey;
use App\Models\User;

test('can create single face swap', function ($data) {
    $user = User::factory()
        ->has(ApiKey::factory(), 'keys')
        ->create();
    $this->actingAs($user)
    ->postJson(route('api.v1.deepfake.single-face-swap'), $data)
    ->assertSuccessful();
})->with('deepfake');
