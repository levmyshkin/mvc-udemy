<?php

namespace Core;

use PDO;

/**
 * Base model.
 */
abstract class Model {
  /**
   * Get the PDO database connection.
   */
  protected static function getDB() {
    static $db = NULL;

    if ($db === NULL) {
      $host = 'localhost';
      $dbname = 'framework';
      $username = 'root';
      $password = '';

      try {
        $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",
          $username, $password);

        return $db;
      }
      catch (PDOException $e) {
        echo $e->getMessage();
      }

    }
  }
}