  <section class="content">
   <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="register step4">
            	<div class="reg-title">
                    <h3>One last step, let's customize your recruits.  Create detailed and need
specific ads for any and all students for which you are recruiting.
Select from the categories below.</h3>
               </div>
                <?php if($this->session->flashdata('ErrorMsg')){?> 
                    <div class="errormessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('ErrorMsg');?>
                    </div>  
                <?php }?>
                  <?php if($this->session->flashdata('successmessage')){?> 
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                  <form name="step4" action="<?php echo base_url('colleage_admission/insert_step4'); ?>" method="post" enctype="multipart/form-data" onsubmit="return check_validation();">
            	<div class="reg-frm">
                	<div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<select name="FieldOfInterest" id="FieldOfInterest" onchange="getColleage(this.value)">
                            	<option value="0">Field of Interest</option>
                                 <?php $Country_detail = get_table_details('coll_admi_field','Coll_admi_FieldID'); ?>
                                  <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Coll_admi_FieldID']; ?>">
                                <?php echo $Country_detail[$i]['Coll_admi_FieldName']; ?></option>
                                <?php } ?>
                            </select>
                         </div>
                         <div class="inner-frm fr">
                        	<select name="Major" id="Major">
                            	<option value="0">Major</option>
                            </select>
                         </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<select name="Gpa" id="Gpa">
                            	<option value="0">GPA</option>
                                 <?php $Country_detail = get_table_details('coll_admi_gpalist','Coll_admi_GpaListID'); ?>
                                  <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Coll_admi_GpaListID']; ?>">
                                <?php echo $Country_detail[$i]['Coll_admi_GpaListName']; ?></option>
                                <?php } ?>
                            </select>
                         </div>
                         <div class="inner-frm fr">
                        	<select name="TestScore" id="TestScore">
                            	<option value="0">Test Score</option>
                                 <?php $Country_detail = get_table_details('coll_admi_testdata','Coll_admi_TestDataID'); ?>
                                  <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Coll_admi_TestDataID']; ?>">
                                <?php echo $Country_detail[$i]['Coll_admi_TestDataName']; ?></option>
                                <?php } ?>
                            </select>
                         </div>
                    </div>
                    <div class="frm clearfix">
                    	<textarea placeholder="Other specifics you would like to add?" name="OtherSpecific" id="OtherSpecific"></textarea>
                     </div>
                   <div class="frm clearfix">
                    <div class="inner-frm">
                    	<div class="btn-post">
                        	<input type="button" id="adpostdata" value="post ad to MyRecruitBoard" onclick="valid_data();">
                        </div>
                       </div>
                    </div>
                    <div class="frm clearfix">
                    	<span class="sucess-msg" id="sucess_post" style="display:none;">
                        	Thank you, your ad has been posted. Please Visit the MyRecruitBord tab to create additional ads at anytime. Ad postings are unlimited.
                        </span>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<div class="btn-reg">
                        		<input type="submit" id="success_coach" disabled="disabled" value="complete profile">
                            </div>
                         </div>
                    </div>
                    </form>
                </div>
           </div>
           </div>
        </div>
    </section>

<script>

	
		succ = true;
		function valid_data()
		{
		 var sucess = true;
				
							
					
				 if($('#FieldOfInterest').val()=='0')
				 {
					$('#FieldOfInterest').css('border','1px solid red');
					sucess = false;
				 } 
				 else {
					$('#FieldOfInterest').css('border','1px solid #a4a4a4');
					}
				 if($('#Major').val()=='')
				 {
					$('#Major').css('border','1px solid red');
					sucess = false;
				 } 
				 else {
					$('#Major').css('border','1px solid #a4a4a4');
					}
				
			
				
				 if($('#Gpa').val()=='0')
				 {
					
					$('#Gpa').css('border','1px solid red');
					sucess = false;
				 } 
				 else {
					$('#Gpa').css('border','1px solid #a4a4a4');
					}
					
			
				if($('#TestScore').val()=='0')
				 {
					
					$('#TestScore').css('border','1px solid red');
					sucess = false;
				 } 
				 else {
					$('#TestScore').css('border','1px solid #a4a4a4');
					}
					
			if(sucess == false) {
			succ =false;
			$('#success_coach').attr('disabled', true);
			$('#sucess_post').css('display','none'); 
			}
			 else 
			{
			succ =true;
			$('#sucess_post').css('display','block');
			$('#success_coach').removeAttr("disabled");
			}			
					
					
						
		}
			
	 function check_validation()
	  {
		
			if(succ==false)
			{
			return false;
			}
			else
			{
			$('#ProcessLoaderID').show();
			return true;
			}		
			
	  
	  }
function getColleage(Major)
{
	$("#Major").html("<option>Loading...</option>");
	 $.ajax({
     type: "POST",
     url: "<?php echo base_url(); ?>termcondition/check_colleage/",
     data: {Major:Major},
     cache: false,
     success: function(result){
       		$("#Major").html("");
			$("#Major").append(result);
	 }
     });
}
	  
	  

</script>