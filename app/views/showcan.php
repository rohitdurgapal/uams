<?php $this->load->view('dashboard')?>
<?php $this->load->view('mainpage')?>
<div id="page-wrapper">
    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
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

								
                                
        </div>

 </div>
 

 <div class="table-responsive">
    <table class="table table-bodered">
        <tr class="danger" style="font-size:15px;">
            <th>Candidate ID</th>
            <th>Candidate Name</th>
            <th>Date Of Birth</th>
            <th>Mobile No</th>
            <th>Email</th>            
        </tr>
        

        <?php 
            if(count($can_) != 0)
            {
            foreach($can_ as $items)
            {
        ?>  
                    <tr class="success" style="font-size:12px;">    
                        <td><?php echo $items->CANDIDATEID; ?></td>
                        <td><?php echo $items->CANDIDATENAME; ?></td>
                        <td><?php echo $items->DOB; ?></td>
                        <td><?php echo $items->MOBILENO; ?></td>
                        <td><?php echo $items->EMAIL; ?></td>
                        
                    </tr>

        <?php
            }
        }
        else{ ?>
           
        <?php } ?>

    </table>
  </div>
</div>
