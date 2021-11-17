<?php
    require('session.php');
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Chantal de Man</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/cdm-icon.png">
        <?php
            include('css/css.php');
        ?>
    </head>

    <body>
        <div class="wrapper">
            <div class="hm-header">
                <div class="hm-header-content">
                    <div class="hm-navbar">
                        <div class="hm-navbar-content">
                            <div class="hm-navbar-left">
                                <span class="hm-navbar-left-content hm-navbar-left-logo"><a href="index.php"><img src="img/ChantaldeManLogo.png"></a></span>
                                <span class="hm-navbar-left-content hm-navbar-left-link navbar-left1-color"><a href="inplannen.php">Inplannen</a></span>
                                <span class="hm-navbar-left-content hm-navbar-left-link navbar-left2-color hm-navbar-left-borders"><a href="over-mij.php">Over Mij</a></span>
                                <span class="hm-navbar-left-content hm-navbar-left-link navbar-left3-color"><a href="contact.php">Contact</a></span>
                            </div>
                            <div id="Sidenav" class="sidenav">
                                <a href="javascript:void(0)" class="closebtn" onclick="CloseSideNav()">&times;</a>
                                <a href="inplannen.php">Inplannen</a>
                                <a href="over-mij.php">Over Mij</a>
                                <a href="contact.php">Contact</a>
                            </div>
                            <div class="navbar-right-content-bars">
                                <div class="sidenav-bars">
                                    <span id="join">&#9776;</span>
                                </div>
                            </div>
                            <?php
                                if (isset($_SESSION['email'])) {
                                    include('lib/hm_navbar_account_active.php');
                                } else {
                                    include('lib/hm_navbar_account.php');
                                }
                            ?>
                        </div>
                    </div>

                    <div class="hm-header-imgtext">
                        <div class="hm-header-imgtext-content">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo ligula eget dolor. Aenean massa.
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                        </div>
                    </div>
                </div>
    
                <div class="hm-header-img hm-header-img-left">
                    <div class="hm-header-img-content "style="background-image: url('img/hmtopbg-left.jpg');"></div>
                </div>
                <div class="hm-header-img hm-header-img-right">
                    <div class="hm-header-img-content" style="background-image: url('img/hmtopbg-right.jpg');"></div>
                </div>
            </div>


            <div class="hm-content">
                <div class="hm-content-top">
                    <div class="hm-content-top-title">
                        Lorem ipsum dolor sit amet
                    </div>
                    <div class="hm-content-top-subtitle">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo ligula eget dolor. Aenean massa.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Donec quam
                    </div>
                </div>

                <div class="hm-content-colm">
                    <div class="hm-content-colm-row hm-content-colm-row-left">
                        <div class="hm-content-colm-row-img">
                            <img src="img/hm-inpln-img.jpg">
                            <!--<a href="https://www.freepik.com/free-photos-vectors/calendar">Calendar photo created by rawpixel.com - www.freepik.com</a>-->
                        </div>
                        <div class="hm-content-colm-row-txtbox">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo ligula eget dolor. Aenean massa.
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                        </div>
                        <a class="hm-content-colm-row-btn hm-btn-left" href="inplannen.php">Inplannen</a>
                    </div>
                    <div class="hm-content-colm-row">
                        <div class="hm-content-colm-row-img">
                            <img src="img/hm-overmij-img.jpg">
                            <!--<a href="https://www.freepik.com/free-photos-vectors/kids">Kids photo created by freepik - www.freepik.com</a>-->
                        </div>
                        <div class="hm-content-colm-row-txtbox">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo ligula eget dolor. Aenean massa.
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                        </div>
                        <a class="hm-content-colm-row-btn hm-btn-center" href="over-mij.php">Over Mij</a>
                    </div>
                    <div class="hm-content-colm-row">
                        <div class="hm-content-colm-row-img">
                            <img src="img/hm-contact-img.jpg">
                        </div>
                        <div class="hm-content-colm-row-txtbox">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo ligula eget dolor. Aenean massa.
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                        </div>
                        <a class="hm-content-colm-row-btn hm-btn-right" href="contact.php">Contact</a>
                    </div>
                </div>

                <div class="hm-content-btm">
                    <div class="hm-content-btm-img">
                        <img src="img/hmbtmimg.jpg">
                        <!--<a href="https://www.freepik.com/free-photos-vectors/education">Education photo created by freepik - www.freepik.com</a>-->
                    </div>
                    <div class="hm-content-btm-txtbox">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo ligula eget dolor. Aenean massa.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                    </div>
                </div>
            </div>

            <?php
                include('lib/footer.php');
            ?>
            <script src="js/script.js"></script>
        </div>
    </body>
</html>