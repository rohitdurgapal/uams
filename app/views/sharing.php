<?php $this->load->view('mainpage')?>

<div id="page-wrapper">   
    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
      
        <div class="form-title">
            <h2>Share Authority</h2>
        </div> 
       
  <form name="shareauthority" id="shareauthority" action="<?php echo site_url('start/sharing');?>" method="post">      
        <div class="form-body">
          
             <div class="form-group">
                    <label for="category">Select Category <span style="font-size:13px;color:red">*Required</span></label>
                        <select  id="category" name="category" class="form-control">
                            <option selected value="">Select Category</option>
                            <?php foreach ($category_ as $item){?>
                            <option value="<?php echo $item->CATEGORYID; ?>"><?php echo $item->CATEGORYNAME; ?></option>
                            <?php }?>
                        </select>
                                
            </div>

            <div class="form-group">
                    <label for="share">Select User <span style="font-size:13px;color:red">*Required</span></label>
                        <select  id="share" name="share" class="form-control">
                            <option selected value="">Select User</option>
                            <?php foreach ($share_ as $item){?>
                            <option value="<?php echo $item->USERNAME_; ?>"><?php echo $item->USERNAME_; ?></option>
                            <?php }?>
                        </select>
                                
            </div>    


             
             

                <input type="Submit" id="sharing" name= "sharing" class="btn btn-default" value="Share">
                <div id="msg_" style="border-radius: 4px; font-size: 15px; color: blue; font-weight: bold; background:#ffE4C4">
                </div> 
                         
        </div>
  </form>
 </div>
<div class="table-responsive">
    <table class="table table-bodered">
        <tr class="danger">
            <th>Sharing ID</th>
            <th>Category Name</th>
            <th>User Name</th>
            <th>User Upline</th>
            <th>Action</th>
        </tr>
        
        <?php 
        if(count($fetch_share) != 0)
        {
            foreach($fetch_share as $items)
            {
        ?>  
                <tr class="success">    
                    <td><?php echo $items->SHARINGID; ?></td>
                    <td><?php echo $items->CATEGORYNAME; ?></td>
                    <td><?php echo $items->USERNAME_; ?></td>
                    <td><?php echo $items->USER_UPLINE; ?></td>
                    <?php 
                        $data=array(
                            $items->SHARINGID,
                            $items->CATEGORYNAME,
                            $items->USERNAME_,
                            $items->USER_UPLINE
                        );
                    ?>

                    <td> 
                        <a href="#" id="<?php echo $items->SHARINGID;?>" class="sharedelete">Delete</a>
                    </td>
                </tr>
        <?php
            }
        }
        else{ ?>
        <?php } ?>
    </table>
  </div>   
</div>

