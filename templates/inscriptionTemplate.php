
<div class="container-fluid padding">
  <div class="row padding align-items-center">
    <div class="col-lg-7">
        
          <input class="form-control text-center " type="text" placeholder="chercher un questionnaire" aria-label="Search">
      
    </div>
    <div class="col-lg-5">
      <form  action=  <?php echo(__BASE_URL ."/index.php?controller=anonymous&action=validateInscription") ?>  method="post" class="text-center border border-light p-5">
        <p class="h4 mb-4">Inscription</p>
        <input type="text" name="inscLogin" class="form-control mb-4" placeholder="Login">
          <div class="form-row mb-4">
              <div class="col">
                  <input type="text" name="prenom" class="form-control" placeholder="Prenom">
              </div>
              <div class="col">
                  <input type="text" name="nom" class="form-control" placeholder="Nom">
              </div>
          </div>
          <input type="text" name="mail" class="form-control mb-4" placeholder="E-mail">
          <input type="password" name="inscPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
          <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
              At least 8 characters and 1 digit
          </small>
          <select class="browser-default custom-select mb-4" name="ROLE">
              <option value="" disabled >choisissez un role</option>
              <option value="enseignant" selected>Enseignant</option>
              <option value="Etudiant">Etudiant</option>
              
          </select>
          <button class="btn btn-info my-4 btn-block" type="submit">S'inscrire</button>
      </form>
    </div>
    
  </div>
</div>




