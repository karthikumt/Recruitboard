 
    <section class="content">
     <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="register step4">
            	<div class="reg-title">
                    <h3>One last step, advertise your services to all other MyRecruitBoard
members. Create detailed ads for any and all services you provide. Select
from the categories below.</h3>
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
                 <form name="step3" action="<?php echo base_url('academic_tutor/insert_step4'); ?>" method="post" enctype="multipart/form-data" onsubmit="return check_ac_validation();">
            	<div class="reg-frm">
                	<div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<select name="Category" id="Category">
                            	<option value="0">---Select Category ---</option>
                                
                                     <?php $Country_detail = get_table_details('academic_category','Academic_CategoryID'); ?>
                                      <?php for($i=0;$i<count($Country_detail);$i++) { ?>
                                <option value="<?php echo $Country_detail[$i]['Academic_CategoryID']; ?>">
                                <?php echo $Country_detail[$i]['Academic_CategoryName']; ?></option>
                                <?php } ?>
                            </select>
                         </div>
                    </div>
                    <div class="frm clearfix">
                    	<textarea placeholder="Explain additional information about the services you are offering." name="ServiceUnique" id="ServiceUnique"></textarea>
                     </div>
                   <div class="frm clearfix">
                    <div class="inner-frm">
                    	<div class="btn-reg j1">
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
                    
                </div>
                </form>
           </div>
           </div>
        </div>
    </section>
    
    <script>
	   succ = true;
		function valid_data()
		{
		var sucess = true;
	
				
		
		 if($('#Category').val()=='0')
		 {
			$('#Category').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#Category').css('border','1px solid #a4a4a4');
			}
		 if($('#ServiceUnique').val()=='')
		 {
			$('#ServiceUnique').css('border','1px solid red');
			sucess = false;
		 } 
		 else {
			$('#ServiceUnique').css('border','1px solid #a4a4a4');
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
	   
     function check_ac_validation()
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

</script>  
<style>

</style>
    