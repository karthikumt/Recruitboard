<?php if($Academic_CategoryID!=0 && $Academic_CategoryID!=NULL){
		$getAcademic_Category=get_row_data('academic_category','Academic_CategoryID',$Academic_CategoryID); 
		$Academic_CategoryID=$getAcademic_Category['Academic_CategoryID'];
		$Academic_Category=$getAcademic_Category['Academic_CategoryName'];
		$Status=$getAcademic_Category['Status'];
	}else{
		$Academic_CategoryID="";
		$Academic_Category="";
		$Status="";
	}
?>
		
<div class="contentpanel">
      <form id="basicForm_Academic_Category" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return Academic_Categorys();">
      <input type="hidden" name="Academic_CategoryID" value="<?php echo $Academic_CategoryID; ?>" />
      
          <div class="panel panel-default">      	
                <div class="panel-heading">          
                  <h4 class="panel-title">Add Category Details</h4>          
                </div>
            
                <div class="panel-body panel-body-nopadding"> 
                	<fieldset style="border:none;">
                         <?php 
                           if($Academic_CategoryID!=0 && $Academic_CategoryID!=NULL){ ?>
						  	  <div class="form-group" id="Laliya_<?php echo $Academic_CategoryID; ?>">
                                <div class="form-group">
                                  <label class="col-sm-3 control-label">Category</label>
                                   <div class="col-sm-6">
                                  <input type="text" class="form-control" id="Academic_Category"  name="Academic_Category" required="required" value="<?php echo $Academic_Category; ?>"/>
                                  </div>
                                </div>
                            <div>
                           </div>
                           </div>
                            <?php  } else { ?>
                           
                          
                            <div class="" id="Laliyagiri" >
                               <div class="form-group">
                              <label class="col-sm-3 control-label">Category</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" id="Academic_Category"  name="Academic_Category[]" required="required"/>
                              </div>
                            </div>   
                                <div class="align-right">
                                <input type="button" class="btn btn-danger" id="Remove" value="Remove" onclick="Remove_data(this.id)"  style="display:none; float:right; margin:-54px 88px 0 0;" >
							</div>
                            </div>
                            <div id="MyIds"></div> 	
                           	<div class="cl"></div>
                            <?php } ?>
                </fieldset>
                </div>
            
                <div class="panel-footer">
                    <div class="row">
                      <div class="col-sm-9 col-sm-offset-3">
                      	<button type="submit" name="Savebutton" id="Save_details" value="Save" class="btn btn-primary">Save</button>
                        <?php if($Academic_CategoryID==0){ ?>
                        <button type="button" name="Savebutton" value="AddMore" class="btn btn-primary" onclick="ValidateDatas()">AddMore</button>
                        <?php } ?>
                        <button  type="button" class="btn btn-default" onclick="$.fancybox.close();">Cancel</button>
                      </div>
                    </div>
                  </div>
            
          </div>
			<input type="hidden" id="NewHiddenLala" value="0" />
      </form>
      
     
</div>
<script language="javascript" type="text/javascript">
jQuery(document).ready(function(){
	
	
  jQuery("#basicForm_Academic_Category").validate({
    highlight: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-error');
    }
  });
});


function Academic_Categorys()
{
	 $('#Save_details').text('Loading....');
	 $.ajax({
				url:'<?php echo base_url();?>admin/academic_step_four/update_Academic_Category',
				type:'POST',
				data:$('#basicForm_Academic_Category').serialize(),
				success:function(Academic_Category_result){
		
				  $.fancybox.close();
				  $('#Academic_Category_List').html("");
				  $('#Academic_Category_List').html(Academic_Category_result);
				}

            });
			return false;
}

</script>

<script>

function ValidateDatas(){

var NewHiddenLala=$('#NewHiddenLala').val();
$('#MyIds').append($( "#Laliyagiri" ).clone().attr('id','Laliyagiri_'+NewHiddenLala));
$('#Laliyagiri_'+NewHiddenLala).find('#Remove').attr('id','Remove_'+NewHiddenLala);
$('#Laliyagiri_'+NewHiddenLala).find("input:text").val("");


$('#Remove_'+NewHiddenLala).show();
	NewHiddenLala=parseInt(NewHiddenLala)+1;
	$('#NewHiddenLala').val(NewHiddenLala);
	
}
function Remove_data(Myids)
{
	var res = Myids.split("_"); 
	$('#Laliyagiri_'+res[1]).remove();
}
function Remove_Details(ID)
{
	if(confirm('Are You Sure?'))
	{
		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>",
			data: {ID:ID,a:'DeleteTrack'},
			success : function(resp){
				$('#Laliya_'+ID).remove();	
				}
    	});
	}
	else 
		return false;

}

</script>