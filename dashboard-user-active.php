<div class="dashboard-top">
    <div class="dashboard-title">Mijn Account</div>
    <span class="dashboard-subtitle">Dashboard / </span><span class="dashboard-subtitle-color">Account</span>
</div>

<?php
    include('lib/dashboard_menu.php');
?>

<div class="dashboard-content">
    <div class="dashboard-content-title">Ouder</div>
        <div class="dashboard-content-subtitle">Naam</div>
        <span class="dashboard-content-user dashboard-content-user-name"><?php echo $_SESSION["first_name_parent"], " ", $_SESSION['last_name_parent']; ?></span>
        <span class="dashboard-content-change"><a href="">Wijzig</a></span>
            
        <div class="dashboard-content-subtitle">Email</div>
        <span class="dashboard-content-user"><?php echo $_SESSION["email"]; ?><span>
        <span class="dashboard-content-change"><a href="">Wijzig</a></span>

        <div class="dashboard-content-subtitle">Wachtwoord</div>
        <span class="dashbaord-content-user">********</span>
        <span class="dashboard-content-change"><a href="">Wijzig</a></span>

        <div class="dashboard-content-subtitle">Telefoon Nummer</div>
        <span class="dashboard-content-user"><?php echo $_SESSION["phone_number"]; ?></span>
        <span class="dashboard-content-change"><a href="">Wijzig</a></span>

    <div class="dashboard-content-title dct">Kind</div>
        <div class="dashboard-content-subtitle">Naam</div>
        <span class="dashboard-content-user dashboard-content-user-name"><?php echo $_SESSION["first_name_child"], " ", $_SESSION['last_name_parent']; ?></span>
        <span class="dashboard-content-change"><a href="">Wijzig</a></span>

        <div class="dashboard-content-subtitle">Leeftijd</div>
        <span class="dashboard-content-user"><?php echo $_SESSION["age_day"], " ", $_SESSION['age_month'], " ", $_SESSION["age_year"]; ?></span>

        <div class="dashboard-content-subtitle">Geslacht</div>
        <span class="dashboard-content-user"><?php echo $_SESSION["gender"];?></span>
</div>
<div class="dashboard-clear"></div>