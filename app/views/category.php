<?php $this->load->view('mainpage')?>
<div id="page-wrapper">
        <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                <div class="form-title">
                    <h2>Create Category</h2>
                </div>
                        
    <form name="frmCategory" id="frmCategory" action="<?php echo site_url('start/submitcategory');?>" method="post">

            <div class="form-body">
                <div class="form-group">
                    <label for="selectunit">Select Unit <span style="font-size:13px;color:red">*Required</span></label>
                        <select  id="unit" name="unit" class="form-control">
                            <option selected value="">Select Unit</option>
                            <?php foreach ($unit_ as $item){?>
                            <option value="<?php echo $item->UNITID; ?>"><?php echo $item->UNITNAME; ?></option>
                            <?php }?>
                        </select>
                                
                </div> 
                            
                    <div class="form-group"> 
                        <label for="categoryname">Category Name <span style="font-size:13px;color:red">*Required</span></label> 
                        <input type="text" class="form-control" id="categoryname" name="categoryname" placeholder="Category Name" disabled=""> 
                    </div> 



                    <div class="form-group"> 
                         <label for="purpose">Purpose</label> 
                         <input type="textarea" class="form-control" id="purpose" name= "purpose" placeholder="ex-Purpose of this unit is to record the attendance of student"> 
                    </div> 

                            
                    <input type="submit" class="btn btn-default" value="create">

                    <div id="msg_" style="border-radius: 4px; font-size: 15px; color: blue; font-weight: bold; background:#ffE4C4">
                     </div>
    </div>               
</form>
</div>
    <div class="table-responsive">
    <table class="table table-bodered">
        <tr>
            <th>Unit Name</th>
            <th>Category ID</th>
            <th>Category Name</th>
            <th>Purpose</th>
            <th>Action</th>
            
        </tr>
        
 <?php 
        if(count($fetch_category) != 0)
        {
            foreach($fetch_category as $items)
            {
        ?>  
                    <tr>    
                        <td><?php echo $items->UNITNAME; ?></td>
                        <td><?php echo $items->CATEGORYID; ?></td>
                        <td><?php echo $items->CATEGORYNAME; ?></td>
                        <td><?php echo $items->PURPOSE; ?></td>
                        <?php 
                        $data=array(
                            $items->UNITNAME,
                            $items->CATEGORYID,
                            $items->CATEGORYNAME,
                            $items->PURPOSE
                        );
                        ?>

                        <td><a href="<?php echo site_url('start/u_category/'.$items->CATEGORYID)  ;?>"<?php if($active == 'category'){ echo 'class="active"'; } ?>>Edit</a> | <a href="">Delete</a></td>
                    </tr>
        <?php
            }
        }
        else{ ?>
            <tr>
                <td colspan="4">No Category Found</td>
              </tr>
        <?php } ?>        





    </table>
  </div>
</div>

                     
     