<?php session_start(); ?>
<?php
$server = 'localhost';
$user = 'root';
$passwd = 'P@ssw0rd';

$conn = mysqli_connect($server, $user, $passwd, 'autorecrute');
if (!$conn) {
    echo "error:" . mysqli_connect_error();
}
$qer = "SELECT * FROM menu";
$sqliquery = mysqli_query($conn, $qer);
$lqs = mysqli_fetch_array($sqliquery);
?>

<div id='acceuil'>
    <div id='auto'>
        <form method='POST' action='connexion.php'>
            <input type='hidden' name='cnt'>
            <a href='connexion.php' style='background:white;'>
                <?php echo $lqs['logo']; ?>
            </a>
        </form>
    </div>
    <div id='title'>
        <form method='POST' action='cnx-emploi-et-stage.php'>
            <input type='submit' name='cnt' style='background-color:<?php echo $color1; ?>' value='<?php echo $lqs['titre1']; ?>'>
        </form>

        <form method='POST' action='cnx-metiers.php'>
            <input type='submit' name='cnt' style='background-color:<?php echo $color2; ?>' value=' <?php echo $lqs['titre2']; ?>'>
        </form>

        <form method='POST' action='cnx-ils-recrutent.php'>
            <input type='submit' name='cnt' style='background-color:<?php echo $color3; ?>' value='<?php echo $lqs['titre3']; ?>'>
        </form>

        <form method='POST' action='cnx-cabinet-conseil.php'>
            <input type='submit' name='cnt' style='background-color:<?php echo $color4; ?>' value=' <?php echo $lqs['titre4']; ?>'>
        </form>

        <form method='POST' action='cnx-salons.php'>
            <input type='submit' name='cnt' style='background-color:<?php echo $color5; ?>' value='<?php echo $lqs['titre5']; ?>'>
        </form>

        <form method='POST' action='cnx-actualite.php'>
            <input type='submit' name='cnt' style='background-color:<?php echo $color6; ?>' value='<?php echo $lqs['titre6']; ?>'>
        </form>

        <form method='POST' action='cnx-recruteurs.php'>
            <font color='red'><input type='submit' name='cnt' style='background-color:<?php echo $color7; ?>' value='<?php echo $lqs['titre7']; ?>'></font>
        </form>
    </div>

</div>