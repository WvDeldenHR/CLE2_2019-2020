<?php
    require('session.php');
?>

<!DOCTYPE html>
<html lang=nl>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Chantal de Man - Kalender</title>
        <link rel="icon" href="img/Cdm-icon.png">
        <?php
            include('css/css.php');
        ?>
    </head>

    <body>
        <div class="wrapper">
            <div class="navbar">
                <?php
                    include('lib/navbar.php');
                ?>
            </div>
            <div class="dashboard">
                <?php
                    if (isset($_SESSION['email']) && $_SESSION['email'] == true) {
                        include('dashboard-calendar-active.php');
                    } else {
                        include('dashboard.php');
                    }
                ?>
            </div>
            
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