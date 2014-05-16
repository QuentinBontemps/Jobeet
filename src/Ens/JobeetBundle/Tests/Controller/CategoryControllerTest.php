<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 15/05/14
 * Time: 16:36
 */

namespace Ens\JobeetBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CategoryControllerTest extends WebTestCase{

    public function testShow(){
        $client = static::createclient();

        $crawler = $client->request('GET', '/category/index');
        $this->assertEquals('Ens\JobeetBundle\Controller\CategoryController::showAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());
    }

} 