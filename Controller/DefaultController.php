<?php
namespace MauticPlugin\MauticCampAfricaBundle\Controller;

use Mautic\CoreBundle\Controller\CommonController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends CommonController
{
	/**
	 * @Route("/campafricabundle")
	 */
	public function indexAction()
	{
		return $this->render('@MauticCampAfrica/index.html.php');
	}
}
