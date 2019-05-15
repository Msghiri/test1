<?php
// tests/Controller/PostControllerTest.php
namespace App\tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostControllerTest extends WebTestCase
{
    public function testShowPost()
    {
        $client = static::createClient();

        //$client->request('GET', '/lucky/number/60');

        // L' objet crawler estune instancce de la classe Symfony\Component\DomCrawler\Crawler. 
        // Après chaque requête, l'objet retourné contient toutes les informations inhérentes au DOM (Document Object Model) de la page.
        // Coc Symfony : https://symfony.com/doc/current/testing.html#the-crawler
        $crawler = $client->request('GET', '/lucky/number/60');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $this->assertGreaterThan(0, $crawler->filter('html:contains("Hello World")')->count());
        
        $this->assertSame(1, $crawler->filter('html:contains("Hello World")')->count());
        
    }

    public function testShowPost2()
    {
        $client = static::createClient();
        $client->request('GET', '/lucky/number/60');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    
}