<?php

namespace App\Controllers;

/**
 * Home Controller
 */
class Home extends \Core\Controller {
  /**
   * Show the index page.
   *
   * @return void
   */
  public function index() {
    print 'Hello from the index action in the Home controller!';
  }
}