<?php

namespace My\schoolBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EnseignantControllerTest extends WebTestCase
{
    public function testAddenseignant()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addenseignant');
    }

    public function testEditenseignant()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editenseignant');
    }

}
