<h2>Contacter nous</h2>
<?php
if (isset($_POST['frmContact'])) {
  $nom = checkInput($_POST['nom']);
  $prenom = checkInput($_POST['prenom']);
  $telephone = checkInput($_POST['telephone']);
  $mail = checkInput($_POST['mail']);
  $msg = checkInput($_POST['msg']);

  $erreur = array();

  if ($nom === "")
    array_push($erreur, "Veuillez saisir votre nom");

  if ($prenom === "")
    array_push($erreur, "Veuillez saisir un prénom");

    if ($telephone === "")
    array_push($erreur, "Veuillez saisir un numéro de téléphone");

  if ($mail === "")
    array_push($erreur, "Veuillez saisir votre une adresse mail");

  if ($msg === "")
    array_push($erreur, "Veuillez saisir un message");

  if(count($erreur) > 0) {
    $message = '<ul>';

    for($i = 0 ; $i < count($serreur) ; $i++) {
      $message .= '<li>';
      $message .= $erreur[$i];
      $message .= '</li>';
    }

    $message .= '</ul>';

    echo $message;

    require 'frmContact.php';
  }

  else {
    $sql = "INSERT INTO clients
    (nom, prenom, telephone, email, message)
    VALUES ('" . $nom . "', '" . $prenom . "', '" . $telephone . "', '" . $mail . "', '" . $msg . "')";

    $query = $pdo->prepare($sql);
   $query->bindValue('nom', $nom, PDO::PARAM_STR);
   $query->bindValue('prenom', $prenom, PDO::PARAM_STR);
   $query->bindValue('telephone', $telephone, PDO::PARAM_STR);
   $query->bindValue('mail', $mail, PDO::PARAM_STR);
   $query->bindValue('message', $msg, PDO::PARAM_STR);
   $query->execute();
   echo "Enregistrement OK";
 }
}

else {
  $nom = $prenom = $mail = $telephone = $msg = "";
  require 'frmContact.php';
}
