<?php

test('Get all users', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
