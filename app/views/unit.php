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
                    <label for="country">Country</label>
                        <select  id="country" name="country" class="form-control">
                            <option selected value="">Select Country</option>
                                <?php foreach($country_ as $item){?>
                                <option  value="<?php echo $item->COUNTRYID; ?>"><?php echo $item->COUNTRY; ?></option>
                                <?php }?>
                        </select>        
                 </div> 

                <div class="form-group">
                    <label for="state">State </span></label>
                        <select  id="state" name="state" class="form-control" disabled="">
                            <option selected value="">Select State </option>
                                <?php foreach($state_ as $item){?>
                                <option value="<?php echo $item->STATEID; ?>"><?php echo $item->STATE; ?></option>
                                <?php }?> 
                        </select>
                                
                </div> 

                    <input type="submit" class="btn btn-default" value="create"> 
    

                     <div id="msg_" style="border-radius: 4px; font-size: 15px; color: blue; font-weight: bold; background:#ffE4C4"></div>
    
    </div>

         </form>
   
  </div>
</div>  

                      <div class="table-responsive">
                        <table class="table table-bodered">
                            <tr>
                                <th>Unit ID</th>
                                <th>Unit Name</th>
                                <th>Country</th>
                                <th>City</th>
                            </tr>
                            
                            <?php 
                            if($fetch_unit->num->rows() > 0)
                            {
                                foreach($fetch_unit->results() as $items)
                                {
                            ?>  
                                        <tr>    
                                            <td><?php echo $items->UNITID; ?></td>
                                            <td><?php echo $items->UNITNAME; ?></td>
                                            <td><?php echo $items->COUNTRY; ?></td>
                                            <td><?php echo $items->STATE; ?></td>
                                        </tr>
                                }
                            }
                            else{ <tr>
                                    <td colspan="4">No Unit Found</td>
                                  </tr>
                                }
                        </table>
                      </div>                 
                        
                   
