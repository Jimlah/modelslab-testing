<?php

use Illuminate\Support\Str;

test('can make request to ai agent', function ($data) {
    $user = \App\Models\User::factory()->create();
    $this->actingAs($user, 'api')
        ->postJson(route('api.v1.ai-agent.run'), $data)
        ->assertStatus(200);
})->with('ai-agent');
