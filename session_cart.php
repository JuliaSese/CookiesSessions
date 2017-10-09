<?php
session_start ();

// on teste si nos variables sont définies
if (isset($_SESSION['loginname']) && !empty($_SESSION['loginname'])) {
    echo "";
  }
  else {
    header ('location: login.php');
  }


?>
