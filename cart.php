<?php
session_start ();
if (empty($_SESSION['loginname'])) {
  header ('location: login.php');
}
?>
<?php require 'inc/head.php'; ?>

<section class="cookies container-fluid">
  <div class="row">
<?php
  $cookie_id='id';
  if (isset($_GET['id'])) {
    echo "<h2>Le produit a bien été ajouté à votre panier.</h2>
    <br>
    <h2>Voici le récapitulatif de votre panier</h2>";
    $_COOKIE = $_GET['id'];
    setcookie($cookie_id, $_COOKIE, time() + (86400 * 30), "/"); // 86400 = 1 day
    if($_COOKIE=='36') {
      echo "<h3>Chocolate chips</h3> <p>Cooked by Bernadette !</p>";
    }
    if($_COOKIE=='46') {
      echo "<h3>Pecan nuts</h3> <p>Cooked by Penny !</p>";
    }
    if($_COOKIE=='58') {
      echo "<h3>Chocolate cookie</h3> <p>Cooked by Bernadette !</p>";
    }
    if($_COOKIE=='32') {
      echo "<h3>M&M's&copy; cookies</h3> <p>Cooked by Penny !</p>";
    }
  }
  else {
    echo "<h2>Votre panier est vide</h2>";
  }

?>

  </div>
  <a href="deconnexion.php" onClick="">Se déconnecter</a>
</section>

<?php require 'inc/foot.php'; ?>
