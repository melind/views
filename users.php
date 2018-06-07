
<?php
  include($appRoot.'/controllers/users.php');
?>

<h3>Les utilisateurs sont :</h3>

<div>
  <?php
  echo htmlspecialchars($_POST['name']); /* evite que du code soit executé + possibilite d'utiliser fonction strip_tags pour ne pas afficher les balises*/
  echo $_POST['case'];/*affiche on si cohé*/
if (isset($_FILES['img']) /*(isset verifie)*/AND $_FILES['img']['error'] == 0)/*s'il y a erreur*/
{
  if ($_FILES['img']['size'] <= 8000000)/*=8Mo*/
        {
          $infosfichier = pathinfo($_FILES['img']['name']);
          $extension_upload = $infosfichier['extension']; /*variable qui contiendra autre variable*/
          $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees)) /*in_array = fonvtion*/
                {

                }
        }
}
    foreach ($users as $user) {
      echo "- ".$user['name']."<br />";
    }
  ?>
</div>
