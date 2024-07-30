<?php

//uses(\Tests\TestCase::class);

test('Get all users', function () {
    $user = \App\Models\User::factory()->create();
    $response = $this->actingAs($user)
        ->get(route('api.users'));
    $response->assertStatus(200);
});
