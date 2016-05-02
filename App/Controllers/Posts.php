<?php

namespace App\Controllers;

/**
 * Posts controller
 */
class Posts {
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
}