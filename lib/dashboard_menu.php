<div class="dashboard-menu">
    <a href="dashboard-user.php">
        <div class="dashboard-menu-content">
            <img src="img/account-icon-alt.png">
            <span class="">Account</span>
        </div>
    </a>
    <?php 
    if($_SESSION['uID'] == 4 ) { echo
        "<a href=''>
            <div class='dashboard-menu-content'>
                <img src='img/admin-icon-alt.png'>
                <span class=''>Admin</span>
            </div>
        </a>";
    }else{}
    ?>
    <a href="dashboard-settings.php">
        <div class="dashboard-menu-content">
            <img src="img/settings-icon-alt.png">
            <span class="">Instellingen</span>
        </div>
    </a>
    <a href="dashboard-calendar.php">
        <div class="dashboard-menu-content">
            <img src="img/planning-icon-alt2.png">
            <span class="">Kalender</span>
        </div>
    </a>
    <a href="logout.php">
        <div class="dashboard-menu-content">
            <img src="img/logout-icon-alt.png">
            <span class="">Uitloggen</span>
        </div>
    </a>
</div>

<div class="dashboard-menu-scale">
    <a href="dashboard-user.php">
        <div class="dashboard-menu-content-scale">
            <img src="img/account-icon-alt.png">
        </div>
    </a>
    <a href="dashboard-settings.php">
        <div class="dashboard-menu-content-scale">
            <img src="img/settings-icon-alt.png">
        </div>
    </a>
    <a href="dashboard-calendar.php">
        <div class="dashboard-menu-content-scale">
            <img src="img/planning-icon-alt2.png">
        </div>
    </a>
    <a href="logout.php">
        <div class="dashboard-menu-content-scale">
            <img src="img/logout-icon-alt.png">
        </div>
    </a>
</div>