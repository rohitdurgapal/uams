<?php $this->load->view('dashboard')?>
<?php $this->load->view('mainpage')?>
<div id="page-wrapper">
    <form name="frmShowCatt" id="frmShowCatt">
    <div class="form-grids row widget-shadow" data-example-id="basic-forms" style="margin-top:-90px;"> 
        <div class="form-title">
            <h2>Attendance Date Wise</h2>
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



                <div class="form-group" > 
                 <label for="date">Date</label> 
                    <input type="date" class="form-control" id="date" name="date" value="<?php echo date("Y-m-d") ;?>"> 
             </div> 

								
                                
                                
                <input type="button" id="showatten" name= "showatten" class="btn btn-default" value="Show"> 

                

	</div>
 </div>
 </form>

 <div class="table-responsive" id="hidedata2" style="display:none">
    <table class="table table-bodered">
        <tr class="danger" style="font-size:15px;">
            <th>Candidate ID</th>
            <th>Candidate Name</th>
            <th>Time</th>
            <th>Attendance Status</th>           
        </tr>
        
        <tbody class="success" style="background:linear-gradient(#a1c4fd,#c2e9fb)" id="attendancehere">
        </tbody>

    </table>
  </div>
</div>
