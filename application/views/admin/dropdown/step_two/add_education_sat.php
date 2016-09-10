<?php if($Education_sat_ID!=0 && $Education_sat_ID!=NULL){
		$getEducation=get_row_data('stu_education_sat','Education_sat_ID',$Education_sat_ID); 
		$Education_sat_ID=$getEducation['Education_sat_ID'];
		$Education_sat=$getEducation['Education_sat_Name'];
		$Status=$getEducation['Status'];
	}else{
		$Education_sat_ID="";
		$Education_sat="";
		$Status="";
	}
?>
		
<div class="contentpanel">
      <form id="basicForm_sat" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return education_sat();">
      <input type="hidden" name="Education_sat_ID" value="<?php echo $Education_sat_ID; ?>" />
      
          <div class="panel panel-default">      	
                <div class="panel-heading">          
                  <h4 class="panel-title">Add Education SAT Score Details</h4>          
                </div>
            
                <div class="panel-body panel-body-nopadding"> 
                	<fieldset style="border:none;">
                         <?php 
                           if($Education_sat_ID!=0 && $Education_sat_ID!=NULL){ ?>
						  	  <div class="form-group" id="Laliya_<?php echo $Education_sat_ID; ?>">
                                <div class="form-group">
                                  <label class="col-sm-3 control-label">Score</label>
                                   <div class="col-sm-6">
                                  <input type="text" class="form-control" id="Education_sat"  name="Education_sat" required="required" value="<?php echo $Education_sat; ?>"/>
                                  </div>
                                </div>
                            <div>
                           </div>
                           </div>
                            <?php  } else { ?>
                           
                          
                            <div class="" id="Laliyagiri" >
                               <div class="form-group">
                              <label class="col-sm-3 control-label">Score</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" id="Education_sat"  name="Education_sat[]" required="required"/>
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
                      	<button type="submit" name="Savebutton" id="Save_sat_details" value="Save" class="btn btn-primary">Save</button>
                        <?php if($Education_sat_ID==0){ ?>
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
	
	
  jQuery("#basicForm_sat").validate({
    highlight: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-error');
    }
  });
});


function education_sat()
{
	 $('#Save_sat_details').text('Loading....');
	 $.ajax({
				url:'<?php echo base_url();?>admin/student_athlete_second/update_education_sat',
				type:'POST',
				data:$('#basicForm_sat').serialize(),
				success:function(sat_result){
				  $.fancybox.close();
				  $('#Education_sat_List').html("");
				  $('#Education_sat_List').html(sat_result);
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