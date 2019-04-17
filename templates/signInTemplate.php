<!-- <?php
  if(isset($inscErrorText))
  echo '<span class="error">' . $inscErrorText . '</span>';
  
?> -->
<div class="container-fluid padding">

  <div class="row justify-content-center">
  <form  action=  <?php echo (__BASE_URL."/index.php?controller=anonymous&action=validateConnection")?>  method="post" class="text-center border border-light p-5 ">
          <p class="h4 mb-4">Connexion</p>
          <input type="text" name="inscLogin" class="form-control mb-4" placeholder="Login">
            
            <input type="password" name="inscPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
            
                
            
            <button class="btn btn-info my-4 btn-block" type="submit">Se connecter</button>
        </form>

  </div>
</div>