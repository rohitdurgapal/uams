<?php $this->load->view('mainpage')?>
<div id="page-wrapper">
    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
        <div class="form-title">
            <h2>Add Candidates for Attendance</h2>
        </div>
                        

<form name="frmcan" id="frmCan" action="<?php echo site_url('start/submitcandidate');?>" method="post">

        <div class="form-body">
                <div class="form-group">
                    <label for="unit">Select Unit <span style="font-size:13px;color:red">*Required</span></label>
                        <select  id="unit" name="unit" class="form-control">
                            <option selected value="">Select Unit</option>
                            <?php foreach ($unit_ as $item){?>
                            <option value="<?php echo $item->UNITID; ?>"><?php echo $item->UNITNAME; ?></option>
                            <?php }?>
                        </select>
                                
                </div>  


                    
                <div class="form-group">
                    <label for="category">Select Category <span style="font-size:13px;color:red">*Required</span></label>
                        <select  id="category" name="category" class="form-control" disabled="">
                            <option selected value="">Select Category</option>
                        </select>
                                
                </div>  

								
                <div class="form-group"> 
                    <label for="canname">Candidate Name <span style="font-size:13px;color:red">*Required</span></label> 
                    <input type="text" class="form-control" id="canname" name= "canname" placeholder="Candidate Name"> 
                            
                </div> 

                                 
                 <div class="form-group">
                            <label for="gender">Gender  <span style="font-size:13px;color:red">*Required</span></label>
                        <select  id="gender" name="gender" class="form-control">
                            <option selected value="">Select Gender</option>
                            <?php foreach ($gender_ as $item){?>
                            <option value="<?php echo $item->GENDERID; ?>"><?php echo $item->GENDER; ?></option>
                            <?php }?>
                        </select>
                                
               </div> 



                 <div class="form-group"> 
                        <label for="mobno">Mobile No</label> 
                        <input type="text" class="form-control" id="mobno" name="mobno" placeholder="Mobile No"> 
                </div> 

                 <div class="form-group"> 
                        <label for="dob">Date Of Birth</label> 
                      <input type="date" class="form-control" id="dob" name="dob"> 
              </div> 


                  <div class="form-group"> 
                     <label for="email">Email</label> 
                     <input type="email" class="form-control" id="email" name="email" placeholder="Email Id"> 
                  </div> 
                                
                                
                                
                <input type="submit" class="btn btn-default" value="Add"> 

                <div id="msg_" style="border-radius: 4px; font-size: 15px; color: blue; font-weight: bold; background:#ffE4C4">
                </div>

</div>
</form>
</div>
 <div class="table-responsive">
    <table class="table table-bodered">
        <tr>
            <th>Unit Name</th>
            <th>Category Name</th>
            <th>Candidate Name</th>
            <th>Gender</th>
            <th>Mobile No</th>
            <th>Date of Birth</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        

        <?php 
            if(count($fetch_candidate) != 0)
            {
            foreach($fetch_candidate as $items)
            {
        ?>  
                    <tr>    
                        <td><?php echo $items->UNITNAME; ?></td>
                        <td><?php echo $items->CATEGORYNAME; ?></td>
                        <td><?php echo $items->CANDIDATENAME; ?></td>
                        <td><?php echo $items->GENDER; ?></td>
                        <td><?php echo $items->MOBILENO; ?></td>
                        <td><?php echo $items->DOB; ?></td>
                        <td><?php echo $items->EMAIL; ?></td>
                        <td><?php $items->CANDIDATEID; ?></td>
                        <?php 
                        $data=array(
                            $items->UNITNAME,
                            $items->CATEGORYNAME,
                            $items->CANDIDATENAME,
                            $items->GENDER,
                            $items->MOBILENO,
                            $items->DOB,
                            $items->EMAIL,
                            $items->CANDIDATEID,

                        );
                        ?>

                        <td><a href="<?php echo site_url('start/u_candidates/'.$items->CANDIDATEID.'/'.$items->CATEGORYID)  ;?>"<?php if($active == 'candidates'){ echo 'class="active"'; } ?>>Edit</a> | 
                            <a href="#" id="<?php echo $items->CANDIDATEID;?>" class="candidateDelete">Delete</a>
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