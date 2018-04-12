<?php $this->load->view('mainpage')?>
<div id="page-wrapper">
    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
            <div class="form-title">
                <h2>Update Unit</h2>
            </div>

    <form name="frmUnit" id="frmUnit" action="<?php echo site_url('start/updateunit');?>" method="post">
        <div class="form-body">


                <div class="form-group"> 
                    <input type="hidden" id="unitid" name="unitid" value="<?php echo $fetch_unit_single->UNITID;?>"> 
                </div>

                <div class="form-group"> 
                    <label for="unitname">Unit Name <span style="font-size:13px;color:red">*Required</span></label> 
                    <input type="text" class="form-control" id="unitname" name="unitname" placeholder="Unit Name" value="<?php echo $fetch_unit_single->UNITNAME;?>"> 
                </div> 

                <div class="form-group">
                    <label for="country">Country</label>
                        <select  id="country" name="country" class="form-control">
                            <option selected value="">Select Country</option>
                                <?php foreach($country_ as $item){?>
                                <?php if($fetch_unit_single->COUNTRYID == $item->COUNTRYID){ ?>
                                <option  value="<?php echo $item->COUNTRYID;?>" Selected="selected"><?php echo $item->COUNTRY;?></option>
                                 <?php } else { ?>
                                 <option  value="<?php echo $item->COUNTRYID;?>"><?php echo $item->COUNTRY;?></option>
                                <?php }?>
                                <?php }?>

                        </select>        
                 </div> 

                <div class="form-group">
                    <label for="state">State</label>
                        <select  id="state" name="state" class="form-control">
                            <option selected value="">Select State</option>
                                <?php foreach($state_ as $item){?>
                                <?php if($fetch_unit_single->STATEID == $item->STATEID){ ?>
                                <option  value="<?php echo $item->STATEID;?>" Selected="selected"><?php echo $item->STATE;?></option>
                                 <?php } else { ?>
                                 <option  value="<?php echo $item->STATEID;?>"><?php echo $item->STATE;?></option>
                                <?php }?>
                                <?php }?>
      
                </div> 



                    <input type="submit" class="btn btn-default" value="Update"> 
    

                     <div id="msg_" style="border-radius: 4px; font-size: 15px; color: blue; font-weight: bold; background:#ffE4C4">
                     </div>
    
        </div>
    </form>
   
  </div>
  
</div>                  
                        
                   
