<?php
namespace MauticPlugin\MauticCampAfricaBundle;

use Mautic\IntegrationsBundle\Bundle\AbstractPluginBundle;


class MauticCampAfricaBundle extends AbstractPluginBundle
{
	public function defineRoutes(\Symfony\Component\Routing\RouteCollection $routes)
	{
		$loader = $this->container->get('routing.loader');
		$resource = '@MauticCampAfricaBundle/Controller/DefaultController.php';
		$type = 'annotation';
		$routeCollection = $loader->load($resource, $type);
		$routes->addCollection($routeCollection);
	}
}
