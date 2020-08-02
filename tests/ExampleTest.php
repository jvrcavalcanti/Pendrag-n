<?php

namespace Tests;

use Accolon\Request\Client;
use Pendragon\Framework\Testing\Test;

class ExampleTest extends Test
{
    public function testExample(): void
    {
        $expect = [
            'users' => []
        ];
        $response = (new Client())->get('http://localhost:8000/users');
        $this->assertEquals(200, $response->getStatus());
        $this->assertEquals($expect, (array) $response->json());
    }
}
