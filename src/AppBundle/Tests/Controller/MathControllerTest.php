<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MathControllerTest extends WebTestCase
{
    public function testSum()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/sum');
    }

}
