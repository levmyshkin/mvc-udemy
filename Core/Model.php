<?php

namespace Core;

use PDO;
use App\Config;

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
      try {
        $dsn = 'mysql:host=' . Config::DB_HOST . ';dbname=' .
          Config::DB_NAME . ';charset=utf8';
        $db = new PDO($dsn, Config::DB_USER, Config::DB_PASSWORD);

        // Trhow an Exception when an error occurs.
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $db;
      }
      catch (PDOException $e) {
        echo $e->getMessage();
      }

    }
  }
}