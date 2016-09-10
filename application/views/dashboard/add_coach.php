<div id="biometric-player-card" class="zoom-anim-dialog card-popup">
    	<div class="card-headin card-show clearfix">
        	
            <div class="main-head">
            	<h3>Coach Detail</h3>
                
            </div>
            
       <form name="AddCoach" method="post" action="<?php echo base_url('dashboard/insert_coach'); ?>" onsubmit="return check_stu_validation()">
            <div class="center-content coach-cart">
            	
                <div class="card-details">
                	
                    <ul class="card-listing">
                        <li class="clearfix">
                            <h6>Coach Name</h6>
                           <input type="text" name="CoachName" id="CoachName"/>
                            </li>
                        </li>
                        <li class="clearfix">
                            <h6>Coach Email</h6>
                           <input type="text" name="CoachEmail" id="CoachEmail" onblur="check_email(this.value)"/>
                          <span style="display:none; float:left;" id="unnsuccessemail" class="error_data">Not a Proper email address.</span>
                       <span style="display:none; float:left;" id="Emailvalid" class="error_data">Email Already Registered.</span> 
                            </li>
                            
                        </li>
                        <li class="clearfix">
                           <input type="submit" value="Add Coach"  class="btn-primary"/>
                           
                        </li>
                    </ul>
                </div>
          </div>
        </form>
          </div> 
       </div>