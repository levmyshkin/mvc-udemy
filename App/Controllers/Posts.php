<?php

namespace App\Controllers;

/**
 * Posts controller
 */
class Posts extends \Core\Controller {
  /**
   * Show the index page.
   *
   * @return void
   */
  public function index() {
    print 'Hello from the index action in the Posts controller';
  }

  /**
   * Show the add new page.
   *
   * @return void
   */
  public function addNew() {
    print 'Hello from the addNew action in the Posts controller';
  }

  /**
   * Shoe the edit page.
   *
   * @return void
   */
  public function edit() {
    print 'Hello from the edit action in the Posts controller!';
  }
}