<?php $this->load->view('mainpage')?>
<div id="page-wrapper">
    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
        <div class="form-title">
            <h2>Take Attendance</h2>
        </div>
                        

        <div class="form-body">
            <div class="form-group">
                <label for="selectunit">Select Unit</label>
                    <select  id="selectunit" class="form-control">
                        <option selected value="">Select Unit</option>
                            <?php foreach ($unit_ as $item){?>
                            <option value="<?php echo $item->UNITID; ?>"><?php echo $item->UNITNAME; ?></option>
                            <?php }?>
                    </select>
                                
            </div>



             <div class="form-group">
                 <label for="selectcategory">Select Category</label>
                     <select  id="selectcategory" class="form-control">
                         <option >BCAVI</option>
                         <option selected>BCAI</option>
                         <option>BCAIV</option>
                    </select>
                                
             </div>       

             
             <div class="form-group"> 
                 <label for="dob">Date</label> 
                    <input type="date" class="form-control" id="dob"> 
             </div> 


             <div class="form-group"> 
                 <label for="time">Time</label> 
                    <input type="time" class="form-control" id="time"> 
            </div>


                <button type="submit" class="btn btn-default">Take Attendance</button> 

                         
        </div>
 </div>
</div>