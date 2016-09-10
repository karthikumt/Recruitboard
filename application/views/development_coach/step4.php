  <section class="content">
  <div class="HomeLoader" id="ProcessLoaderID"></div>
        <div class="inner-content">
        	<div class="wrapper">
        		<div class="register step4">
            	<div class="reg-title">
                    <h3>Advertise your services to all other MyRecruitBoard members. Create
detailed ads for any and all services you provide. Select from the
categories below.</h3>
               </div>
                <?php if($this->session->flashdata('errormessage')){?>	
                    <div class="errormessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('errormessage');?>
                    </div>  
                <?php }?>
                  <?php if($this->session->flashdata('successmessage')){?>	
                    <div class="successmessage">
                        <button type="button" class="close commonbtn">&times;</button>
                        <?php echo $this->session->flashdata('successmessage');?>
                    </div>  
                <?php }?>
                 <form id="basicForm" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" action="<?php echo base_url(); ?>development_coach/insert_step4" onsubmit="return getDevel_Coach();">
            	<div class="reg-frm">
                	<div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	 <?php $Gender_details=get_table_details('developement_coach_gender','Dev_GenderID'); ?>
                            <select name="Devel_GenderID" id="Devel_GenderID">
                            	<option value="0">---Select Gender---</option>
                                <?php for($i=0;$i<count($Gender_details);$i++){ ?>
                                	<option value="<?php echo $Gender_details[$i]['Dev_GenderID']; ?>">
                                    	<?php echo $Gender_details[$i]['Dev_GenderName']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                         </div>
                         <div class="inner-frm fr">
                            <?php $Category_details=get_table_details('developement_coach_category','Dev_CategoryID'); ?>
                        	<select name="Devel_CategoryID" id="Devel_CategoryID">
                            	<option value="0">---Select Category ---</option>
                                <?php for($i=0;$i<count($Category_details);$i++){ ?>
                                	<option value="<?php echo $Category_details[$i]['Dev_CategoryID']; ?>">
                                    	<?php echo $Category_details[$i]['Dev_CategoryName']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                         </div>
                    </div>
                    <div class="frm clearfix">
                    	<div class="inner-frm fl">
                        	<input type="text" placeholder="Position " name="Devel_Position" id="Devel_Position">
                         </div>
                    </div>
                    <div class="frm clearfix">
                    	<textarea placeholder="Enter any other specifics you are seeking in your prospective client." name="Devel_Prospective" id="Devel_Prospective"></textarea>
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
			var flag = true;
			
			if($('#Devel_CategoryID').val()==0){
				$('#Devel_CategoryID').css('border','1px solid red');
				flag = false;
			} else {
				$('#Devel_CategoryID').css('border','1px solid #a4a4a4');
			}
			if($('#Devel_Prospective').val()==''){
				$('#Devel_Prospective').css('border','1px solid red');
				flag = false;
			} else {
				$('#Devel_Prospective').css('border','1px solid #a4a4a4');
			}
			
			
			if(flag == false) {
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
	
	function getDevel_Coach()
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