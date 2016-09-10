<?php if($Education_Core_Gpa_ID!=0 && $Education_Core_Gpa_ID!=NULL ){
		$getEducation=get_row_data('stu_education_Core_Gpa','Education_Core_Gpa_ID',$Education_Core_Gpa_ID); 
		$Education_Core_Gpa_ID=$getEducation['Education_Core_Gpa_ID'];
		$Education_Core_Gpa=$getEducation['Education_Core_Gpa_Name'];
		$Status=$getEducation['Status'];
	}else{
		$Education_Core_Gpa_ID="";
		$Education_Core_Gpa="";
		$Status="";
	}
?>
		
<div class="contentpanel">
      <form id="basicForm_Core_Gpa" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return education_Core_Gpa();">
      <input type="hidden" name="Education_Core_Gpa_ID" value="<?php echo $Education_Core_Gpa_ID; ?>" />
      
          <div class="panel panel-default">      	
                <div class="panel-heading">          
                  <h4 class="panel-title">Add Education Core GPA Score Details</h4>          
                </div>
            
                <div class="panel-body panel-body-nopadding"> 
                	<fieldset style="border:none;">
                         <?php 
                           if($Education_Core_Gpa_ID!=0 && $Education_Core_Gpa_ID!=NULL ){ ?>
						  	  <div class="form-group" id="Laliya_<?php echo $Education_Core_Gpa_ID; ?>">
                                <div class="form-group">
                                  <label class="col-sm-3 control-label">SCORE</label>
                                   <div class="col-sm-6">
                                  <input type="text" class="form-control" id="Education_Core_Gpa"  name="Education_Core_Gpa" required="required" value="<?php echo $Education_Core_Gpa; ?>"/>
                                  </div>
                                </div>
                            <div>
                           </div>
                           </div>
                            <?php  } else { ?>
                           
                          
                            <div class="" id="Laliyagiri" >
                               <div class="form-group">
                              <label class="col-sm-3 control-label">SCORE</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" id="Education_Core_Gpa"  name="Education_Core_Gpa[]" required="required"/>
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
                      	<button type="submit" name="Savebutton" id="Save_Core_Gpa_details" value="Save" class="btn btn-primary">Save</button>
                        <?php if($Education_Core_Gpa_ID==0){ ?>
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
	
	
  jQuery("#basicForm_Core_Gpa").validate({
    highlight: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-error');
    }
  });
});


function education_Core_Gpa()
{
	 $('#Save_Core_Gpa_details').text('Loading....');
	 $.ajax({
				url:'<?php echo base_url();?>admin/student_athlete_second/update_education_Core_Gpa',
				type:'POST',
				data:$('#basicForm_Core_Gpa').serialize(),
				success:function(Core_Gpa_result){
				  $.fancybox.close();
				  $('#Education_Core_Gpa_List').html("");
				  $('#Education_Core_Gpa_List').html(Core_Gpa_result);
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