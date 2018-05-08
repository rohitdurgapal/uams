<?php $this->load->view('dashboard')?>
<?php //$this->load->view('mainpage')?>
<div id="page-wrapper">
    <form name="frmShowCan" id="frmShowCan">
    <div class="form-grids row widget-shadow" data-example-id="basic-forms" style="margin-top:-90px;"> 
        <div class="form-title">
            <h2>Select Unit And Category</h2>
        </div>
                        

        <div class="form-body">
                <div class="form-group">
                    <label for="unit">Select Unit</label>
                        <select  id="unit" name="unit" class="form-control">
                            <option selected value="">Select Unit</option>
                            <?php foreach ($unit_ as $item){?>
                            <option value="<?php echo $item->UNITID; ?>"><?php echo $item->UNITNAME; ?></option>
                            <?php }?>
                        </select>
                                
                </div>  


                    
                <div class="form-group">
                    <label for="category">Select Category</label>
                        <select  id="category" name="category" class="form-control" disabled="">
                            <option selected value="">Select Category</option>
                        </select>
                                
                </div>  

								
                                
                                
                <input type="button" id="showcan" name= "showcan" class="btn btn-default" value="Show"> 

                

	</div>
 </div>
 </form>

 <div class="table-responsive" id="hidedata1" style="display:none">
    <table class="table table-bordered table-condensed">
        <tr style="font-size:20px;background:#F8F9F9;">
            <th>Candidate ID</th>
            <th>Candidate Name</th>
            <th>Date Of Birth</th>
            <th>Mobile No</th>
            <th>Email</th>            
        </tr>
        
        <tbody id="candidateshere">
        </tbody>

         </table>
  </div>
</div>
