<?php $this->load->view('mainpage')?>
<div id="page-wrapper">
     

    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
        <div class="form-title">
            <h2>Add Additional Information</h2>
        </div>
                

<form name="add" id="add" action="<?php echo site_url('start/updateadditional');?>" method="post">
    <div class="form-body">
        <div class="form-group"> 
            <label for="firstname">First Name <span style="font-size:13px;color:red">*Required</span></label> 
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" value="<?php echo $profile->FNAME;?>"> 
        </div> 

        <div class="form-group"> 
            <label for="lastname">Last Name</label> 
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" value="<?php echo $profile->LNAME;?>"> 
        </div>

             <div class="form-group">
                            <label for="gender">Gender <span style="font-size:13px;color:red">*Required</span></label>
                        <select  id="gender" name="gender" class="form-control">
                            <option selected value="">Select Gender</option>
                            <?php foreach ($gender_ as $item){?>
                            <?php if($profile->GENDERID == $item->GENDERID){ ?>
                                <option value="<?php echo $item->GENDERID; ?>" selected="selected"><?php echo $item->GENDER; ?></option>
                            <?php } else { ?>
                                <option value="<?php echo $item->GENDERID; ?>"><?php echo $item->GENDER; ?></option>
                            <?php } ?>
                            <?php }?>
                        </select>
                                
            </div>
       

        <div class="form-group"> 
            <label for="mobno">Mobile No <span style="font-size:13px;color:red">*Required</span></label> 
            <input type="text" class="form-control" id="mobno" name ="mobno" placeholder="Mobile No" value="<?php echo $profile->MOBILE_NO;?>"> 
        </div> 



        


		<div class="form-group"> 
            <label for="email">Email <span style="font-size:13px;color:red">*Required</span></label> 
            <input type="email" class="form-control" id="email" name= "email" placeholder="Email Id" value="<?php echo $profile->EMAIL;?>"> 
        </div>

                                
        


                            
        <input type="submit" class="btn btn-default" value="Update">

        <div id="msg_" style="border-radius: 4px; font-size: 15px; color: blue; font-weight: bold; background:#ffE4C4">
    </div>
</div>
 </form>                        
</div> 








</div>