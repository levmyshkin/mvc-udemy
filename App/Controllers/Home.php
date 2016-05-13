<?php

namespace App\Controllers;

use \Core\View;

/**
 * Home Controller
 */
class Home extends \Core\Controller {
  /**
   * Before filter.
   */
  protected function before() {

  }

  /**
   * After filter.
   */
  protected function after() {

  }

  /**
   * Show the index page.
   *
   * @return void
   */
  public function indexAction() {
    View::render('Home/index.php');
  }
}