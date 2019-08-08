<?php
$req = "SELECT * FROM accreditation";
$result = mysqli_query($conn, $req);
$sql = mysqli_fetch_array($result);
?>

    <div style='width:875;'>
        <font color='red' face='sans-serif'><b><?php echo $sql['titre'] ?></b></font>
        <hr>

        <p><?php echo $sql['texte1']; ?></br>
            <?php echo $sql['texte2']; ?></br>
            <?php echo $sql['tel']; ?></br></p>
        <button><?php echo $sql['button'] ?></button>
    </div>