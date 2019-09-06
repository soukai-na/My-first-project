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
    <a href='connexion.php' style='background:white;'>
    <?php echo $lqs['logo']; ?>
    </a>
  </div>
  <div id='title'>
    <form method='POST' action='cnx-emploi-et-stage.php'>
      <button name='cnt' style='background-color:<?php echo $color1; ?>'>
        <?php echo $lqs['titre1']; ?>
      </button>
    </form>
    <form method='POST' action='cnx-metiers.php'>
      <button name='cnt' style='background-color:<?php echo $color2; ?>'>
        <?php echo $lqs['titre2']; ?>
      </button>
    </form>
    <form method='POST' action='cnx-ils-recrutent.php'>
      <button name='cnt' style='background-color:<?php echo $color3; ?>'>
        <?php echo $lqs['titre3']; ?>
      </button>
    </form>
    <form method='POST' action='cnx-cabinet-conseil.php'>
      <button name='cnt' style='background-color:<?php echo $color4; ?>'>
        <?php echo $lqs['titre4']; ?>
      </button>
    </form>
    <form method='POST' action='cnx-salons.php'>
      <button name='cnt' style='background-color:<?php echo $color5; ?>'>
        <?php echo $lqs['titre5']; ?>
      </button>
    </form>
    <form method='POST' action='cnx-actualite.php'>
      <button name='cnt' style='background-color:<?php echo $color6; ?>'>
        <?php echo $lqs['titre6']; ?>
      </button>
    </form>
    <form method='POST' action='cnx-recruteurs.php'>
      <button name='cnt' style='background-color:<?php echo $color7; ?>'>
        <font color='red'><?php echo $lqs['titre7']; ?></font>
      </button>
    </form>
  </div>

</div>