<?php
/**
 * @author Ethan Hann <ethanhann@gmail.com>
 */

namespace Ehann\FrontendBundle\Tests\Twig;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Ehann\FrontendBundle\Twig\EhannFrontendTwigExtension;

class EhannFrontentTwigExtensionTest extends WebTestCase
{
    public function testIniRuntime()
    {
        $client = static::createClient();
        $ext = new EhannFrontendTwigExtension($client->getContainer());

        $environment = new \Twig_Environment();
        $ext->initRuntime($environment);
    }

    public function testGetGlobals()
    {
        $client = static::createClient();
        $ext = new EhannFrontendTwigExtension($client->getContainer());

        $twigGlobals = $ext->getGlobals();
        $this->assertGreaterThan(0, count($ext->getGlobals()));
        $this->assertArrayHasKey('ehann_frontend_default_layout', $twigGlobals);
        $this->assertEquals($twigGlobals['ehann_frontend_default_layout'], 'EhannFrontendBundle:layouts:bootstrap.html.twig');
    }

    public function testGetName()
    {
        $client = static::createClient();
        $ext = new EhannFrontendTwigExtension($client->getContainer());

        $extensionName = $ext->getName();
        $this->assertEquals($extensionName, 'ehann_frontend_twig');
    }
}
