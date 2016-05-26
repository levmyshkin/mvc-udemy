<?php

namespace Core;

/**
 * Error and exception handler.
 */
class Error {

  /**
   * Error handler. Convert all errors to Exceptions by throwing an ErrorExceprtion.
   */
  public static function errorHandler($level, $message, $file, $line) {
    if (error_reporting() !== 0) {
      throw new \ErrorException($message, 0, $level, $file, $line);
    }
  }

  /**
   * Exception handler.
   */
  public static function exceptionHandler($exception) {
    print '<h1>Fatal error</h1>';
    print '<p>Uncaught exception: "' . get_class($exception) . '"</p>';
    print '<p>Message: "' . $exception->getMessage() . '"</p>';
    print '<p>Stack trace:<pre>' . $exception->getTraceAsString() . '</pre>';
    print '<p>Thrown in "' . $exception->getFile() . '" on line' .
      $exception->getLine() . '</p>';
  }
}