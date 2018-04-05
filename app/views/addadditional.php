<?php $this->load->view('mainpage');?>
<div id="page-wrapper">
    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
        <div class="form-title">
            <h2>Add Additional Information</h2>
        </div>
                    
<h3 style="color:red">User Name</h3>   
<h3 style="color:red">Password</h3>
<h3 style="color:red">Status</h3>
<h3 style="color:red">User Type</h3>
<br>

<form name="add" id="add" action="<?php echo site_url('start/addadditional1');?>" method="post">
                   <div class="form-body">
        <div class="form-group"> 
            <label for="firstname">First Name</label> 
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name"> 
        </div> 

        <div class="form-group"> 
            <label for="lastname">Last Name</label> 
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name"> 
        </div>

             <div class="form-group">
                            <label for="gender">Gender</label>
                        <select  id="gender" name="gender" class="form-control">
                            <option selected value="">Select Gender</option>
                            <?php foreach ($gender_ as $item){?>
                            <option value="<?php echo $item->GENDERID; ?>"><?php echo $item->GENDER; ?></option>
                            <?php }?>
                        </select>
                                
                            </div>
       


        <div class="form-group"> 
            <label for="mobno1">Mobile No</label> 
            <input type="text" class="form-control" id="mobno" namme ="mobno" placeholder="Mobile No"> 
        </div> 


        <div class="form-group"> 
            <label for="mobver">Mobile Verificcation</label> 
            <input type="text" class="form-control" id="mobver" name= "mobver" placeholder="Mobile Verification"> 
        </div> 


		<div class="form-group"> 
            <label for="email1">Email</label> 
            <input type="email" class="form-control" id="email" name= "email" placeholder="Email Id"> 
        </div>

                                
        <div class="form-group"> 
            <label for="emailver">Email Verificcation</label> 
            <input type="text" class="form-control" id="emailver" name= "emailver" placeholder="Email Verification"> 
        </div> 


                            
        <button type="submit" class="btn btn-default">Add</button> 

 </form>                        
        </div>
 </div>

</div>