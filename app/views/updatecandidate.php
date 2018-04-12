<?php $this->load->view('mainpage')?>
<div id="page-wrapper">
    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
        <div class="form-title">
            <h2>Update Candidates</h2>
        </div>
                        

<form name="frmcan" id="frmCan" action="<?php echo site_url('start/updatecandidate');?>" method="post">

        <div class="form-body">
               <div class="form-group">
                    <label for="unit">Select Unit <span style="font-size:13px;color:red">*Required</span></label>
                        <select  id="unit" name="unit" class="form-control">
                            <option selected value="">Select Unit</option>
                                <?php foreach($unit_ as $item){?>
                                <?php if($item->UNITID == $unitid){ ?>
                                <option  value="<?php echo $item->UNITID;?>" Selected="selected"><?php echo $item->UNITNAME;?></option>
                                 <?php } else { ?>
                                 <option  value="<?php echo $item->UNITID;?>"><?php echo $item->UNITNAME;?></option>
                                <?php }?>
                                <?php }?>

                        </select>
                                
                </div>


                    
                <div class="form-group">
                    <label for="category">Select Category <span style="font-size:13px;color:red">*Required</span></label>
                        <select  id="category" name="category" class="form-control">
                            <option selected value="">Select Catrgory</option>
                                <?php foreach($category_ as $item){?>
                                <?php if($fetch_candidate_single->CATEGORYID == $item->CATEGORYID){ ?>
                                <option  value="<?php echo $item->CATEGORYID;?>" Selected="selected"><?php echo $item->CATEGORYNAME;?></option>
                                 <?php } else { ?>
                                 <option  value="<?php echo $item->CATEGORYID;?>"><?php echo $item->CATEGORYNAME;?></option>
                                <?php }?>
                                <?php }?>

                        </select>
                                
                </div>


                <div class="form-group"> 
                      <input type="hidden" class="form-control" id="candidateid" name= "candidateid" value="<?php echo $fetch_candidate_single->CANDIDATEID;?>"> 
                </div>

								
                <div class="form-group"> 
                    <label for="canname">Candidate Name <span style="font-size:13px;color:red">*Required</span></label> 
                    <input type="text" class="form-control" id="canname" name= "canname" placeholder="Candidate Name" value="<?php echo $fetch_candidate_single->CANDIDATENAME;?>"> 
                            
                </div> 

                                 
                 <div class="form-group">
                            <label for="gender">Gender <span style="font-size:13px;color:red">*Required</span></label>
                        <select  id="gender" name="gender" class="form-control">
                            <option selected value="">Select Gender</option>
                            <?php foreach ($gender_ as $item){?>
                            <?php if($fetch_candidate_single->GENDERID == $item->GENDERID){ ?>
                                <option value="<?php echo $item->GENDERID; ?>" selected="selected"><?php echo $item->GENDER; ?></option>
                            <?php } else { ?>
                                <option value="<?php echo $item->GENDERID; ?>"><?php echo $item->GENDER; ?></option>
                            <?php } ?>
                            <?php }?>
                        </select>
                                
                 </div> 



                 <div class="form-group"> 
                        <label for="mobno">Mobile No</label> 
                        <input type="text" class="form-control" id="mobno" name="mobno" placeholder="Mobile No" value="<?php echo $fetch_candidate_single->MOBILENO ;?>"> 
                </div> 

                 <div class="form-group"> 
                        <label for="dob">Date Of Birth</label> 
                      <input type="date" class="form-control" id="dob" name="dob"  value="<?php echo $fetch_candidate_single->DOB ;?>"> 
              </div> 


                  <div class="form-group"> 
                     <label for="email">Email</label> 
                     <input type="email" class="form-control" id="email" name="email" placeholder="Email Id"  value="<?php echo $fetch_candidate_single->EMAIL ;?>"> 
                  </div> 
                                
                                
                                
                <input type="submit" class="btn btn-default" value="update"> 

                <div id="msg_" style="border-radius: 4px; font-size: 15px; color: blue; font-weight: bold; background:#ffE4C4">
                </div>

</div>
</form>
</div>
 
</div>