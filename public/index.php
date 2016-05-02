<?php

/**
 * Front Controller
 */

/**
 * Routing
 */
require '../Core/Router.php';

$router = new Router();

// Add the routes.
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('{conroller}/{action}');
$router->add('admin/{action}/{conroller}');

// Match the requested route.
$url = $_SERVER['QUERY_STRING'];

if ($router->match($url)) {
  print '<pre>';
  print htmlspecialchars(print_r($router->getRoutes(), true));
  print '</pre>';

  var_dump($router->getParams());
}
else {
  print 'No route found for URL ' . $url;
}
