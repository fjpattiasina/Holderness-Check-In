<?php

/**
 * FILE: delete.php
 * PURPOSE: takes input from the index.html page, using AJAX. Then accepts it
 * and checks to see if it exists in the database, if it does, it removes it
 * from the database.
 */

  //include the file that creates the connection to the database
  include "dbconf.php";

  //set the scanned ID as a variable
  $id = $_POST['id'];

  //checks to see if that id exists in the database, and if it does,
  //deletes it from the database.
  $rslt = "DELETE FROM $table_name WHERE $column1='$id'";
  if (!$result = mysqli_query($db_con, $rslt)) {
      exit(mysqli_error($db_con));
  }
?>
