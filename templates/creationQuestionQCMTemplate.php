<script type="text/javascript">
	var optionId=5;
	function optionId(){
        return 'optionId';
    }
	function addLinkIn($elem){
        var ch = "'option"+optionId+"'";
        var x = '<div class="row align-items-center mt-4 " id="option'+optionId+'"> <div class="col-10" ><div class="custom-control custom-checkbox"><input type="hidden" name="checkbox'+optionId+'" value="0" /><input type="checkbox" value="1" class="custom-control-input" id="checkbox'+optionId+'" name="checkbox'+optionId+'" ><label class="custom-control-label  "  for="checkbox'+optionId+'" style="width:100%;"><input type="text" name="Option'+optionId+'" class="form-control   " placeholder="Option '+optionId+'"   ></label></div></div>    <div class="col"><button id="remove" onclick="removeElement('+ch+')"><img src="img/trash.svg"></button></div></div>';
        
        $elem.append($(x));
	}

    $(document).ready(function() {
		$('#addlinkbtn').click(function(e) {
			addLinkIn($('#card-body'));
			optionId=optionId+1;
		});
    });
    
    function removeElement(elementId) {
    // Removes an element from the document
    var element = document.getElementById(elementId);
    element.parentNode.removeChild(element);
    optionId=optionId-1;
}                                                                                   
</script>
<form  action=  <?php echo(__BASE_URL ."/index.php?controller=enseignant&action=validateCreationQcmQuestion") ?>  method="post" >

<div class=" container " style="margin-top:50px;"  >
    <script type="text/javascript">
            document.write(optionId)
        </script>
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card">
                <div class="card-header bg-light  ">
                    <div class="row align-items-stretch">
                        <div class="col-4 mt-1">
                            <h5>Nouvelle question</h5>
                        </div>
                        <div class="col-4 offset-4 ">

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
                <div class="card-body " id="card-body">
                        <input type="text" name="ENONCER" class="form-control mb-5" placeholder="Ecrivez votre question ici">
                        
                        <div class="row align-items-center mt-4 " id="option1"> 
                            <div class="col-10" >
                                <div class="custom-control custom-checkbox">
                                    <input type="hidden" name="checkbox1" value="0" />
                                    <input type="checkbox" value="1" class="custom-control-input" id="checkbox1" name="checkbox1" >
                                    <label class="custom-control-label  "  for="checkbox1" style="width:100%;">
                                        <input type="text" name="Option1" class="form-control   " placeholder="Option 1"   >
                                    </label>
                                </div>
                            </div>    
                        </div>

                        <div class="row align-items-center mt-4 " id="option2"> 
                            <div class="col-10" >
                                <div class="custom-control custom-checkbox">
                                    <input type="hidden" name="checkbox2" value="0" />
                                    <input type="checkbox" value="1" class="custom-control-input" id="checkbox2" name="checkbox2" >
                                    <label class="custom-control-label  "  for="checkbox2" style="width:100%;">
                                        <input type="text" name="Option2" class="form-control   " placeholder="Option 2"   >
                                    </label>
                                </div>
                            </div>    
                        </div>

                        <div class="row align-items-center mt-4 " id="option3"> 
                            <div class="col-10" >
                                <div class="custom-control custom-checkbox">
                                    <input type="hidden" name="checkbox3" value="0" />
                                    <input type="checkbox" value="1" class="custom-control-input" id="checkbox3" name="checkbox3" >
                                    <label class="custom-control-label  "  for="checkbox3" style="width:100%;">
                                        <input type="text" name="Option3" class="form-control   " placeholder="Option 3"   >
                                    </label>
                                </div>
                            </div>    
                            <div class="col">
                                <button id="remove" onclick="removeElement('option3')"><img src="img/trash.svg"></button>
                            </div>
                        </div>


                        <div class="row align-items-center mt-4 " id="option4"> 
                            <div class="col-10" >
                                <div class="custom-control custom-checkbox">
                                    <input type="hidden" name="checkbox4" value="0" />
                                    <input type="checkbox"  value="1" class="custom-control-input" id="checkbox4" name="checkbox4" >
                                    <label class="custom-control-label  "  for="checkbox4" style="width:100%;">
                                        <input type="text" name="Option4" class="form-control   " placeholder="Option 4"   >
                                    </label>
                                </div>
                            </div>    
                            <div class="col">
                                <button id="remove" onclick="removeElement('option4')"><img src="img/trash.svg"></button>
                            </div>
                        </div>     
                </div>
                <div class="row  mb-2 ml-5">
                    <div class="col ">
                    <button type="button" class="btn btn-primary btn-sm" id="addlinkbtn">Ajoutez une autre option</button>
                    </div>
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



                </div>    
            </div>
        </div>
    </div>
</div>
</form>
