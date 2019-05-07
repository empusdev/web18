<form action="index.php?page=registration" method="post">
  <div>
    <label for="nom">Nom&nbsp;:</label>
    <input type="text" name="nom" placeholder="Nom" />
  </div>
    <div>
      <label for="prenom">Prénom&nbsp;:</label>
      <input type="text" name="prenom" placeholder="Prénom" />
    </div>
      <div>
        <label for="email">E-mail&nbsp;:</label>
        <input type="mail" name="email" placeholder="adresse e-mail" />
      </div>
        <div>
          <label for="passwd">Mot de passe&nbsp;:</label>
          <input type="password" name="passwd" />
        </div>

        <div>
          <input type="reset" value="Effacer" class="sub"/>
            <input type="submit" value="Envoyer" class="sub" />
        </div>
        <input type="hidden" name="validation" />
</form>
