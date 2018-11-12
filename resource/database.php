<?php
//initialse varibales to hold connection parameters
$dsn = 'mysql:host=localhost; dbname=studentl641';
$username = 'studentL641';
$password = 'Web9324!';
  try
    {
      //create an instance of the PDO class with the required parameters
      $db = new PDO($dsn, $username, $password);
      //set pdo error mode to exception
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //display success message
      //echo "Connected to the database";
    }
  catch (PDOException $ex)
    { //display error message
      die "Connection failed".$ex->getMessage();
    }
?>
