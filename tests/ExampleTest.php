<?php

namespace Tests;

use Accolon\Request\Client;
use Pendragon\Framework\Testing\TestService;

class ExampleTest extends TestService
{
    public function testExample(): void
    {
        $expect = [
            'users' => []
        ];
        $response = $this->client->get('/users');
        $this->assertEquals(200, $response->getStatus());
        $this->assertEquals($expect, (array) $response->json());
    }
}
