<?php

namespace Ehann\FrontendBundle\Twig;

use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Twig extension to set default layout as twig global
 */
class EhannFrontendTwigExtension extends \Twig_Extension
{
    protected $container;
    protected $environment;

    /**
     *
     * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     *
     * @param \Twig_Environment $environment
     */
    public function initRuntime(\Twig_Environment $environment)
    {
        $this->environment = $environment;
    }

    /**
     * Returns array of Twig Global Variables
     *
     * @return array Twig Globals
     */
    public function getGlobals()
    {
        $defaultLayout = $this->container->getParameter('ehann_frontend.default_layout');

        return array(
            'ehann_frontend_default_layout' => $defaultLayout,
        );
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'ehann_frontend_twig';
    }
}