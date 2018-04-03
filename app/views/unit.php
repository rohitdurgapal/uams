<?php $this->load->view('mainpage')?>
<<div id="page-wrapper">
        <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
            <div class="form-title">
                <h2>Create Unit</h2>
            </div>
                        


            <div class="form-body">
                <div class="form-group"> 
                    <label for="unitname">Unit Name</label> 
                    <input type="text" class="form-control" id="unitname" placeholder="Unit Name"> 
                </div> 

                                
                <div class="form-group">
                        <label for="country">Country</label>
                            <select  id="country" name="country" class="form-control">
                                <?php foreach($country as $item){?>
                                    <option selected value="<?php echo $item->COUNTRYID; ?>"<?php echo $item->COUNTRY; ?></option>
                                <?php }?>   
                            </select>
                                
                </div> 


                <div class="form-group">
                         <label for="state">State</label>
                             <select  id="state" name="state" class="form-control">
                                  <?php foreach($state as $item){?>
                                    <option selected value="<?php echo $item->STATEID; ?>"<?php echo $item->STATE; ?></option>
                                   <?php }?> 
                            </select>
                                
                                </div> 


                                
                                <button type="submit" class="btn btn-default">Create</button> 

                         
                        </div>
                </div>


        
</div>