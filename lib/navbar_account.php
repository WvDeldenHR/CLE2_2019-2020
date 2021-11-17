<div class="navbar-right">
  <span class="navbar-right-content"><button onclick="document.getElementById('LoginBox').style.display='block'">Login</button></span>
  <span class="navbar-right-content navbar-right-signup"><a href="signup.php">Registreer</a></span>
  <img class="navbar-account-img" src="img/account-alt2.png" onclick="document.getElementById('LoginBox').style.display='block'">
</div>

<div id="LoginBox" class="loginbox">
	<form class="loginbox-box animate" action="" method="post" name="login">
		<div class="loginbox-content-closebtn">
			<span onclick="document.getElementById('LoginBox').style.display='none'" class="loginbox-closebtn">&times;</span>
		</div>

    <?php
      require('db.php');
      if (isset($_POST['email'])){
            
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        if (empty($email) || empty($password)) {
          header("Location: index.php?error=emptyfields");
        }
        else{
          $sql = "SELECT * FROM user_data WHERE email=?";
          $stmt = mysqli_stmt_init($con);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
              header("Location: index.php?error=sqlerror");
              exit();
          }
          else {
              mysqli_stmt_bind_param($stmt, "s", $email);
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);
              if ($row = mysqli_fetch_assoc($result)) {
                  $pwdCheck = password_verify($password, $row['password']);
                  if ($pwdCheck == false) {
                    header("Location: index.php?error=wrongpassword");
                    exit();
                  }
                  elseif ($pwdCheck == true) {
                    $_SESSION['uID'] = $row['id'];
                    $_SESSION['first_name_parent'] = $row['first_name_parent'];
                    $_SESSION['last_name_parent'] = $row['last_name_parent'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['password'] = $row['password'];
                    $_SESSION['phone_number'] = $row['phone_number'];
                    $_SESSION['first_name_child'] = $row['first_name_child'];
                    $_SESSION['age_day'] = $row['age_day'];
                    $_SESSION['age_month'] = $row['age_month'];
                    $_SESSION['age_year'] = $row['age_year'];
                    $_SESSION['gender'] = $row['gender'];

                    header("Location: index.php?login=success");
                  }
              }
              else{
                  header("Location: index.php?error=noaccount");
              }
          }
        }
      }
        else{
      ?>

		<div class="loginbox-content">
			<div class="loginbox-content-top">
				<input class="loginbox-content-input" type="text" name="email" placeholder="Email" required>
				<input class="loginbox-content-input" type="password" name="password" placeholder="Wachtwoord" required>
          <div class="loginbox-content-bottom">
            <label>
              <input class="loginbox-content-remember" type="checkbox"> Onthoud Mij
            </label>
              <a class="loginbox-content-forgot" href="">Wachtwoord vergeten?</a>
          </div>
					  <input class="loginbox-content-btn" type="submit" value="Aanmelden">
	  	</div>
			<div class="loginbox-content-signup">
			  <div>Nog geen account?	<a href="signup.php">Account Maken</a></div>
			</div>
		</div>
  </form>
</div>

<?php } ?>