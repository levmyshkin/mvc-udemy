<?php

namespace App\Controllers\Admin;

/**
 * User admin controller.
 */
class Users extends \Core\Controller {
  /**
   * Before filter.
   */
  protected function before() {
    // Make sure an admin user is logged in for example
    // return FALSE;
  }

  /**
   * Show the index page.
   */
  public function indexAction() {
    print 'User admin index';
  }
}