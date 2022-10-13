<?php

/**
 * FILE: reset.php
 * PURPOSE: this file resets the table back to its original configuration.
 * !!!IMPORTANT!!! once there has been a new enrollment of a student,
 * they will have to be manually entered into the query. The default format
 * here designed is: id, first name, last name. You are free to change
 * that to whatever you like.
 */

  //include the file that creates the connection to the database
  include('dbconf.php');

  //before we go into resetting the table, we just delete everything in it
  //to be completely sure it is being repopulated as it should be
  $sql = "TRUNCATE TABLE $table_name";

  //verifies if it worked or not
  if (!$rslt = mysqli_query($db_con, $sql)) {
        exit(mysqli_error($db_con));
  }


  //the basic statement: query = "INSERT INTO $table_name ($column1,$column2,$column3) VALUES ('id','first name','last name')";
  //it is very, very important these match
  //unfortunately this has to happen every time there is a new enrollment
  //in addition, when students are no longer enrolled, they must be manually removed
  //from this list as well.
  //so an example would be: ('0000000','John','Doe'),
  //only the last entry does not need the comma at the end!
  $query = "INSERT INTO $table_name ($column1,$column2,$column3) VALUES
    ('1111111','John','Kim'),
    ('2222222','Bob','Johnson'),
    ('3333333','Steve','Smith')
  "; //end of values

    //verifies if it worked or not
    if (!$result = mysqli_query($db_con, $query)){
      exit(mysqli_error($db_con));
    }

?>
