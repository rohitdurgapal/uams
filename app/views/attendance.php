<?php $this->load->view('mainpage')?>
<div id="page-wrapper">  
  <form name="submitattendance" id="submitattendance" action="<?php echo site_url('start/submitattendance');?>" method="post">
    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
      
        <div class="form-title">
            <h2>Take Attendance</h2>
        </div> 

        <div id="ho"></div>
  <form name="TakeAttendance" id="TakeAttendance" action="<?php echo site_url('start/fetchCandidates');?>" method="post">             
        
        <div class="form-body">
           <div class="form-group">
                    <label for="selectunit">Select Unit <span style="font-size:13px;color:red">*Required</span></label>
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


             
             <div class="form-group" > 
                 <label for="date">Date <span style="font-size:13px;color:red">*Required</span></label> 
                    <input type="date" class="form-control" id="date" name="date" value="<?php echo date("Y-m-d") ;?>"> 
             </div> 


             <div class="form-group"> 
                 <label for="time">Time <span style="font-size:13px;color:red">*Required</span></label> 
               
               <?php
                    date_default_timezone_set('Asia/Kolkata');
                    $currentTime = date ( 'h:i A', time () );
                      $currentTime;
                ?>
              



                    <input type="text" class="form-control" id="time" name="time" value="<?php echo $currentTime ; ?>" disabled="">
            </div>


                <button type="button" id="showanother" name= "showanother" class="btn btn-default" >Take Attendance</button> 
                <div id="msg_" style="border-radius: 4px; font-size: 15px; color: blue; font-weight: bold; background:#ffE4C4">
                </div>
                         
           </div>
  </form>




 </div>
<!--another table-->
<div class="row" id="hidedata" style="display:none">
    <div class="col-sm-12">
        <div class="whitebox">
            <div class="panel panel-default">
                <div class="panel-heading"><div class="panel-title>">Attendance Form</div></div>
                    <div class="panel-body">
                        <table class="table table-bodered table-responsive">
                          <thead>
                            <tr>
                                <th>Candidate ID</th>
                                <th>Candidate Name</th>
                                <th>Status</th>
                                <th>Action</th>
                                    <td><a href="<?php echo site_url('start/u_attendance') ;?>"<?php if($active == 'attendance'){ echo 'class="active"'; } ?>>Edit</a> | 
                                      <!--<a href="#" id="<?php echo $items->UNITID;?>" class="unitDelete">Delete</a>-->
                                    </td>                       
                         
                            </tr>
                          <tbody id="candidates_here">
                          
                          </tbody>
                         </thead> 
                        </table> 
                    </div>
            </div>
        </div>
    </div>
</div> 

  </form>
</div>

