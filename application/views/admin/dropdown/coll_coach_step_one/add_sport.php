<?php if($Coll_SportID!=0 && $Coll_SportID!=NULL){
		$getColl_Sport=get_row_data('coll_cotch_sport','Coll_SportID',$Coll_SportID); 
		$Coll_SportID=$getColl_Sport['Coll_SportID'];
		$Coll_Sport=$getColl_Sport['Coll_SportName'];
		$Status=$getColl_Sport['Status'];
	}else{
		$Coll_SportID="";
		$Coll_Sport="";
		$Status="";
	}
?>
		
<div class="contentpanel">
      <form id="basicForm_Coll_Sport" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return Coll_Sports();">
      <input type="hidden" name="Coll_SportID" value="<?php echo $Coll_SportID; ?>" />
      
          <div class="panel panel-default">      	
                <div class="panel-heading">          
                  <h4 class="panel-title">Add Sport Details</h4>          
                </div>
            
                <div class="panel-body panel-body-nopadding"> 
                	<fieldset style="border:none;">
                         <?php 
                           if($Coll_SportID!=0 && $Coll_SportID!=NULL){ ?>
						  	  <div class="form-group" id="Laliya_<?php echo $Coll_SportID; ?>">
                                <div class="form-group">
                                  <label class="col-sm-3 control-label">Sport</label>
                                   <div class="col-sm-6">
                                  <input type="text" class="form-control" id="Coll_Sport"  name="Coll_Sport" required="required" value="<?php echo $Coll_Sport; ?>"/>
                                  </div>
                                </div>
                            <div>
                           </div>
                           </div>
                            <?php  } else { ?>
                           
                          
                            <div class="" id="Laliyagiri" >
                               <div class="form-group">
                              <label class="col-sm-3 control-label">sport</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" id="Coll_Sport"  name="Coll_Sport[]" required="required"/>
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
                        <?php if($Coll_SportID==0){ ?>
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
	
	
  jQuery("#basicForm_Coll_Sport").validate({
    highlight: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-error');
    }
  });
});


function Coll_Sports()
{
	 $('#Save_details').text('Loading....');
	 $.ajax({
				url:'<?php echo base_url();?>admin/colleage_cotch/update_Coll_Sport',
				type:'POST',
				data:$('#basicForm_Coll_Sport').serialize(),
				success:function(Coll_Sport_result){
		
				  $.fancybox.close();
				  $('#Coll_Sport_List').html("");
				  $('#Coll_Sport_List').html(Coll_Sport_result);
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