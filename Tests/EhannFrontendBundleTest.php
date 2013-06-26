<?php

namespace Ehann\FrontendBundle\Tests;

use Ehann\FrontendBundle\EhannFrontendBundle;

/**
 * Class EhannFrontendBundleTest
 *
 * @package Ehann\FrontendBundle\Tests
 */
class EhannFrontendBundleTest extends \PHPUnit_Framework_TestCase
{
    public function testBundle()
    {
        $bundle = new EhannFrontendBundle();

        $this->assertInstanceOf('Symfony\Component\HttpKernel\Bundle\Bundle', $bundle);
    }
}