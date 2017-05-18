<?php

/**
 * FILE: read.php
 * PURPOSE: to read everything from the database, displaying the students
 * that have not yet been checked in. also allow for manually check in.
 */

  //include the file that creates the connection to the database
  include('dbconf.php');

  //initial creation of the table
  $table = "";
  $table .= '<div class="table-responsive">
    <table class="table">
    <thead>
    <tr>
    <th>Student ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    </tr>
    </thead>
    <tbody>';

  //send query to the database, selecting all remaining names in database
  //organize them by their last name A-Z
  $sql = "SELECT * FROM $table_name ORDER BY $column3";

  //for each existing student, append their ID, first name, and last name
  //the last thing is a button to manually remove a student from the table
  foreach($db_con->query($sql) as $row){
    $table .= '<tr>';
    $table .= '<td>'. $row['id'] . '</td>';
    $table .= '<td>'. $row['fname'] . '</td>';
    $table .= '<td>'. $row['lname'] . '</td>';
    $table .= '<td>';
    $table .= '</td>';
    $table .= '</tr>';
  }

  //print out this giant table
  echo $table;
?>
