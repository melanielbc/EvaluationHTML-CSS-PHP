<form action="index.php?page=contact" method="post">
  <fieldset>
    <legend>Entre tes données ici</legend>
  <div>
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" value="<?=$nom ?>"/>
  </div>
  <div>
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" value="<?=$prenom ?>"/>
  </div>
  <div>
    <label for="telephone">Téléphone :</label>
    <input type="text" name="telephone" id="telephone" value="<?=$telephone ?>"/>
  </div>
  <div>
    <label for="mail">e-mail :</label>
    <input type="email" name="mail" id="mail" value="<?=$mail ?>"/>
  </div>
  </fieldset>
  <fieldset>
  <div>
    <label for="msg">Message :</label>
    <textarea name="msg" id="msg"><?=$msg ?></textarea>
  </div>
  <div>
    <input type="submit" value="Clique ici pour me le transmettre" />
  </div>
  </fieldset>
  <input type="hidden" name="frmContact" />
</form>
