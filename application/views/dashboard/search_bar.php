<script type="text/javascript">

	$(document).ready(function(e) {
            $('.nstSlider').nstSlider({
			"left_grip_selector": ".leftGrip",
			"right_grip_selector": ".rightGrip",
			"value_bar_selector": ".bar",
			"value_changed_callback": function(cause, leftValue, rightValue) {
			$(this).parent().find('.leftLabel').text(leftValue);
			$(this).parent().find('.rightLabel').text(rightValue);
			}
			});
			
		 
    });

</script>

<script>
    (function($){
        $(window).load(function(){
            $(".dash-scrollbar").mCustomScrollbar({
				setHeight: 115,	
			});
		});
    })(jQuery);
</script>

<script type="text/javascript">

	$(document).ready(function(){
		$('.tab ul li a').tabs();
	});

	
</script>

 <script>
	$(function() {
	$( "#slider-single-range" ).slider({
	range: "min",
	value: 50,
	min: 1,
	max: 100,
	//slide: function( event, ui ) {
	//$( "#amount" ).val( "" + ui.value );
	//}
	});
	$( "#slider-single-range" ).slider( "float");
	});

</script>

<div class="dashboard-content">
		<div class="wrapper">
        	<div class="my_Account">
            	<div class="my-acc-top clearfix">
                    <div class="dashboard-Lbox fl">
                        <div class="dashinner-lbox">
                            <div class="dash-title">
                                <h3>What are you looking for today?</h3>
                            </div>
                            <div class="my_acc_frm clearfix">
                                <div class="acc_inner-frm">
                                    <label>I’m a</label>
                                    <select>
                                        <option value="1">Select name</option>
                                    </select>
                                </div>
                                <div class="acc_inner-frm">
                                    <label>Searching for a</label>
                                    <select>
                                        <option value="1">Select name from</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-Rbox fr">
                        <div class="dashinner-rbox">
                            <div class="dash-title">
                                <h3>Great, let’s start with a basic Search.</h3>
                            </div>
                            <div class="my_acc_frm ">
                                <div class="acc_frm clearfix">
                                    <div class="acc_inner-frm">
                                        <label>Sport</label>
                                        <select>
                                            <option value="1">Sport</option>
                                        </select>
                                    </div>
                                    <div class="acc_inner-frm">
                                        <label>Position</label>
                                        <select>
                                            <option value="1">Position</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="acc_frm clearfix">
                                    <div class="btn-search fr">
                                        <input type="submit" value="Search">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabing">
                	<div class="tab">
                    	<ul class="clearfix">
                        	<li><a href="#academic_filter">Academic Filter</a></li>
                            <li><a href="#blometric_filter">Blometric Filter</a></li>
                            <li><a href="#location_filter">Location Filter</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                    	<div id="academic_filter" class="coment_main_div">
                            <div class="acc-filter clearfix">
                                <div class="cols-2">
                                    <div class="filter clearfix">
                                        <div class="filter-name">GPA</div>
                                        <!--<div class="nstSlider" data-range_min="10" data-range_max="100" data-cur_min="12"
                                         data-cur_max="98">
                                            <div class="bar"></div>
                                            <div class="leftGrip"></div>
                                            <div class="rightGrip"></div>
                                        </div>-->
                                        <!--<div class="leftLabel fl"></div>
                                        <div class="rightLabel fr"></div>-->

                                    </div>
                                    <div class="filter clearfix">
                                        <div class="filter-name">GPA</div>
                                        <div class="nstSlider" data-range_min="10" data-range_max="100" data-cur_min="34"
                                         data-cur_max="66">
                                            <div class="bar"></div>
                                            <div class="leftGrip"></div>
                                            <div class="rightGrip"></div>
                                        </div>
                                        <div class="leftLabel fl"></div>
                                        <div class="rightLabel fr"></div>
                                    </div>        
                                </div>
                                <div class="cols-2">
                                    <div class="filter clearfix">
                                        <div class="filter-name">ACT</div>
                                        <div class="nstSlider" data-range_min="10" data-range_max="100" data-cur_min="12"
                                         data-cur_max="98">
                                            <div class="bar"></div>
                                            <div class="leftGrip"></div>
                                            <div class="rightGrip"></div>
                                        </div>
                                        <div class="leftLabel fl"></div>
                                        <div class="rightLabel fr"></div>
                                      </div>
                                      <div class="filter clearfix">
                                        <div class="filter-name">SAT</div>
                                        <div class="nstSlider" data-range_min="10" data-range_max="100" data-cur_min="34"
                                         data-cur_max="66">
                                            <div class="bar"></div>
                                            <div class="leftGrip"></div>
                                            <div class="rightGrip"></div>
                                        </div>
                                        <div class="leftLabel fl"></div>
                                        <div class="rightLabel fr"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-results">
                                <div class="result-count clearfix">
                                    <div class="show-count fl">Showing <span> 25 </span> of <span> 467 </span> Results</div>
                                    <div class="show-count fr">View <span> 25 </span> Per Page</div>
                                </div>
                                <ul class="grid-Accadmic clearfix">
                                <?php for ($i=0;$i<count($search_result);$i++)
								{
								?>
                                    <li>
                                        <div class="grid-img">
                                        <?php if($search_result[$i]['UserType']=='1')
										{
										$tablename = 'student_athlete';
										$ProfileImage ='Stu_ProfileImage';
										$SportID = 'Stu_SportID';
										$PositionID ='Stu_PositionID';
										$CountryID ='Stu_CountryID';
										$ZipCode = 'Stu_ZipCode';
										$coulum=array($SportID,$PositionID,$CountryID,$ZipCode,$ProfileImage);
										
										$image_path='register_images/student_athlete/small';
										} 
										else if($search_result[$i]['UserType']=='2')
										{
										$tablename ='juco_transfer';
										$ProfileImage='Juco_ProfileImage';
										$SportID='Juco_SportID';
										$PositionID='Juco_PositionID';
										$CountryID='Juco_CountryID';
										$ZipCode = 'Juco_ZipCode';
										$coulum=array($SportID,$PositionID,$CountryID,$ZipCode,$ProfileImage);
										$image_path='register_images/juco_transfer/small';
										} 
										else if($search_result[$i]['UserType']=='3')
										{
										$tablename ='colleage_coach';
										$ProfileImage='Coach_ProfileImage';
										$image_path='register_images/colleage_coach/small';
										$SportID = 'Stu_SportID';
										$PositionID ='Stu_PositionID';
										$CountryID ='Stu_CountryID';
										$ZipCode = 'Stu_ZipCode';
										$coulum=array($ProfileImage);
										} 
										else if($search_result[$i]['UserType']=='4')
										{
										$tablename ='colleage_admission';
										$ProfileImage='colleage_admission';
										$image_path='register_images/colleage_admission/small';
										$SportID = 'Stu_SportID';
										$PositionID ='Stu_PositionID';
										$CountryID ='Stu_CountryID';
										$ZipCode = 'Stu_ZipCode';
										$coulum=array($SportID,$PositionID,$CountryID,$ZipCode,$ProfileImage);
										} 
										else if($search_result[$i]['UserType']=='5')
										{
										$tablename ='highschool_coach';
										$ProfileImage='High_ProfilePic';
										$image_path='register_images/highschool_coach/small';
										$SportID = 'Stu_SportID';
										$PositionID ='Stu_PositionID';
										$CountryID ='Stu_CountryID';
										$ZipCode = 'Stu_ZipCode';
										$coulum=array($SportID,$PositionID,$CountryID,$ZipCode,$ProfileImage);
										} 
										else if($search_result[$i]['UserType']=='6')
										{
										$tablename ='club_coach';
										$ProfileImage='Club_ProfileImage';
										$image_path='register_images/club_coach/small';
										$SportID = 'Stu_SportID';
										$PositionID ='Stu_PositionID';
										$CountryID ='Stu_CountryID';
										$ZipCode = 'Stu_ZipCode';
										$coulum=array($SportID,$PositionID,$CountryID,$ZipCode,$ProfileImage);
										} 
										else if($search_result[$i]['UserType']=='7')
										{
										$tablename ='highschool_teacher';
										$ProfileImage='Teach_ProfilePic';
										$image_path='register_images/highschool_teacher/small';
										$SportID = 'Stu_SportID';
										$PositionID ='Stu_PositionID';
										$CountryID ='Stu_CountryID';
										$ZipCode = 'Stu_ZipCode';
										$coulum=array($SportID,$PositionID,$CountryID,$ZipCode,$ProfileImage);
										} 
										else if($search_result[$i]['UserType']=='8')
										{
										$tablename ='developement_coach';
										$ProfileImage='Devel_ProfileImage';
										$image_path='register_images/developement_coach/small';
										$SportID = 'Stu_SportID';
										$PositionID ='Stu_PositionID';
										$CountryID ='Stu_CountryID';
										$ZipCode = 'Stu_ZipCode';
										$coulum=array($SportID,$PositionID,$CountryID,$ZipCode,$ProfileImage);
										} 
										else if($search_result[$i]['UserType']=='9')
										{
										$tablename ='academic_tutor';
										$ProfileImage='Ac_ProfilePic';
										$image_path='register_images/academic_tutor/small';
										$SportID = 'Stu_SportID';
										$PositionID ='Stu_PositionID';
										$CountryID ='Stu_CountryID';
										$ZipCode = 'Stu_ZipCode';
										$coulum=array($SportID,$PositionID,$CountryID,$ZipCode,$ProfileImage);
										} 
										?>
                                        <?php $user_data = get_user_data($tablename,$coulum,$search_result[$i]['UserID'])?>                
                                            <a href="<?php echo base_url(); ?>view_dashboard/search/<?php echo $search_result[$i]['UserID'];  ?>" title="Academic Filter"><img src="<?php echo base_url($image_path."/".$user_data[$ProfileImage]); ?>" alt=""></a>
                                        </div>
                                        <div class="grid-desc">
                                            <h6><?php echo $search_result[$i]['FirstName']." ".$search_result[$i]['LastName']; ?> </h6>
                                              <?php $getsport=get_row_data('stu_athlete_sport','SportID',$user_data[$SportID]); ?>
                                               <?php $getposition=get_row_data('stu_athlete_position','PositionID',$user_data[$PositionID]); ?>
                                            <span class="small-text"><?php echo $getsport['SportName'].",".$getposition['Position']; ?></span>
                                             <?php $getcountry=get_row_data('country','CountryID',$user_data[$CountryID]); ?>
                                            <div class="area"><?php echo $getcountry['CountryName'].",". $user_data[$ZipCode]; ?></div>
                                        </div>
                                        <div class="grid-ft clearfix">
                                            <div class="add-user gf"><a href="#"></a></div>
                                            <div class="view-icon gf"><a href="#"></a></div>
                                            <div class="video-img gf"><a href="#"></a></div>
                                            <div class="mail-icon gf"><a href="#"></a></div>
                                        </div>
                                    </li>
                                  <?php  } ?>
                                </ul>
                                <div class="see-more">
                                    <a href="#">See More Results</a>
                                </div>
                            </div>
                        </div>
                     <!--   <div id="blometric_filter" class="coment_main_div">
                            <ul class="blometric-filter clearfix">
                                <li class="filter">
                                    <div class="filter-name">Weight</div>
                                    <div class="nstSlider" data-range_min="10" data-range_max="100" data-cur_min="34"
                                     data-cur_max="66">
                                        <div class="bar"></div>
                                        <div class="leftGrip"></div>
                                        <div class="rightGrip"></div>
                                    </div>
                                    <div class="leftLabel fl"></div>
                                    <div class="rightLabel fr"></div>
                                    <div class="cl"></div>
                                </li>
                                <li class="filter">
                                    <div class="filter-name">Height Without Shoes</div>
                                    <div class="nstSlider" data-range_min="10" data-range_max="100" data-cur_min="34"
                                     data-cur_max="66">
                                        <div class="bar"></div>
                                        <div class="leftGrip"></div>
                                        <div class="rightGrip"></div>
                                    </div>
                                    <div class="leftLabel fl"></div>
                                    <div class="rightLabel fr"></div>
                                    <div class="cl"></div>
                                </li>
                                <li class="filter">
                                    <div class="filter-name">Height With Shoes</div>
                                    <div class="nstSlider" data-range_min="10" data-range_max="100" data-cur_min="34"
                                     data-cur_max="66">
                                        <div class="bar"></div>
                                        <div class="leftGrip"></div>
                                        <div class="rightGrip"></div>
                                    </div>
                                    <div class="leftLabel fl"></div>
                                    <div class="rightLabel fr"></div>
                                    <div class="cl"></div>
                                </li>
                                <li class="filter">
                                    <div class="filter-name">Wingspan</div>
                                    <div class="nstSlider" data-range_min="10" data-range_max="100" data-cur_min="34"
                                     data-cur_max="66">
                                        <div class="bar"></div>
                                        <div class="leftGrip"></div>
                                        <div class="rightGrip"></div>
                                    </div>
                                    <div class="leftLabel fl"></div>
                                    <div class="rightLabel fr"></div>
                                    <div class="cl"></div>
                                </li> 
                                <li class="filter">
                                    <div class="filter-name">Hand Width</div>
                                    <div class="nstSlider" data-range_min="10" data-range_max="100" data-cur_min="34"
                                     data-cur_max="66">
                                        <div class="bar"></div>
                                        <div class="leftGrip"></div>
                                        <div class="rightGrip"></div>
                                    </div>
                                    <div class="leftLabel fl"></div>
                                    <div class="rightLabel fr"></div>
                                    <div class="cl"></div>
                                </li>
                                <li class="filter">
                                    <div class="filter-name">Hand Length</div>
                                    <div class="nstSlider" data-range_min="10" data-range_max="100" data-cur_min="34"
                                     data-cur_max="66">
                                        <div class="bar"></div>
                                        <div class="leftGrip"></div>
                                        <div class="rightGrip"></div>
                                    </div>
                                    <div class="leftLabel fl"></div>
                                    <div class="rightLabel fr"></div>
                                    <div class="cl"></div>
                                </li>
                                <li class="filter">
                                    <div class="filter-name">Dominant Hand</div>
                                    <div class="nstSlider" data-range_min="10" data-range_max="100" data-cur_min="34"
                                     data-cur_max="66">
                                        <div class="bar"></div>
                                        <div class="leftGrip"></div>
                                        <div class="rightGrip"></div>
                                    </div>
                                    <div class="leftLabel fl"></div>
                                    <div class="rightLabel fr"></div>
                                    <div class="cl"></div>
                                </li>
                                <li class="filter">
                                    <div class="filter-name">Dominant Leg</div>
                                    <div class="nstSlider" data-range_min="10" data-range_max="100" data-cur_min="34"
                                     data-cur_max="66">
                                        <div class="bar"></div>
                                        <div class="leftGrip"></div>
                                        <div class="rightGrip"></div>
                                    </div>
                                    <div class="leftLabel fl"></div>
                                    <div class="rightLabel fr"></div>
                                    <div class="cl"></div>
                                </li> 
                                <li class="filter">
                                    <div class="filter-name">Vertical Jump</div>
                                    <div class="nstSlider" data-range_min="10" data-range_max="100" data-cur_min="34"
                                     data-cur_max="66">
                                        <div class="bar"></div>
                                        <div class="leftGrip"></div>
                                        <div class="rightGrip"></div>
                                    </div>
                                    <div class="leftLabel fl"></div>
                                    <div class="rightLabel fr"></div>
                                    <div class="cl"></div>
                                </li>
                                <li class="filter">
                                    <div class="filter-name">Standing Long Jump</div>
                                    <div class="nstSlider" data-range_min="10" data-range_max="100" data-cur_min="34"
                                     data-cur_max="66">
                                        <div class="bar"></div>
                                        <div class="leftGrip"></div>
                                        <div class="rightGrip"></div>
                                    </div>
                                    <div class="leftLabel fl"></div>
                                    <div class="rightLabel fr"></div>
                                    <div class="cl"></div>
                                </li>
                                <li class="filter">
                                    <div class="filter-name">1 Mile Run</div>
                                    <div class="nstSlider" data-range_min="10" data-range_max="100" data-cur_min="34"
                                     data-cur_max="66">
                                        <div class="bar"></div>
                                        <div class="leftGrip"></div>
                                        <div class="rightGrip"></div>
                                    </div>
                                    <div class="leftLabel fl"></div>
                                    <div class="rightLabel fr"></div>
                                    <div class="cl"></div>
                                </li>
                                <li class="filter">
                                    <div class="filter-name">40 Yard Dash</div>
                                    <div class="nstSlider" data-range_min="10" data-range_max="100" data-cur_min="34"
                                     data-cur_max="66">
                                        <div class="bar"></div>
                                        <div class="leftGrip"></div>
                                        <div class="rightGrip"></div>
                                    </div>
                                    <div class="leftLabel fl"></div>
                                    <div class="rightLabel fr"></div>
                                    <div class="cl"></div>
                                </li>
                                <li class="filter">
                                    <div class="filter-name">60 Yard Dash</div>
                                    <div class="nstSlider" data-range_min="10" data-range_max="100" data-cur_min="34"
                                     data-cur_max="66">
                                        <div class="bar"></div>
                                        <div class="leftGrip"></div>
                                        <div class="rightGrip"></div>
                                    </div>
                                    <div class="leftLabel fl"></div>
                                    <div class="rightLabel fr"></div>
                                    <div class="cl"></div>
                                </li>        
                            </ul>
                            <div class="grid-results">
                                <div class="result-count clearfix">
                                    <div class="show-count fl">Showing <span> 25 </span> of <span> 467 </span> Results</div>
                                    <div class="show-count fr">View <span> 25 </span> Per Page</div>
                                </div>
                                <ul class="grid-Accadmic clearfix">
                                    <li>
                                        <div class="grid-img">
                                            <a href="#" title="Academic Filter"><img src="images/grid-img1.png" alt=""></a>
                                        </div>
                                        <div class="grid-desc">
                                            <h6>Symillong Worpsen</h6>
                                            <span class="small-text">Sport, Position</span>
                                            <div class="area">City, State, Country</div>
                                        </div>
                                        <div class="grid-ft clearfix">
                                            <div class="add-user gf"><a href="#"></a></div>
                                            <div class="view-icon gf"><a href="#"></a></div>
                                            <div class="video-img gf"><a href="#"></a></div>
                                            <div class="mail-icon gf"><a href="#"></a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-img">
                                            <a href="#" title="Academic Filter"><img src="images/grid-img1.png" alt=""></a>
                                        </div>
                                        <div class="grid-desc">
                                            <h6>Symillong Worpsen</h6>
                                            <span class="small-text">Sport, Position</span>
                                            <div class="area">City, State, Country</div>
                                        </div>
                                        <div class="grid-ft clearfix">
                                            <div class="add-user gf"><a href="#"></a></div>
                                            <div class="view-icon gf"><a href="#"></a></div>
                                            <div class="video-img gf"><a href="#"></a></div>
                                            <div class="mail-icon gf"><a href="#"></a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-img">
                                            <a href="#" title="Academic Filter"><img src="images/grid-img1.png" alt=""></a>
                                        </div>
                                        <div class="grid-desc">
                                            <h6>Symillong Worpsen</h6>
                                            <span class="small-text">Sport, Position</span>
                                            <div class="area">City, State, Country</div>
                                        </div>
                                        <div class="grid-ft clearfix">
                                            <div class="add-user gf"><a href="#"></a></div>
                                            <div class="view-icon gf"><a href="#"></a></div>
                                            <div class="video-img gf"><a href="#"></a></div>
                                            <div class="mail-icon gf"><a href="#"></a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-img">
                                            <a href="#" title="Academic Filter"><img src="images/grid-img1.png" alt=""></a>
                                        </div>
                                        <div class="grid-desc">
                                            <h6>Symillong Worpsen</h6>
                                            <span class="small-text">Sport, Position</span>
                                            <div class="area">City, State, Country</div>
                                        </div>
                                        <div class="grid-ft clearfix">
                                            <div class="add-user gf"><a href="#"></a></div>
                                            <div class="view-icon gf"><a href="#"></a></div>
                                            <div class="video-img gf"><a href="#"></a></div>
                                            <div class="mail-icon gf"><a href="#"></a></div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="see-more">
                                    <a href="#">See More Results</a>
                                </div>
                            </div>
                        </div>
                        <div id="location_filter" class="coment_main_div">
                            <div class="acc-filter clearfix">
                                <div class="cols-2">
                                    <div class="filter clearfix">
                                        <div class="my_acc_frm clearfix">
                                            <label>Enter your ZIP Code</label>
                                            <select>
                                                <option value="1">Select name</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="filter clearfix">
                                    	<div class="filter-name">Redius</div>
                                        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                        <div id="slider-single-range"></div>
                                	</div>        
                               	 </div>
                                <div class="cols-2">
                                    <div class="filter clearfix">
                                        <div class="my_acc_frm clearfix">
                                            <label>State</label>
                                            <select>
                                                <option value="1">---Selected name of state---</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="filter clearfix">
                                        <div class="my_acc_frm clearfix">
                                            <label>Region</label>
                                            <select>
                                                <option value="1">---Selected Your Region---</option>
                                            </select>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            <div class="grid-results">
                                <div class="result-count clearfix">
                                    <div class="show-count fl">Showing <span> 25 </span> of <span> 467 </span> Results</div>
                                    <div class="show-count fr">View <span> 25 </span> Per Page</div>
                                </div>
                                <ul class="grid-Accadmic clearfix">
                                    <li>
                                        <div class="grid-img">
                                            <a href="#" title="Academic Filter"><img src="images/grid-img1.png" alt=""></a>
                                        </div>
                                        <div class="grid-desc">
                                            <h6>Symillong Worpsen</h6>
                                            <span class="small-text">Sport, Position</span>
                                            <div class="area">City, State, Country</div>
                                        </div>
                                        <div class="grid-ft clearfix">
                                            <div class="add-user gf"><a href="#"></a></div>
                                            <div class="view-icon gf"><a href="#"></a></div>
                                            <div class="video-img gf"><a href="#"></a></div>
                                            <div class="mail-icon gf"><a href="#"></a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-img">
                                            <a href="#" title="Academic Filter"><img src="images/grid-img1.png" alt=""></a>
                                        </div>
                                        <div class="grid-desc">
                                            <h6>Symillong Worpsen</h6>
                                            <span class="small-text">Sport, Position</span>
                                            <div class="area">City, State, Country</div>
                                        </div>
                                        <div class="grid-ft clearfix">
                                            <div class="add-user gf"><a href="#"></a></div>
                                            <div class="view-icon gf"><a href="#"></a></div>
                                            <div class="video-img gf"><a href="#"></a></div>
                                            <div class="mail-icon gf"><a href="#"></a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-img">
                                            <a href="#" title="Academic Filter"><img src="images/grid-img1.png" alt=""></a>
                                        </div>
                                        <div class="grid-desc">
                                            <h6>Symillong Worpsen</h6>
                                            <span class="small-text">Sport, Position</span>
                                            <div class="area">City, State, Country</div>
                                        </div>
                                        <div class="grid-ft clearfix">
                                            <div class="add-user gf"><a href="#"></a></div>
                                            <div class="view-icon gf"><a href="#"></a></div>
                                            <div class="video-img gf"><a href="#"></a></div>
                                            <div class="mail-icon gf"><a href="#"></a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="grid-img">
                                            <a href="#" title="Academic Filter"><img src="images/grid-img1.png" alt=""></a>
                                        </div>
                                        <div class="grid-desc">
                                            <h6>Symillong Worpsen</h6>
                                            <span class="small-text">Sport, Position</span>
                                            <div class="area">City, State, Country</div>
                                        </div>
                                        <div class="grid-ft clearfix">
                                            <div class="add-user gf"><a href="#"></a></div>
                                            <div class="view-icon gf"><a href="#"></a></div>
                                            <div class="video-img gf"><a href="#"></a></div>
                                            <div class="mail-icon gf"><a href="#"></a></div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="see-more">
                                    <a href="#">See More Results</a>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>