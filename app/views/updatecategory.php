<?php $this->load->view('mainpage')?>
<div id="page-wrapper">
        <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                <div class="form-title">
                    <h2>Update Category</h2>
                </div>
                        
    <form name="frmCategory" id="frmCategory" action="<?php echo site_url('start/updatecategory');?>" method="post">

            <div class="form-body">
                <div class="form-group">
                    <label for="unit">Select Unit <span style="font-size:13px;color:red">*Required</span></label>
                        <select  id="unit" name="unit" class="form-control">
                            <option selected value="">Select Unit</option>
                                <?php foreach($unit_ as $item){?>
                                <?php if($fetch_category_single->UNITID == $item->UNITID){ ?>
                                <option  value="<?php echo $item->UNITID;?>" Selected="selected"><?php echo $item->UNITNAME;?></option>
                                 <?php } else { ?>
                                 <option  value="<?php echo $item->UNITID;?>"><?php echo $item->UNITNAME;?></option>
                                <?php }?>
                                <?php }?>

                        </select>
                                
                </div> 

    
                <div class="form-group"> 
                        <input type="hidden"  id="categoryid" name="categoryid" value="<?php echo $fetch_category_single->CATEGORYID;?>"> 
                </div>

                            
                    <div class="form-group"> 
                        <label for="categoryname">Category Name <span style="font-size:13px;color:red">*Required</span></label> 
                        <input type="text" class="form-control" id="categoryname" name="categoryname" placeholder="Category Name" value="<?php echo $fetch_category_single->CATEGORYNAME;?>"> 
                                           
                    </div> 




                    <div class="form-group"> 
                         <label for="purpose">Purpose</label> 
                         <input type="textarea" class="form-control" id="purpose" name= "purpose" placeholder="ex-Purpose of this unit is to record the attendance of student" value="<?php echo $fetch_category_single->PURPOSE;?>"> 
                    </div> 

                            
                    <input type="submit" class="btn btn-default" value="update">

                    <div id="msg_" style="border-radius: 4px; font-size: 15px; color: blue; font-weight: bold; background:#ffE4C4">
                     </div>
    </div>               
</form>
</div>
    
</div>
