<?php
function connection()
{
  $host = 'localhost';
  $user = 'root';
  $pass = 'root';
  $database = 'zakatwps';
  $conn = mysqli_connect($host, $user, $pass, $database);
  return $conn;
}
function closeConnection($conn)
{
  mysqli_close($conn);
}
