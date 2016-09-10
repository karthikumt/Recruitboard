  <section class="container-bg innercontainer-bg clearfix">
    <div class="wrapper">
      <div class="container innercontainer clearfix">
        <div class="login-contain clearfix">
          <div class="login-box clearfix">
            <div class="user-login">
              <h5>New User Sign Up</h5>
            </div>
            <script language="javascript" type="text/javascript">
				function validateform(){
					var error = 0;
					
					var VarEmail= $.trim(document.getElementById('Email').value);
					var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					if(!VarEmail.match(filter)){
						$('#Email').css('border-color','#F00');						
						error = 1;
					}else{
						$('#Email').css('border-color','');						
					}
					
					var Password=document.getElementById('Password').value;					
					if($.trim(Password)==""){
						$('#Password').css('border-color','#F00');						
						error = 1;
					}else{
						$('#Password').css('border-color','');						
					}
					
					if(error==1){
						return false;
					}else{
						return true;
					}
				}
			</script>
            <form method="post" action="<?php echo base_url(); ?>signup/action" onsubmit="return validateform();">
                <div class="login-form clearfix">
					 <?php if ( $this->session->flashdata('errormessage') ) { ?>
                        <div class="errormessage">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?php echo $this->session->flashdata('errormessage'); ?>
                        </div>
                    <?php } ?> 
                    
                  <div class="fr-raw clearfix">
                    <label class="fr-label">Email Address</label>
                    <input type="text" name="Email" id="Email" class="fr-input">
                  </div>
                  <div class="fr-raw clearfix">
                    <label class="fr-label">Password</label>
                    <input type="password" name="Password" id="Password" class="fr-input">
                  </div>
                </div>
                <div class="loginbtn-box clearfix">
                  <div class="login-btn">
                    <input type="submit" class="fr-btn" value="Sign Up">
                  </div>
                  <div class="terms">
                    <p>By signing up, I agree to MiEventos's <a href="#">terms of service, privacy policy,</a> and <a href="#">cookie policy</a> and consent to receiving marketing communications from Eventbrite. </p>
                  </div>
                </div>
            </form>
          </div>
          <div class="new-user clearfix">
            <a href="<?php echo base_url(); ?>login">Login</a>
          </div>
        </div>
      </div>
    </div>
  </section>