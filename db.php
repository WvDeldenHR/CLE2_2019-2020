<?php
  $con = mysqli_connect("localhost","root","","cle2_database");

  if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql = "SELECT first_name_parent, last_name_parent, email, phone_number, first_name_child, age_day, age_month, age_year, gender 
          FROM user_data 
          ORDER BY first_name_parent";

  $result = mysqli_query($con, $sql);
  
  $row = mysqli_fetch_assoc($result);
  
  // Free result set
//  mysqli_free_result($result);

//  mysqli_close($con);
?> 