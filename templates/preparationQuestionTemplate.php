<div style="height: 100vh">
<div class="container  h-100 "   >
    <div class="row h-75 align-items-center" >
        <div class="col-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <form  action=  <?php echo(__BASE_URL ."/index.php?controller=enseignant&action=createQuestion") ?>  method="post" class="text-center  ">
                        <div class="form-row align-items-center ">
                            <div class="col">
                                <select class="browser-default custom-select " name="typeQuestion">
                                    <option value="" disabled >Choisissez le type</option>
                                    <option value="QCM" selected>QCM</option>
                                    <option value="Texte">Texte</option>      
                                    <option value="appariement">Appariement</option> 
                                </select>
                            </div>
                            <div class="col">
                                <select class="browser-default custom-select " name="matiereQuestion">
                                    <option value="" disabled >choisissez la matiére</option>
                                    <option value="maths" selected>Maths</option>
                                    <option value="physiques">Physiques</option>
                                </select>
                            </div>
                            <div class="col">
                                <input type="text" name="sujetQuestion" class="form-control  " placeholder="ajouter un sujet" style="width:80%;">
                            </div>
                        </div>
            </div>
            <div class="card-footer text-muted" >
                <div class="row" >
                    <div class="col-2 offset-10 ">
                        <button class="btn btn-primary   btn-block" type="submit">Suivant</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>