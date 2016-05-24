<?php

/**
 * Check the database connection details is OK
 */

/**
 *
 */
$host = "localhost";
$db_name = "framework";
$user = 'root';
$password = '';

/**
 * Create connection.
 */
$conn = new mysqli($host, $user, $password, $db_name);

/**
 * Check the connection.
 */
if ($conn->connect_error) {
  print 'Connection failed: ' . $conn->connect_error;
}
else {
  print 'OK';
}
