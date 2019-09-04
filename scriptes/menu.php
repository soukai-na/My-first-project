<?php session_start(); ?>
<?php
$server = 'localhost';
$user = 'root';
$passwd = 'P@ssw0rd';

$conn = mysqli_connect($server, $user, $passwd, 'autorecrute');
if (!$conn) {
  echo "error:" . mysqli_connect_error();
}
$req = "SELECT * FROM menu";
$result = mysqli_query($conn, $req);
$sql = mysqli_fetch_array($result);
?>

<div id='acceuil'>
  <div id='auto'>
    <a href='autorecrute.php' style='background:white;'>
    <?php echo $sql['logo']; ?>
    </a>
  </div>
  <div id='title'>
    <form method='POST' action='emploi-et-stage.php'>
      <button name='connecter' style='background-color:<?php echo $color1; ?>'>
        <?php echo $sql['titre1']; ?>
      </button>
    </form>
    <form method='POST' action='metiers.php'>
      <button name='connecter' style='background-color:<?php echo $color2; ?>'>
        <?php echo $sql['titre2']; ?>
      </button>
    </form>
    <form method='POST' action='ils-recrutent.php'>
      <button name='connecter' style='background-color:<?php echo $color3; ?>'>
        <?php echo $sql['titre3']; ?>
      </button>
    </form>
    <form method='POST' action='cabinet-conseil.php'>
      <button name='connecter' style='background-color:<?php echo $color4; ?>'>
        <?php echo $sql['titre4']; ?>
      </button>
    </form>
    <form method='POST' action='salons.php'>
      <button name='connecter' style='background-color:<?php echo $color5; ?>'>
        <?php echo $sql['titre5']; ?>
      </button>
    </form>
    <form method='POST' action='actualite.php'>
      <button name='connecter' style='background-color:<?php echo $color6; ?>'>
        <?php echo $sql['titre6']; ?>
      </button>
    </form>
    <form method='POST' action='recruteurs.php'>
      <button name='connecter' style='background-color:<?php echo $color7; ?>'>
        <font color='red'><?php echo $sql['titre7']; ?></font>
      </button>
    </form>
  </div>

</div>