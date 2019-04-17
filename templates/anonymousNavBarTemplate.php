<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="nav-brand" href="#"><img src="img/logoP.png"></a>
            <div>  
                
            <?php if (Request::getCurrentRequest()->getAction() == 'signIn') {?>
                <a href=<?php echo(__BASE_URL."/index.php?action=inscription")?>>
                    <button type="button" class="btn btn-outline-primary">Inscription</button>
                </a>
                <?php } 

            else {?> 
                <span class="navbar-text">vous êtes déjà inscrit?</span>
                <a href=<?php echo(__BASE_URL."/index.php?action=signIn")?>>
                    <button type="button" class="btn btn-outline-primary">Connection</button> 
                </a>    
            <?php }?>

            </div>
    </div>
</nav>


