<?php

  /**
   * FILE: dbconf.php
   * PURPOSE: allows PHP to create a server connection, so that queries can
   * happen using mySQLi commands.
   */

  //set the variables, server name, username, password, database name
  $server = 'localhost';
  $user = 'admin';
  $password = 'molyterf';
  $db = 'CheckInSystem';

  //create the connection using preset variables from above
  $db_con = mysqli_connect($server,$user,$password,$db);

  //check connection, notify if failure
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  //these are the variables that will be used within the queries
  //the table name is Holderness
  //the first column is the Student ID Number
  //the second column is the student's first name
  //the final column is the student's last name
  //all of this can be changed, but be sure the queries reflect any changes
  $table_name = 'Holderness';
  $column1 = 'id';
  $column2 = 'fname';
  $column3 = 'lname';

?>
