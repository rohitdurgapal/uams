<?php $this->load->view('mainpage')?>
<div id="page-wrapper">
    <form name="TakeAttendance" id="TakeAttendance" action="<?php echo site_url('start/submitattendance');?>" method="post">  
    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
        <div class="form-title">
            <h2>Take Attendance</h2>
        </div>                      
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
                    <input type="date" class="form-control" id="date" name="date"> 
             </div> 


             <div class="form-group"> 
                 <label for="time">Time <span style="font-size:13px;color:red">*Required</span></label> 
                    <input type="time" class="form-control" id="time" name="time"> 
            </div>


                <input type="submit" id="showanother" name= "showanother"class="btn btn-default" value="Take Attendance"> 
                    <div id="msg_" style="border-radius: 4px; font-size: 15px; color: blue; font-weight: bold; background:#ffE4C4">
                </div>
                         
        </div>
</div>
<!--another table-->
<div class="row" id="hidedata">
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
                                <th>Action</th>
                            </tr>
                          <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                        <input type="radio" checked value="1" name="atten">&nbsp Attend &nbsp|&nbsp
                                        <input type="radio"  value="0" name="atten">&nbsp Absense
                                </td>
                            </tr>       

                            
                            <tr>
                                 <td colspan="4"><input type="submit" class="btn btn-success btn-sm"></td> 
                            </tr>
                                
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

