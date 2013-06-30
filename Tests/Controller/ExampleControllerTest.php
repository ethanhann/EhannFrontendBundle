<?php

namespace Ccit\FrontendBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ExampleControllerTest extends WebTestCase
{
    public function testBootstrap()
    {
        $client = static::createClient();
        $client->followRedirects(true);
        $client->request('GET', '/bootstrap');

        $this->assertEquals(
            200,
            $client->getResponse()->getStatusCode()
        );
    }

    public function testBase()
    {
        $client = static::createClient();
        $client->followRedirects(true);
        $client->request('GET', '/base');

        $this->assertEquals(
            200,
            $client->getResponse()->getStatusCode()
        );
    }
}
