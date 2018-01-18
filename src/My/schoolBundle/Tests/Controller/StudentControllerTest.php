<?php

namespace My\schoolBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class StudentControllerTest extends WebTestCase
{
    public function testAddclasse()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addClasse');
    }

    public function testListclasse()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/listClasse');
    }

    public function testAddstudent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addStudent');
    }

    public function testListstudent()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/listStudent');
    }

}
