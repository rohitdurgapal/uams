<?php $this->load->view('dashboard')?>
<?php $this->load->view('mainpage')?>
<div id="page-wrapper" >
   
  <div class="table-responsive">
    <table class="table table-bodered">
        <tr class="danger" style="color:red;font-weight:bold;">
            <th>Unit ID</th>
            <th>Unit Name</th>
            <th>Category ID</th>
            <th>Category Name</th>
         
        </tr>
       <?php 
        if(count($fetch_unitcategory) != 0)
        {
            foreach($fetch_unitcategory as $items)
            {
        ?>  
                <tr class="success">    
                    <td><?php echo $items->UNITID; ?></td>
                    <td><?php echo $items->UNITNAME; ?></td>
                    <td><?php echo $items->CATEGORYID; ?></td>
                    <td><?php echo $items->CATEGORYNAME; ?></td>
                    
                    
                </tr>
        <?php
            }
        }
        else{ ?>
        <?php } ?>
        
       
    </table>
  


  </div> 




</div>                  
                        
                   
