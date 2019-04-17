<div class=" container " style="margin-top:50px;"  >
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card">
                <div class="card-header bg-light  ">
                    <div class="row align-items-stretch">
                        <div class="col-4 mt-1">
                            <h5>Nouvelle question</h5>
                        </div>
                        
                        <div class="col-3 offset-5 ">
                            <form  action=  <?php echo(__BASE_URL ."/index.php?controller=enseignant&action=validateCreationTextQuestion") ?>  method="post" >

                            <select class="browser-default custom-select" name="DUREE">
                                    <option value="" disabled >Choisissez la durée</option>
                                    <option value="30" selected>30 secondes</option>
                                    <option value="60">1 minutes</option>      
                                    <option value="120">2 minutes</option>
                                    <option value="300">5 minutes</option>
                                    <option value="600">10 minutes</option>
                                    <option value="">libre</option>
                                </select>
                        
                        </div>
                    </div>
                    
                </div>
                <div class="card-body ">
                        <input type="text" name="ENONCER" class="form-control mb-5" placeholder="Ecrivez votre question ici">
                       
                        <input type="text" name="CORRECTION" class="form-control mb-4 ml-3 " placeholder="Ecrivez la bonne réponse" style="width:80%;">

                   
                </div>
                <div class="card-footer text-muted" >
                    



                <div class="row align-items-stretch" >
                        <div class="col-3">
                        <button class="btn btn-primary  btn-block" type="button" onclick="history.back()">Précédent</button>

                        </div>
                        
                        <div class="col-2 offset-7  ">
                            <button class="btn btn-primary  btn-block" type="submit">Créer</button>
                        </div>
                    </div>
                    </form>



                </div>    
            </div>
        </div>
    </div>
</div>
