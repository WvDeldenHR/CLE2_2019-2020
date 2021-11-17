<div class="inpln-box">
    <form class="inpln-form" action="" method="post">
        <legend>Datum</legend>
            <input class="inpln-input-date" type="date" name="res_date" placeholder="datum" required>
        <fieldset>
            <span><legend>Begin Tijd</legend>
                <input class="inpln-input-time" type="time" name="res_start" placeholder="start tijd" required></span>
            <span><legend>Eind Tijd</legend>
                <input class="inpln-input-time" type="time" name="res_end" placeholder="eind tijd" required></span>
        </fieldset>
            <input class="inpln-button" type="submit" name="submit" value="Reserveer">
    </form>
</div>


<?php
    require('db.php');

    if (isset($_REQUEST['res_date'])){
        $res_date = stripslashes($_REQUEST['res_date']);
        $res_date = mysqli_real_escape_string($con,$res_date);
        $res_start = stripslashes($_REQUEST['res_start']);
        $res_start = mysqli_real_escape_string($con,$res_start);
        $res_end = stripslashes($_REQUEST['res_end']);
        $res_end = mysqli_real_escape_string($con,$res_end);

        $query="INSERT into `reservations` (res_date, res_start, res_end) VALUES ('$res_date', '$res_start', '$res_end')";
        $result= mysqli_query($con,$query);
        if($result){
            echo "SUCCES";
           // header('Location: index.php');
        }else{
            echo "";
        }
?>



<?php
    }
?>