<?php

namespace Core;

/**
 * View
 */
class View {
  /**
   * Render a view file.
   *
   * @param string $view The view file
   *
   * @return void
   */
  public static function render($view, $args = []) {
    extract($args, EXTR_SKIP);
    $file = '../App/Views/' . $view; // relative to Core directory.

    if (is_readable($file)) {
      require $file;
    }
    else {
      print $file . ' not found';
    }
  }

  /**
   * Render a view template using Twig.
   *
   * @param string $template The template file
   * @param array $args Associative array of data to display in the view. (optional)
   *
   * @return void
   */
  public static function renderTemplate($template, $args = []) {
    static $twig = NULL;

    if ($twig === NULL) {
      $loader = new \Twig_Loader_Filesystem('../App/Views');
      $twig = new \Twig_Environment($loader);
    }

    print $twig->render($template, $args);
  }
}