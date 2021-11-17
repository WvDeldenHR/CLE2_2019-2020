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
    <?php
        if (isset($_SESSION['email'])) {
            include('lib/navbar_account_active.php');
        } else {
            include('lib/navbar_account.php');
        }
    ?>
</div>