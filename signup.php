<?php
    require('session.php');
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Chantal de Man - Signup</title>
        <link rel="icon" href="img/Cdm-icon.png">
		<?php
			include('css/css.php');
		?>
    </head>

    <body>
        <?php
            require('db.php');
            if (isset($_REQUEST['email'])){
                $first_name_parent = $_REQUEST['first_name_parent'];
                $last_name_parent = $_REQUEST['last_name_parent'];
                $email = $_REQUEST['email'];
                $password = $_REQUEST['password'];
                $passwordCheck = $_REQUEST['passwordCheck'];
                $phone_number = $_REQUEST['phone_number'];
                $first_name_child = $_REQUEST['first_name_child'];
                $age_day = $_REQUEST['age_day'];
                $age_month = $_REQUEST['age_month'];
                $age_year = $_REQUEST['age_year'];
                $gender = $_REQUEST['gender'];
                #$bijzonderheden = stripslashes($REQUEST['bijzonderheden']);
                #$bijzonderheden = mysqli_real_escape_string($con,$bijzonderheden);

                if ($password !== $passwordCheck) {
                    header ("Location: signup.php?error=wachtwoordherhaling");
                    exit();
                }

                elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header ("Location: signup.php?error=invalidemail");
                    exit();
                }

                elseif (!preg_match("/^[a-zA-Z]*$/", $first_name_parent)) {
                    header ("Location: signup.php?error=alleenletters1");
                    exit();
                }

                elseif (!preg_match("/^[a-zA-Z]*$/", $last_name_parent)) {
                    header ("Location: signup.php?error=alleenletters2");
                    exit();
                }

                elseif (!preg_match("/^[a-zA-Z]*$/", $first_name_child)) {
                    header ("Location: signup.php?error=alleenletters3");
                    exit();
                }

                elseif (!preg_match("/^[0-9]*$/", $phone_number)) {
                    header ("Location: signup.php?error=alleencijfers1");
                    exit();
                }

                elseif (!preg_match("/^[0-9]*$/", $age_day)) {
                    header ("Location: signup.php?error=alleencijfers2");
                    exit();
                }

                elseif (!preg_match("/^[0-9]*$/", $age_year)) {
                    header ("Location: signup.php?error=alleencijfers3");
                    exit();
                }
                
                else {
                   $sql = "SELECT email FROM user_data WHERE email=?";
                   $stmt = mysqli_stmt_init($con);
                   if (!mysqli_stmt_prepare($stmt, $sql)) {
                       header ("Location: signup.php?error=sqlerror1");
                       exit();
                   }
                   else {
                        mysqli_stmt_bind_param($stmt, "s", $email);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_store_result($stmt);
                        $resultCheck = mysqli_stmt_num_rows($stmt);
                        if ($resultCheck > 0) {
                            header ("Location: signup.php?error=emailingebruik");
                            exit();
                        }
                        else {
                            $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

                            $trn_date = date("Y-m-d H:i:s");
                            $query = "INSERT into `user_data` (first_name_parent, last_name_parent, email, password, phone_number, first_name_child, age_day, age_month, age_year, gender, trn_date) VALUES ('$first_name_parent', '$last_name_parent', '$email', '$hashedpassword', '$phone_number', '$first_name_child', '$age_day', '$age_month', '$age_year', '$gender', '$trn_date')";
                            $result = mysqli_query($con,$query);
                            if($result){
                                echo "<div class='page-content'><h3>You are registered successfully.</h3><br/>Click here to <a href='index.php'>Login</a></div>";
                            }
                        }
                    } 
                }
            }
            else{
        ?>

        <div class="wrapper">
            <div class="navbar">
                <div class="navbar-content">
                    <div class="navbar-left">
                        <div class="navbar-left-content navbar-left-logo"><a href="index.php"><img src="img/ChantaldeManLogo.png"></a></div>
                        <div class="navbar-left-content navbar-left-link navbar-left1-color"><a href="inplannen.php">Inplannen</a></div>
                        <div class="navbar-left-content navbar-left-link navbar-left2-color navbar-left-borders"><a href="over-mij.php">Over Mij</a></div>
                        <div class="navbar-left-content navbar-left-link navbar-left3-color"><a href="contact.php">Contact</a></div>
                    </div>
                    <div id="Sidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="CloseSideNav()">&times;</a>
                        <a href="inplannen.php">Inplannen</a>
                        <a href="over-mij.php">Over Mij</a>
                        <a href="contact.php">Contact</a>
                    </div>
                    <div class="navbar-right-content-bars">
                        <div class="sidenav-bars">
                            <span onclick="OpenSideNav()">&#9776;</span>
                        </div>
                    </div>
                </div>
            </div>

            
                <form class="signup-content" name="registration" action="" method="post">

                    <div class="signup-content-box scbl">
                        <div class="signup-parent"><div class="signup-title">Ouder</div>
                            <fieldset>
                                <legend class="signup-legend-name">Naam</legend>
                                    <input class="signup-name" type="text" name="first_name_parent" placeholder="Voornaam" required>
                                    <input class="signup-name" type="text" name="last_name_parent" placeholder="Achternaam" required>
                            </fieldset>
                                <legend class="signup-legend">Email</legend>
                                    <input class="signup-input" type="email" name="email" required>
                                <legend class="signup-legend">Wachtwoord</legend>
                                    <input class="signup-input" type="password" name="password" min-length="6" required>
                                <legend class="signup-legend">Wachtwoord Bevestigen</legend>
                                    <input class="signup-input" type="password" name="passwordCheck" min-length="6" required>
                                <legend class="signup-legend">Telefoon Nummer</legend>
                                    <input class="signup-input" type="text" name="phone_number" max-length="10" min-length>
                        </div>
                    </div>

                    <div class="signup-content-box scbr">   
                        <div class="signup-child"><div class="signup-title">Kind</div>
                            <legend class="signup-legend-name">Naam</legend>
                                <input class="signup-input" type="text" name="first_name_child" placeholder="Voornaam" required>
                            <legend class="signup-legend">Leeftijd</legend>
                                <input class="signup-age signup-day" name="age_day" type="text" max-length="2" placeholder="Dag">
									<select class="signup-age signup-month" name="age_month">
										<option value="" disabled="" selected="" hidden="">Maand</option>
										<option value="Januari">Januari</option>
										<option value="Februari">Februari</option>
										<option value="Maart">Maart</option>
										<option value="April">April</option>
										<option value="Mei">Mei</option>
										<option value="Juni">Juni</option>
										<option value="Juli">Juli</option>
										<option value="Augustus">Augustus</option>
										<option value="September">September</option>
										<option value="Oktober">Oktober</option>
										<option value="November">November</option>
										<option value="December">December</option>
                                    </select>
                                <input class="signup-age signup-year" name="age_year" type="text" min-length="4" max-length="4" placeholder="Jaar">
                            <legend class="signup-legend">Geslacht</legend>
                                <select class="signup-gender" name="gender">
                                    <option value="" disabled="" selected="" hidden="">Geslacht</option>
                                    <option value="Jongen">Jongen</option>
                                    <option value="Meisje">Meisje</option>
                                </select>
                        </div>
                        <div class="signup-button">
                            <input type="submit" name="submit" value="Account Aanmaken">
                        </div>
                    </div>
                </form>
            

            <?php } ?>

            <div class="dashboard-clear"></div>

            <?php
                include('lib/footer.php');
            ?>
        </div>
    </body>
</html>

<script>
    <?php
        include('js/script.js');
    ?>
</script>