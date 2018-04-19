<?php $this->load->view('dashboard')?>
<?php $this->load->view('mainpage')?>
<div id="page-wrapper">
    <form name="frmShowCan" id="frmShowCan">
    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
        <div class="form-title">
            <h2>Select Unit And Category</h2>
        </div>
                        

        <div class="form-body">
                <div class="form-group">
                    <label for="unit">Select Unit <span style="font-size:13px;color:red">*Required</span></label>
                        <select  id="unit" name="unit" class="form-control">
                            <option selected value="">Select Unit</option>
                            <?php foreach ($unit_ as $item){?>
                            <option value="<?php echo $item->UNITID; ?>"><?php echo $item->UNITNAME; ?></option>
                            <?php }?>
                        </select>
                                
                </div>  


                    
                <div class="form-group">
                    <label for="category">Select Category <span style="font-size:13px;color:red">*Required</span></label>
                        <select  id="category" name="category" class="form-control" disabled="">
                            <option selected value="">Select Category</option>
                        </select>
                                
                </div>  

								
                                
                                
                <!--<input type="submit" class="btn btn-default" value="Show">-->
                <input type="button" id="showcan" name= "showcan" class="btn btn-default" value="Show"> 

                

	</div>
 </div>
 </form>

 <div class="table-responsive" id="hidedata1" style="display:none">
    <table class="table table-bodered">
        <tr class="danger" style="font-size:15px;">
            <th>Candidate ID</th>
            <th>Candidate Name</th>
            <th>Date Of Birth</th>
            <th>Mobile No</th>
            <th>Email</th>            
        </tr>
        
        <tbody class="success" style="background:linear-gradient(#a1c4fd,#c2e9fb)" id="candidateshere">
        </tbody>

         </table>
  </div>
</div>
