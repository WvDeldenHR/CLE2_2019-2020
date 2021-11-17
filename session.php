<?php
    session_start();
    if (isset($_SESSION['email']) && $_SESSION['email'] == true) {
        include('auth.php');
        include('db.php');
        $sql = "SELECT first_name_parent, last_name_parent, email, phone_number, first_name_child, age_day, age_month, age_year, gender 
                FROM user_data 
                #WHERE id = 
                ORDER BY first_name_parent";
        $result = mysqli_query($con, $sql);
    } else {}
?>