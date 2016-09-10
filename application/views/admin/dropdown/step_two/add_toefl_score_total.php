<?php if($Toefl_Total_Score_ID!=0 && $Toefl_Total_Score_ID!=NULL){
		$getToefl_Total_Score=get_row_data('stu_toefl_score_total','Toefl_Total_Score_ID',$Toefl_Total_Score_ID); 
		$Toefl_Total_Score_ID=$getToefl_Total_Score['Toefl_Total_Score_ID'];
		$Toefl_Total_Score=$getToefl_Total_Score['Toefl_Total_Score'];
		$Status=$getToefl_Total_Score['Status'];
	}else{
		$Toefl_Total_Score_ID="";
		$Toefl_Total_Score_="";
		$Status="";
	}
?>
		
<div class="contentpanel">
      <form id="basicForm_Total" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return Toefl_Total_Scores();">
      <input type="hidden" name="Toefl_Total_Score_ID" value="<?php echo $Toefl_Total_Score_ID; ?>" />
      
          <div class="panel panel-default">      	
                <div class="panel-heading">          
                  <h4 class="panel-title">Add Toefl_Total_Score Details</h4>          
                </div>
            
                <div class="panel-body panel-body-nopadding"> 
                	<fieldset style="border:none;">
                         <?php 
                           if($Toefl_Total_Score_ID!=0 && $Toefl_Total_Score_ID!=NULL){ ?>
						  	  <div class="form-group" id="Laliya_<?php echo $Toefl_Total_Score_ID; ?>">
                                <div class="form-group">
                                  <label class="col-sm-3 control-label">SCORE</label>
                                   <div class="col-sm-6">
                                  <input type="text" class="form-control" id="Toefl_Total_Score"  name="Toefl_Total_Score" required="required" value="<?php echo $Toefl_Total_Score; ?>"/>
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
                                <input type="text" class="form-control" id="Toefl_Total_Score_"  name="Toefl_Total_Score[]" required="required"/>
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
                      	<button type="submit" name="Savebutton" id="Save__details" value="Save" class="btn btn-primary">Save</button>
                        <?php if($Toefl_Total_Score_ID==0){ ?>
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
	
	
  jQuery("#basicForm_Total").validate({
    highlight: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-error');
    }
  });
});



function Toefl_Total_Scores()
{
	 $('#Save_Total_details').text('Loading....');
	 $.ajax({
				url:'<?php echo base_url();?>admin/student_athlete_second/update_Toefl_Total_Score',
				type:'POST',
				data:$('#basicForm_Total').serialize(),
				success:function(Total_result){
				  $.fancybox.close();
				  $('#Toefl_Total_Score_List').html("");
				  $('#Toefl_Total_Score_List').html(Total_result);
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