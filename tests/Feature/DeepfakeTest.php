<?php

use App\Models\ApiKey;
use App\Models\User;
use Illuminate\Support\Facades\Http;

test('can create single face swap', function (array $data, array $response) {

    Http::fake(['*' => $response]);

    $user = User::factory()
        ->has(ApiKey::factory(), 'keys')
        ->create();
    $this->actingAs($user)
        ->postJson(route('api.v1.deepfake.single-face-swap'), $data)
        ->assertSuccessful();
})->with('deepfake')
    ->with('deepfake-response');
