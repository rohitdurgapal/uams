<?php $this->load->view('mainpage')?>
<<div id="page-wrapper">
                <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                        <div class="form-title">
                            <h2>Add Candidates for Attendance</h2>
                        </div>
                        


                        <div class="form-body">
                             
                                <div class="form-group">
                                    <label for="selectunit">Select Unit</label>
                                    <select  id="selectunit" class="form-control">
                                    <option >AMRAPALI</option>
                                    <option selected>DURGAPAL'S</option>
                                    <option>FESTIVAL</option>
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
                                    <label for="canname">Candidate Name</label> 
                                    <input type="text" class="form-control" id="canname" placeholder="Candidate Name"> 
                                </div> 

                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select  id="gender" class="form-control">
                                    <option selected>MALE</option>
                                    <option >FEMALE</option>
                                    <option>OTHER</option>
                                    </select>

                                 <div class="form-group"> 
                                    <label for="mobno">Mobile No</label> 
                                    <input type="text" class="form-control" id="mobno" placeholder="Mobile No"> 
                                </div> 

                                 <div class="form-group"> 
                                    <label for="dob">Date Of Birth</label> 
                                    <input type="date" class="form-control" id="dob"> 
                                </div> 


                                  <div class="form-group"> 
                                    <label for="email">Email</label> 
                                    <input type="email" class="form-control" id="email" placeholder="Email Id"> 
                                </div> 
                                
                                
                                
                                <button type="submit" class="btn btn-default">Add</button> 

                         
                        </div>
                </div>


        
</div>