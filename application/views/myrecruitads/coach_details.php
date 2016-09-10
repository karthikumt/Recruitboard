<?php error_reporting(0); ?>
<style type="text/css">
  .info-details h2 a
  {
      background-color: #F58020;
    color: white;
    font-size: 24px;
    padding: 5px 18px;
    margin-top: 12px;
    text-decoration: none;
  }

</style>
<div id="myrecruitboard-ads" class="zoom-anim-dialog card-popup">
      
    <div class="card-headin card-show clearfix">          
            <div class="main-head">
              <h3>Coach Details</h3>
                
            </div>
               <div class="forums-details">
                <div class="da-update couch-details">
                  <div class="frm clearfix">
                        <div class="info-details">
                    <h3>To contact this coach, please click the Recruit Me Now button</h3>
                            <div class="coach_newinfo">
                             <!-- <h4>YOU NEED TO INCLUDE THE FOLLOWING INFORMATION:</h4>-->
                                <ul class="NP-Ads">
                                  <!--<li>1. For the Subject line of your email type. MyRecruitBoard Ad Response-(Your Name) </li>
                                    <li>2. For the body of the email,include everything you see below in form.
                                    <ul class="NP-SubAds">
                                        <li>Full Name and Grade</li>
                                        <li>Sport and Position</li>
                                        <li>Height and Weight</li>
                                        <li>GPA and Test Scores</li>
                                        <li>Game and/or Training Film</li>
                                        <li>A brief description of why you are a great fit for their program</li>
                                    </ul> 
                                    </li>-->
                                    <li>Write a brief description of why you are a great fit for their program.</li>
                                </ul>
                            </div>

                            <?php 
                           // print_r($Profile1); 
                            $user_data= get_row_data('user_register','UserID',$Profile1['UserID']);
                            // print_r($user_data);
                              ?>
                            <?php 
                            if($user_data['UserType']==2)
                            {

                              $send_pos = $_POST['pos'];
                              $UserID=$this->session->userdata('MyRecuritID'); 
                              $name =$stu_details['FirstName'];
                              $fullname =$stu_details['FirstName']." ".$stu_details['LastName'];
                              $garade =  $stu_details['FirstName'];
                              $sportdata = get_row_data('stu_athlete_sport','SportID',$Profile1['Juco_SportID']);
                             // $Sport = $sportdata['SportName'];
                              $positiondata=get_row_data('stu_athlete_position','PositionID',$Profile1['Juco_PositionID']); 
                             // var_dump($Sport);
                             // $getdata=get_sport_data('stu_athlete_position','PositionID',$Profile['Stu_PositionID']);
                              $Position = $positiondata['Position'];
                              $heightdata = get_row_data('stu_athlete_height','HeightID',$Profile1['Juco_HeightID']);
                              $height = $heightdata['HeightName'];
                              $inchesdata = get_row_data('stu_athlete_inches','InchesID',$Profile1['Juco_InchesID']);
                              $inches = $inchesdata['InchesName'];
                              $weightdata = get_row_data('stu_athlete_weight','WeightID',$Profile1['Juco_WeightID']);
                              $weight = $weightdata['WeightName'];
                              $gpadata = get_row_data('stu_education_gpa','Education_gpa_ID',$Profile1['Juco_GpaID']);
                            // print_r($Profile);
                              $coachemail = $Userdetails['UserEmail'];

                            }
                            else
                            {
                              $send_pos = $_POST['pos'];
                              $UserID=$this->session->userdata('MyRecuritID'); 
                              $name =$stu_details['FirstName'];
                              $fullname =$stu_details['FirstName']." ".$stu_details['LastName'];
                              $garade =  $stu_details['FirstName'];
                              $sportdata = get_row_data('stu_athlete_sport','SportID',$Profile['Stu_SportID']);
                              $Sport = $sportdata['SportName'];
                              $positiondata=get_row_data('stu_athlete_position','PositionID',$Profile['Stu_PositionID']); 
                             // $getdata=get_sport_data('stu_athlete_position','PositionID',$Profile['Stu_PositionID']);
                              $Position = $positiondata['Position'];
                              $heightdata = get_row_data('stu_athlete_height','HeightID',$Profile['Stu_HeightID']);
                              $height = $heightdata['HeightName'];
                              $inchesdata = get_row_data('stu_athlete_inches','InchesID',$Profile['Stu_InchesID']);
                              $inches = $inchesdata['InchesName'];
                              $weightdata = get_row_data('stu_athlete_weight','WeightID',$Profile['Stu_WeightID']);
                              $weight = $weightdata['WeightName'];
                              $gpadata = get_row_data('stu_education_gpa','Education_gpa_ID',$Profile['Stu_GpaID']);
                            // print_r($Profile);
                              $coachemail = $Userdetails['UserEmail'];
                            }
                            //echo $gpa = $gpadata['Education_gpa_Name'];
$profile_link_url = base_url()."student_athlete_v?userid=".$this->session->userdata('MyRecuritID');

           //  $link = $base_url()                             
  $mail = "mailto:$coachemail?subject=$fullname - ($send_pos) &amp;body= 
Full Name:                  $fullname %0D%0A 
Sport and Position:       And $Position %0D%0A 
Height and Weight:     $height $inches And $weight %0D%0A 
Link:                              $profile_link_url %0D%0A %0D%0A 
A brief description of why you are a great fit for their program:
                            ";

                            ?>
                          <h2><a href="<?php echo $mail; ?>">Recruit Me Now<?php //echo $Userdetails['UserEmail']; ?></a></h2>
              </div>
                    </div>
                </div>
                </div>
            </div>
  </div>
  
  
  