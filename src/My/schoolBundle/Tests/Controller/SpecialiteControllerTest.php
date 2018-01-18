<?php

namespace My\schoolBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SpecialiteControllerTest extends WebTestCase
{
    public function testAddspecialite()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addSpecialite');
    }

    public function testListspecialite()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/listSpecialite');
    }

    public function testEditspecialite()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editSpecialite');
    }

}
