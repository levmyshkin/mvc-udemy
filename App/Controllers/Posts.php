<?php

namespace App\Controllers;

use \Core\View;

/**
 * Posts controller
 */
class Posts extends \Core\Controller {
  /**
   * Show the index page.
   *
   * @return void
   */
  public function indexAction() {
    View::renderTemplate('Posts/index.html');
  }

  /**
   * Show the add new page.
   *
   * @return void
   */
  public function addNewAction() {
    print 'Hello from the addNew action in the Posts controller';
  }

  /**
   * Shoe the edit page.
   *
   * @return void
   */
  public function editAction() {
    print 'Hello from the edit action in the Posts controller!';
  }
}