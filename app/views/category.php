<?php $this->load->view('mainpage')?>
<div id="page-wrapper">
        <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                <div class="form-title">
                    <h2>Create Category</h2>
                </div>
                        
<form name="frmCategory" id="frmCategory" action="<?php echo site_url('start/submitcategory');?>" method="post">

            <div class="form-body">
                <div class="form-group">
                    <label for="selectunit">Select Unit</label>
                        <select  id="unit" name="unit" class="form-control">
                            <option selected value="">Select Unit</option>
                            <?php foreach ($unit_ as $item){?>
                            <option value="<?php echo $item->UNITID; ?>"><?php echo $item->UNITNAME; ?></option>
                            <?php }?>
                        </select>
                                
                </div> 
                            



                    <div class="form-group"> 
                        <label for="categoryname">Category Name</label> 
                        <input type="text" class="form-control" id="categoryname" name="categoryname" placeholder="Category Name" disabled=""> 
                    </div> 



                    <div class="form-group"> 
                         <label for="purpose">Purpose</label> 
                         <input type="textarea" class="form-control" id="purpose" name= "purpose" placeholder="ex-Purpose of this unit is to record the attendance of student"> 
                    </div> 

                            
                    <button type="submit" class="btn btn-default">Create</button> 
</form>
                         
            </div>
        </div>
</div>

        