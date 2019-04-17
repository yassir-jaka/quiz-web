<!-- <style>

/* .my-container {
  border: 10px solid green;
} */
.my-row {
  border: 3px solid red;
  height: 300px;
}

</style> -->
<style>
    
    .my-col {
        
    
    width: 100%;;
    
}
</style>

<div class=" container-fluid"   >

    <div class="row align-items-start" style="margin:30px;">
        <div class="col-7 ">
           
            <div class ="row ">


                <div class="col-6 my-col">
                    <div class="card  text-white bg-success mb-3 h-100" >
                        <div class="card-body">
                            <h5 class="card-title">Profil</h5>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-dark" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-3 my-col">
                    <div class="card text-center text-white bg-primary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Questinnaire</h5>
                            <p class="card-text">Créer un nouveau questionnaire</p>
                            <a href=<?php echo(__BASE_URL."/index.php?action=inscription")?>>
                                <img src="img/add.png">
                            </a>                        
                        </div>
                    </div>
                </div>

                <div class="col-3 my-col">
                    <div class="card text-center text-white bg-info mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Question</h5>
                            <p class="card-text">Créer une nouvelle question</p>
                            <a href=<?php echo(__BASE_URL."/index.php?controller=enseignant&action=prepareQuestion")?>>
                                <img src="img/add.png">
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class ="row ">
                <div class="col my-col" style="margin-top:30px;">
                    <div class="card text-center text-white bg-info mb-3 h-100">
                        <div class="card-body">
                            <h5 class="card-title">Questionnaires Populaires</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>  
            </div>

            

        </div>


        <div class="col-5 my-col align-items-start">
            <div class="card text-center text-white bg-dark mb-3 h-100  align-items-stretch"  >
                    <div class="card-body ">
                        <h5 class="card-title">nouveautéouveauté</h5>
                        <p class="card-text"> élève A a passé votte questionnaire BLABLA<br>élève A a passé votte questionnaire BLABLA<br>
                        élève A a passé votte questionnaire BLABLA<br>élève A a passé votte questionnaire BLABLA<br>
                        élève B a passé votte questionnaire BLABLA<br>élève A a passé votte questionnaire BLABLA<br>
                        élève C a passé votte questionnaire BLABLA<br>élève A a passé votte questionnaire BLABLA<br>
                        élève D a passé votte questionnaire BLABLA<br>élève A a passé votte questionnaire BLABLA<br>
                        </p>
                    </div>
                </div>  
        </div>
            
    </div>
</div>
        
    