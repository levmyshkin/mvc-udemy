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
$router->add('posts/new', ['controller' => 'Posts', 'action' => 'new']);


