<?php
	$AdminDetail = get_admin_detail(get_admin_id());
	$AdminProfilePicture = $AdminDetail['AdminProfilePicture'];	
?>
<div class="headerbar">      
      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
      <div class="header-right">
        <ul class="headermenu">          
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url();?>admin_images/<?php echo $AdminProfilePicture?>" alt="" />
                <?php echo $AdminDetail['FirstName']." ".$AdminDetail['LastName'];?>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                <li><a href="<?php echo base_url();?>admin/add_admin/edit_user/<?php echo get_admin_id(); ?>"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>                
                <li><a href="<?php echo base_url();?>admin/login/logout"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
              </ul>
            </div>
          </li>
          
        </ul>
      </div><!-- header-right -->
      
    </div>