<?php

namespace Aizatto\Bundle\RouterDebugWebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
  /**
   * @Route("/")
   */
  public function indexAction()
  {
    $router = $this->get('router');
    $routes = array();
    foreach ($router->getRouteCollection()->all() as $name => $route) {
      $routes[$name] = $route->compile();
    }

    $content = $this->renderView(
      'RouterDebugWebBundle:Default:index.html.php',
      array(
        'routes' => $routes,
      )
    );
    return new Response($content);
  }
}
