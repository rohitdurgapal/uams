<div id="container" class="content_print">
     <div class="form-title col-sm-12">
        <center><h2>ALL UNITS AND CATEGORIES</h2>
            <a href="<?php echo site_url('start/index1') ;?>" class="hide_all">
            <span style="font-size:20px;">Back To Dashboard</span>
            </a>
        </center>

                

    

     </div>
    
    <div style="padding-top: 100px;padding-right: 40px;padding-bottom: 100px;padding-left: 40px;">
    <table class="table table-bordered table-condensed">
       <?php 
        if(count($unit_) != 0){ ?>
            <?php if(count($fetch_unitcategory) != 0){ ?>
                <?php foreach ($unit_ as $unititem) { ?>
                    <tr style="font-size:32px;background:#F8F9F9;">
                        <th style="padding-left: 10px;">
                            <?php echo $unititem->UNITNAME; ?>
                        </th>
                    </tr>
                    <?php foreach($fetch_unitcategory as $items){?>
                    <tr style="font-size:20px;">
                        <?php if($unititem->UNITID == $items->UNITID){ ?>  
                            <td style="padding-left: 50px;"><?php echo $items->CATEGORYNAME; ?></td>
                        <?php } ?>
                    </tr>
                    <?php } ?>
                <?php } ?>
            <?php }
        } ?>
    </table>
  </div> 
</div>  

