
<?php	

	if(!empty($general_setting)){
		for($i=0;$i<1;$i++){		
			$GeneralID = $general_setting[$i]['GeneralID']; 
			$AboutUs = $general_setting[$i]['About_Us']; 
			$YouTube_Url = $general_setting[$i]['YouTube_Url'];
			$Term_Condition=$general_setting[$i]['Term_Condition'];
				}			
	}else{
			
			$GeneralID="";
			$AboutUs = "";
			$YouTube_Url = "";
			$Term_Condition="";
	}
	
	
?>    


<div class="pageheader">
  <h2><i class="fa fa-pencil"></i> Add or Edit About_Us Detail</h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>admin/">Recruit-Board</a></li>
      <li class="active">Add or Edit About_Us Detail</li>
    </ol>
  </div>
</div>

<div class="contentpanel">
     <div class="row"> 
        <div class="col-md-12">
          
          <?php if($this->session->flashdata('successmessage')){?>	
          <div class="alert alert-success" id="msg">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $this->session->flashdata('successmessage');?>
          </div>
          <?php } ?>  
          
          <?php if($this->session->flashdata('errormessage')){?>	
          <div class="alert alert-danger" id="msg">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo $this->session->flashdata('errormessage');?>
          </div>  
          <?php }?>
          
          
          <div class="panel panel-default">
              <div class="panel-heading">                
                <h4 class="panel-title">General Setting</h4>                
              </div>
              
              <div class="panel-body">
                <form name="genral_setting" action="<?php echo base_url(); ?>admin/general_setting/action" method="post">
                <input type="hidden" name="GeneralID" value="<?php echo $GeneralID; ?>" />
                <div class="form-group">
                  <label class="col-sm-3 control-label">YouTube URL </label>
                  <div class="col-sm-9">
                   <input type="text" name="YouTube_Url" class="form-control" value="<?php echo $YouTube_Url;  ?>"  />
                    </div>
                </div> 
                <div class="form-group">
                      <label class="col-sm-3 control-label">AboutUS</label>
                      <div class="col-sm-6">
                        <textarea name="About_Us" id="AboutUS"> <?php echo $AboutUs; ?> </textarea>
                      </div>
                    </div>  
            
                 <div class="form-group">
                          <label class="col-sm-3 control-label">Term Condition</label>
                          <div class="col-sm-6">
                            <textarea name="Term_Condition" id="Term_Condition"> <?php echo $Term_Condition; ?> </textarea>
                          </div>
                        </div> 
              </div>
               
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col-sm-9 col-sm-offset-3" >
                  	<!--<button type="submit" name="Savebutton" value="SaveAndAdd" class="btn btn-primary">Save &amp; Add New</button>-->
                    <button type="submit" name="Savebutton" value="Save" class="btn btn-primary">Save</button>                    
                    <button  type="button" class="btn btn-default" onclick="window.location.href='<?php echo base_url();?>admin/dashboard'">Cancel</button>
                  </div>
                </div>
              </div>
            
          </div>
          </form>          
          
        </div>
     </div>
</div>


<script src="<?php echo base_url();?>js/admin/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url();?>js/admin/jquery-ui-1.10.3.min.js"></script>
<script src="<?php echo base_url();?>js/admin/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url();?>js/admin/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>js/admin/modernizr.min.js"></script>
<script src="<?php echo base_url();?>js/admin/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>js/admin/toggles.min.js"></script>
<script src="<?php echo base_url();?>js/admin/retina.min.js"></script>
<script src="<?php echo base_url();?>js/admin/jquery.cookies.js"></script>

<script src="<?php echo base_url();?>js/admin/jquery.validate.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/admin/ckeditor/ckeditor.js"></script>

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
<script type="text/javascript">
	window.onload = function()
	{
	CKEDITOR.replace( 'AboutUS',
		{
			
				"extraPlugins" : 'imagebrowser',
				"imageBrowser_listUrl" : "<?php echo base_url(); ?>js/admin/ckeditor/ckeditor-imagebrowser/demo/images/images_list.json", 
			toolbar :
			[
				{ name: 'document', items : [ 'Source','-' ] },
				{ name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
				{ name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },

				{ name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
				{ name: 'colors', items : [ 'TextColor','BGColor' ] },
'/',
				{ name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
				{ name: 'styles', items : [ 'Styles','Format','Font','FontSize' ] },
				{ name: 'insert', items : [ 'Image','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe' ] }
			],height: 250,
       	 width: 700,

			
			pasteFromWordRemoveFontStyles:false,
		pasteFromWordRemoveStyles:false
		});
		CKEDITOR.replace( 'Term_Condition',
		{
			
				"extraPlugins" : 'imagebrowser',
				"imageBrowser_listUrl" : "<?php echo base_url(); ?>js/admin/ckeditor/ckeditor-imagebrowser/demo/images/images_list.json", 
			toolbar :
			[
				{ name: 'document', items : [ 'Source','-' ] },
				{ name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
				{ name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },

				{ name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
				{ name: 'colors', items : [ 'TextColor','BGColor' ] },
'/',
				{ name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
				{ name: 'styles', items : [ 'Styles','Format','Font','FontSize' ] },
				{ name: 'insert', items : [ 'Image','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe' ] }
			],height: 250,
       	 width: 700,

			
			pasteFromWordRemoveFontStyles:false,
		pasteFromWordRemoveStyles:false
		});
}
		
	

	
	
</script>
