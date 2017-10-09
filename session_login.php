<?php

// on teste si nos variables sont définies
if (isset($_POST['loginname']) && !empty($_POST['loginname'])) {
    // on démarre la session
    session_start ();
    // on enregistre les paramètres de notre visiteur comme variables de session
    $_SESSION['loginname'] = $_POST['loginname'];
    echo "vous êtes connecté";

    // on redirige notre visiteur vers la page index.php
    header ('location: index.php');
  }
  else {
    echo "vous devez vous connecter";
  }


?>
