<div class="hm-navbar-right">
    <span class="hm-navbar-right-content-acc-active" onclick="AccountBoxOpen()">
        <button>
            <span class="navbar-acc-user">
                <?php echo $_SESSION['first_name_parent'],' ', $_SESSION['last_name_parent']?>
            </span>
            <img class="navbar-acc-circle" src="img/user-img.jpg">
        </button>
    </span>
</div>

<div id="AccountBox" class="hm-navbar-account-box">
    <div class="hm-navbar-account-box-triangle"></div>
    <div class="navbar-account-box-content">

        <div class="navbar-account-box-dashboard hm-abd">
            <a href="dashboard-user.php">
                <div class="navbar-account-box-dashboard-content">
                    <img src="img/account-icon-alt.png">
                    <span class="navbar-account-box-dashboard-name">Account</span>
                </div>
            </a>
            <a href="inplannen.php">
                <div class="navbar-account-box-dashboard-content">
                    <img src="img/planning-icon-alt2.png">
                    <span class="navbar-account-box-dashboard-name">Inplannen</span>
                </div>
            </a>
            <a href="dashboard-settings.php">
                <div class="navbar-account-box-dashboard-content" style="margin-bottom: 10px">
                    <img src="img/settings-icon-alt.png">
                    <span class="navbar-account-box-dashboard-name">Instellingen</span>
                </div>
            </a>

            <a href="logout.php">
                <div class="navbar-account-box-dashboard-content" style="border-top: 1px solid #bdbdbd;">
                    <img src="img/logout-icon-alt.png">
                    <span class="navbar-account-box-dashboard-name">Uitloggen</span>
                </div>
            </a>
            <button type="button" class="btn cancel" onclick="AccountBoxClose()">Close</button>
        </div>
    </div>
</div>