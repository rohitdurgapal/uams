<?php $this->load->view('mainpage')?>
<div id="page-wrapper">
    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
            <div class="form-title">
                <h2>Create Unit</h2>
            </div>

    <form name="frmUnit" id="frmUnit" action="<?php echo site_url('start/submitunit');?>" method="post">
        <div class="form-body">
            <div class="form-group"> 
                <label for="unitname">Unit Name <span style="font-size:13px;color:red">*Required</span></label> 
                <input type="text" class="form-control" id="unitname" name="unitname" placeholder="Unit Name"> 
            </div> 

            <div class="form-group">
                <label for="country">Country <span style="font-size:13px;color:red">*Required</span></label>
                    <select  id="country" name="country" class="form-control">
                        <option selected value="">Select Country</option>
                            <?php foreach($country_ as $item){?>
                            <option  value="<?php echo $item->COUNTRYID; ?>"><?php echo $item->COUNTRY; ?></option>
                            <?php }?>
                    </select>        
             </div> 

            <div class="form-group">
                <label for="state">State <span style="font-size:13px;color:red">*Required</span></label>
                    <select  id="state" name="state" class="form-control" disabled="">
                        <option selected value="">Select State </option>
                            <?php foreach($state_ as $item){?>
                            <option value="<?php echo $item->STATEID; ?>"><?php echo $item->STATE; ?></option>
                            <?php }?> 
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
        <tr>
            <th>Unit ID</th>
            <th>Unit Name</th>
            <th>Country</th>
            <th>State</th>
            <th>Action</th>
        </tr>
        
        <?php 
        if(count($fetch_unit) != 0)
        {
            foreach($fetch_unit as $items)
            {
        ?>  
                <tr>    
                    <td><?php echo $items->UNITID; ?></td>
                    <td><?php echo $items->UNITNAME; ?></td>
                    <td><?php echo $items->COUNTRY; ?></td>
                    <td><?php echo $items->STATE; ?></td>
                    <?php 
                        $data=array(
                            $items->UNITID,
                            $items->UNITNAME,
                            $items->COUNTRY,
                            $items->STATE
                        );
                    ?>

                    <td>
                        <a href="<?php echo site_url('start/u_unit/'.$items->UNITID)  ;?>"<?php if($active == 'unit'){ echo 'class="active"'; } ?>>Edit</a> | 
                        <a href="#" id="<?php echo $items->UNITID;?>" class="unitDelete">Delete</a>
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
                        
                   
