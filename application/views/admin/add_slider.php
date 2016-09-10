<?php	
	if(!empty($slider_info)){
			$SliderID = $slider_info['SliderID'];
			$Slider_Heading = $slider_info['Slider_Heading']; 
			$Slider_SubHeading = $slider_info['Slider_SubHeading'];
			$Slider_Image =	$slider_info['Slider_Image']; 
			$Slider_ToolTip	= $slider_info['Slider_ToolTip'];
			$Slider_AddDate	= $slider_info['AddDate']; 
			$Slider_Status	= $slider_info['Status']; 		
	}else{
			$SliderID = "";
			$Slider_Heading = "";
			$Slider_SubHeading =  "";
			$Slider_Image =	 "";
			$Slider_ToolTip	= "";
			$Slider_AddDate	= "";
			$Slider_Status	= "";
	}
?>    


<div class="pageheader">
  <h2><i class="fa fa-pencil"></i> Add or Edit Slider </h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>admin/">MyRecruitBoard</a></li>
      <li class="active">Add or Edit Slider</li>
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
            
          <form id="basicForm" method="post" action="<?php echo base_url();?>admin/slider_list/update_slider/" enctype="multipart/form-data" class="form-horizontal">
          <input type="hidden" name="SliderID" value="<?php echo $SliderID;?>" />
          <input type="hidden" name="type" value="action" />
          <input type="hidden" name="a" value="AddEvent" />
          <div class="panel panel-default">
              <div class="panel-heading">                
                <h4 class="panel-title">Add Details</h4>                
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Slider Heading </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control"  name="Slider_Heading" id="Slider_Heading" value="<?php echo $Slider_Heading;?>" required />
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Slider SubHeading </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control"  name="Slider_SubHeading" id="Slider_SubHeading" value="<?php echo $Slider_SubHeading;?>" required />
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Slider Image </label>
                  <div class="col-sm-9">
                    <input type="file" class="form-control"  name="Slider_Image" id="Slider_Image"/>
                      <?php if($Slider_Image!="") {?>
                        <img src="<?php echo base_url();?>home_slider/small/<?php echo $Slider_Image ;?>" height="50" width="50"/>
                    <?php } ?>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-3 control-label">Slider ToolTip </label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control"  name="Slider_ToolTip" id="Slider_ToolTip" value="<?php echo $Slider_ToolTip;?>" required />
                  </div>
                </div>
         
                
              
           
                
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col-sm-9 col-sm-offset-3">
                
                    <button type="submit" name="Savebutton" value="Save" class="btn btn-primary">Save</button>                    
                    <button  type="button" class="btn btn-default" onclick="window.location.href='<?php echo base_url();?>admin/slider_list'">Cancel</button>
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