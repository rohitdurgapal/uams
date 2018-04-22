<?php $this->load->view('mainpage')?>
<div id="page-wrapper" >
    <div class="form-grids row widget-shadow" data-example-id="basic-forms" > 
            <div class="form-title">
                <h2>Create New User</h2>
            </div>

    <form name="frmUnit" id="frmUnit" action="<?php echo site_url('start/submituser');?>" method="post">
        <div class="form-body">
            <div class="form-group"> 
                <label for="uname">User Name</label> 
                <input type="text" class="form-control" id="uname" name="uname" placeholder="New User Name"> 
            </div> 

            <div class="form-group"> 
                <label for="cpass">Password</label> 
                <input type="text" class="form-control" id="cpass" name="cpass" placeholder="Password"> 
            </div>




           
            <input type="submit" class="btn btn-default" value="create"> 

            <div id="msg_" style="borders-radius: 4px; font-size: 15px; color: blue; font-weight: bold; background:#ffE4C4">
            </div>
        </div>
    </form>
   
  </div>
 
</div>                  
                        
                   
