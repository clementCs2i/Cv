<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
        'index' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::index'), array(), array(array('text', '/')), array(), array()),
        'contact' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::contact'), array(), array(array('text', '/contact')), array(), array()),
        'competences' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::competences'), array(), array(array('text', '/competences')), array(), array()),
        'experiences' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::experiences'), array(), array(array('text', '/experiences')), array(), array()),
        'projets' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::projets'), array(), array(array('text', '/projets')), array(), array()),
        'dlcv' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::dlcv'), array(), array(array('text', '/dlcv')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name && null !== $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
