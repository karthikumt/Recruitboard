<?php	
	if(!empty($user_info)){
			$AdminID = $user_info['AdminID'];
			$FirstName = $user_info['FirstName'];
			$LastName = $user_info['LastName'];
			$Email = $user_info['Email'];
			$UserName = $user_info['UserName'];
			$Password = $user_info['Password'];
			$AdminProfilePicture = $user_info['AdminProfilePicture'];	
			$AdminType = $user_info['AdminType'];							
	}else{
			$AdminID = "";
			$FirstName = "";
			$LastName = "";
			$Email = "";
			$UserName = "";
			$Password = "";
			$AdminProfilePicture = "";
			$AdminType = "";
	}
?>    


<div class="pageheader">
  <h2><i class="fa fa-pencil"></i> Add or Edit Admin </h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>admin/">Mieventos</a></li>
      <li class="active">Add or Edit Admin</li>
    </ol>
  </div>
</div>

<div class="contentpanel">
     <div class="row"> 
        <div class="col-md-6">
          
          <?php if($this->session->flashdata('successmessage')){?>	
          <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $this->session->flashdata('successmessage');?>
          </div>
          <?php } ?>  
          
          <?php if($this->session->flashdata('errormessage')){?>	
          <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo $this->session->flashdata('errormessage');?>
          </div>  
          <?php }?>
            
          <form id="basicForm" method="post" action="<?php echo base_url();?>admin/add_admin/update_user/" enctype="multipart/form-data" class="form-horizontal">
          <input type="hidden" name="AdminID" value="<?php echo $AdminID;?>" />
          <input type="hidden" name="type" value="action" />
          <input type="hidden" name="a" value="AddEvent" />
          <div class="panel panel-default">
              <div class="panel-heading">                
                <h4 class="panel-title">Add Details</h4>                
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label">First Name </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control"  name="FirstName" id="FirstName" value="<?php echo $FirstName;?>" required />
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Last Name </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control"  name="LastName" id="LastName" value="<?php echo $LastName;?>" required />
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Email </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control"  name="Email" id="Email" value="<?php echo $Email;?>" required />
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">User name </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control"  name="UserName" id="UserName" value="<?php echo $UserName;?>" required />
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Password </label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control" name="Password" id="Password" value="<?php echo $Password;?>" required />
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Profile Picture </label>
                  <div class="col-sm-9">
                    <input type="file" class="form-control" name="AdminProfilePicture" id="AdminProfilePicture"  />
                    <?php if($AdminProfilePicture!="") {?>
                        <img src="<?php echo base_url();?>admin_images/<?php echo $AdminProfilePicture?>" height="50" width="50"/>
                    <?php } ?>
                  </div>
                </div>  
                
                <!--<div class="form-group">
                  <label class="col-sm-3 control-label">Type </label>
                  <div class="col-sm-9">
                    <select class="form-control" name="AdminType" id="AdminType">
                      <option value="admin" <?php if($AdminType=='admin'){ ?> selected="selected" <?php } ?>>Admin</option> 
                      <?php if($_SESSION['KiwiAdminType']=='super-admin'){ ?>                    
                      	<option value="super-admin" <?php if($AdminType=='super-admin'){ ?> selected="selected" <?php } ?>>Super Admin</option>                      
                      <?php } ?>
                    </select>
                  </div>
                </div>  -->            
                
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col-sm-9 col-sm-offset-3">
                  	<!--<button type="submit" name="Savebutton" value="SaveAndAdd" class="btn btn-primary">Save &amp; Add New</button>-->
                    <button type="submit" name="Savebutton" value="Save" class="btn btn-primary">Save</button>                    
                    <button  type="button" class="btn btn-default" onclick="window.location.href='<?php echo base_url();?>admin/add_admin'">Cancel</button>
                  </div>
                </div>
              </div>
            
          </div>
          </form>          
          
        </div>
     </div>
</div>


<script src="<?php echo base_url();?>js/admin/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url();?>js/admin/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url();?>js/admin/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>js/admin/modernizr.min.js"></script>
<script src="<?php echo base_url();?>js/admin/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>js/admin/toggles.min.js"></script>
<script src="<?php echo base_url();?>js/admin/retina.min.js"></script>
<script src="<?php echo base_url();?>js/admin/jquery.cookies.js"></script>

<script src="<?php echo base_url();?>js/admin/jquery.validate.min.js"></script>

<script src="<?php echo base_url();?>js/admin/custom.js"></script>

<script language="javascript" type="text/javascript">
jQuery(document).ready(function(){
  jQuery("#basicForm").validate({
    highlight: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-error');
    }
  });
});
</script>