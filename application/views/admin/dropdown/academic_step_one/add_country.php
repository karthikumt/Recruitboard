<?php if($Academic_CountryID!=0 && $Academic_CountryID!=NULL){
		$getAcademic_Country=get_row_data('academic_country','Academic_CountryID',$Academic_CountryID); 
		$Academic_CountryID=$getAcademic_Country['Academic_CountryID'];
		$Academic_Country=$getAcademic_Country['Academic_CountryName'];
		$Status=$getAcademic_Country['Status'];
	}else{
		$Academic_CountryID="";
		$Academic_Country="";
		$Status="";
	}
?>
		
<div class="contentpanel">
      <form id="basicForm_Academic_Country" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return Academic_Countrys();">
      <input type="hidden" name="Academic_CountryID" value="<?php echo $Academic_CountryID; ?>" />
      
          <div class="panel panel-default">      	
                <div class="panel-heading">          
                  <h4 class="panel-title">Add Country Details</h4>          
                </div>
            
                <div class="panel-body panel-body-nopadding"> 
                	<fieldset style="border:none;">
                         <?php 
                           if($Academic_CountryID!=0 && $Academic_CountryID!=NULL ){ ?>
						  	  <div class="form-group" id="Laliya_<?php echo $Academic_CountryID; ?>">
                                <div class="form-group">
                                  <label class="col-sm-3 control-label">Country</label>
                                   <div class="col-sm-6">
                                  <input type="text" class="form-control" id="Academic_Country"  name="Academic_Country" required="required" value="<?php echo $Academic_Country; ?>"/>
                                  </div>
                                </div>
                            <div>
                           </div>
                           </div>
                            <?php  } else { ?>
                           
                          
                            <div class="" id="Laliyagiri" >
                               <div class="form-group">
                              <label class="col-sm-3 control-label">Country</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" id="Academic_Country"  name="Academic_Country[]" required="required"/>
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
                        <?php if($Academic_CountryID==0){ ?>
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
	
	
  jQuery("#basicForm_Academic_Country").validate({
    highlight: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-error');
    }
  });
});


function Academic_Countrys()
{
	 $('#Save_details').text('Loading....');
	 $.ajax({
				url:'<?php echo base_url();?>admin/academic_step_one/update_Academic_Country',
				type:'POST',
				data:$('#basicForm_Academic_Country').serialize(),
				success:function(Academic_Country_result){
		
				  $.fancybox.close();
				  $('#Academic_Country_List').html("");
				  $('#Academic_Country_List').html(Academic_Country_result);
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