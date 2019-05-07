<form action="index.php?page=registration" method="post">
  <div>
    <label for="nom">Nom&nbsp;:</label>
    <input type="text" name="nom" placeholder="Nom" required />
  </div>
    <div>
      <label for="prenom">Prénom&nbsp;:</label>
      <input type="text" name="prenom" placeholder="Prénom" required />
    </div>
      <div>
        <label for="email">E-mail&nbsp;:</label>
        <input type="mail" name="email" placeholder="adresse e-mail" required />
      </div>
        <div>
          <label for="passwd">Mot de passe&nbsp;:</label>
          <input type="password" name="passwd" required />
        </div>

        <div>
          <input type="reset" value="Effacer"/>
            <input type="submit" value="Envoyer"/>
        </div>
        <input type="hidden" name="validation" />
</form>
