<div class="wrap">
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

  <div class="tenor-gif-embed" data-postid="3439143" data-share-method="host" data-width="100%" data-aspect-ratio="2.2123893805309733"><a href="https://tenor.com/view/minions-happy-excited-celebration-standing-ovation-gif-3439143">Yeah - Minions GIF</a> from <a href="https://tenor.com/search/minions-gifs">Minions GIFs</a></div><script type="text/javascript" async src="https://tenor.com/embed.js"></script>
</div>
<div class="clear"></div>
