<?php $this->load->view('mainpage')?>
<div id="page-wrapper">
                <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                        <div class="form-title">
                            <h2>Create Category</h2>
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
                                    <label for="categoryname">Category Name</label> 
                                    <input type="text" class="form-control" id="categoryname" placeholder="Category Name"> 
                                </div> 



                                <div class="form-group"> 
                                    <label for="purpose">Purpose</label> 
                                    <input type="textarea" class="form-control" id="purpose" placeholder="ex-Purpose of this unit is to record the attendance of student"> 
                                </div> 

                            
                                <button type="submit" class="btn btn-default">Create</button> 

                         
                        </div>
                </div>


        
</div>