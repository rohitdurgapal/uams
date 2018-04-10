<?php $this->load->view('mainpage')?>
<div id="page-wrapper">
     

    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
        <div class="form-title">
            <h2>Add Additional Information</h2>
        </div>
                

<form name="add" id="add" action="<?php echo site_url('start/addadditional1');?>" method="post">
    <div class="form-body">
        <div class="form-group"> 
            <label for="firstname">First Name <span style="font-size:13px;color:red">*Required</span></label> 
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name"> 
        </div> 

        <div class="form-group"> 
            <label for="lastname">Last Name</label> 
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name"> 
        </div>

             <div class="form-group">
                            <label for="gender">Gender <span style="font-size:13px;color:red">*Required</span></label>
                        <select  id="gender" name="gender" class="form-control">
                            <option selected value="">Select Gender</option>
                            <?php foreach ($gender_ as $item){?>
                            <option value="<?php echo $item->GENDERID; ?>"><?php echo $item->GENDER; ?></option>
                            <?php }?>
                        </select>
                                
            </div>
       

        <div class="form-group"> 
            <label for="mobno">Mobile No <span style="font-size:13px;color:red">*Required</span></label> 
            <input type="text" class="form-control" id="mobno" name ="mobno" placeholder="Mobile No"> 
        </div> 



        <div class="form-group"> 
            <label for="mobver">Mobile Verification</label> 
            <input type="text" class="form-control" id="mobver" name= "mobver" placeholder="Mobile Verification"> 
        </div> 


		<div class="form-group"> 
            <label for="email">Email <span style="font-size:13px;color:red">*Required</span></label> 
            <input type="email" class="form-control" id="email" name= "email" placeholder="Email Id"> 
        </div>

                                
        <div class="form-group"> 
            <label for="emailver">Email Verification</label> 
            <input type="text" class="form-control" id="emailver" name= "emailver" placeholder="Email Verification"> 
        </div> 


                            
        <input type="submit" class="btn btn-default" value="add">

        <div id="msg_" style="border-radius: 4px; font-size: 15px; color: blue; font-weight: bold; background:#ffE4C4">
    </div>
</div>
 </form>                        
</div>
    <div class="table-responsive">
    <table class="table table-bodered">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Mobile No</th>
            <th>Email</th>
            <th>Action</th>

        </tr>
        
        <?php 
        if(count($fetch_add) != 0)
        {
            foreach($fetch_add as $items)
            {
        ?>  
                    <tr>    
                        
                        <td><?php echo $items->FNAME; ?></td>
                        <td><?php echo $items->LNAME; ?></td>
                        <td><?php echo $items->GENDER; ?></td>
                        <td><?php echo $items->MOBILE_NO; ?></td>
                        <td><?php echo $items->EMAIL; ?></td>
                        <td>Edit | Delete</td>            
                    </tr>
        <?php
            }
        }
        else{ ?>
            <tr>
                <td colspan="4">No iNFormation Found</td>
              </tr>
        <?php } ?>
    </table>
  </div> 








</div>