<?php $this->load->view('mainpage')?>
<div id="page-wrapper" >
    <div class="form-grids row widget-shadow" data-example-id="basic-forms" > 
            <div class="form-title">
                <h2>Create New User</h2>
            </div>

    <form name="frmuser" id="frmuser" action="<?php echo site_url('start/submituser');?>" method="post">
        <div class="form-body">
            <div class="form-group"> 
                <label for="uname">User Name <span style="font-size:13px;color:red">*Required</span></label> 
                <input type="text" class="form-control" id="uname" name="uname" placeholder="New User Name"> 
            </div> 

            <div class="form-group"> 
                <label for="cpass">Password <span style="font-size:13px;color:red">*Required</span></label> 
                <input type="text" class="form-control" id="cpass" name="cpass" placeholder="Password"> 
            </div>

            <div class="form-group">
                <label for="usertype">Select User Type<span style="font-size:13px;color:red">*Required</span></label>
                    <select  id="usertype" name="type" class="form-control">
                        <?php foreach($type_ as $item){?>
                            <option  value="<?php echo $item->TYPEID; ?>"><?php echo $item->TYPE; ?></option>
                            <?php }?>
                    </select>        
             </div>


             <div class="form-group">
                <label for="status">Select Status<span style="font-size:13px;color:red">*Required</span></label>
                     <select id ="status" name="sta_" class="form-control">
                      <option selected value="1">1</option>
                     </select>      
             </div>




                
               




           
            <input type="submit" class="btn btn-default" value="create"> 

            <div id="msg_" style="borders-radius: 4px; font-size: 15px; color: blue; font-weight: bold; background:#ffE4C4">
            </div>
        </div>
    </form>
   
  </div>




  <div class="table-responsive">
    <table class="table table-bodered">
        <tr class="danger">
            <th>User Name</th>
            <th>User Type</th>
            <th>Status</th>
            <th>User Upline</th>
            <th>Action</th>
        </tr>
        
        <?php 
        if(count($fetch_us) != 0)
        {
            foreach($fetch_us as $items)
            {
        ?>  
                <tr class="success">    
                    <td><?php echo $items->USERNAME_; ?></td>
                    <td><?php echo $items->TYPE; ?></td>
                    <td><?php echo $items->STATUS; ?></td>
                    <td><?php echo $items->USER_UPLINE; ?></td>
                    <?php 
                        $data=array(
                            $items->USERNAME_,
                            $items->TYPE,
                            $items->STATUS,
                            $items->USER_UPLINE
                        );
                    ?>

                    <td>
                    <a href="#" id="<?php echo $items->USERNAME_;?>" class="userdelete">Delete</a>
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
                        
                   
