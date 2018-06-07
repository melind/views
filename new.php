<form action="users.php" method="post" enctype="multipart/form-data"> <!-- action= cible la page de traitement des infos enctype = envoi fichier-->
  Name : <input type="text" name="name">
  Mail : <input type="text" name="mail">
  Mot de passe : <input type="text" name="pwd">
  Age : <input type="text" name="age">
  <input type="checkbox" name="case" id="case" /> <label for="case">Ma case à cocher</label><!--label = nom case coche aussi-->
</br>img profil : <input type="file" name="img"/>
  <input type="submit" value="Valider" />
</form>
