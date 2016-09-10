<section class="banner">
    	<div class="home-slider">
        
         <?php for($i=0;$i<count($slider_info);$i++){ ?>
        	<div class="slide">
            	<img src="<?php echo base_url(); ?>home_slider/original/<?php echo $slider_info[$i]['Slider_Image']; ?>" alt="">
                <div class="banner-text">
                	<h1><?php echo $slider_info[$i]['Slider_Heading']; ?> </h1>
					<span class="slag"><?php echo $slider_info[$i]['Slider_SubHeading']; ?></span>
                    <div class="banner-btn clearfix">
                    	<div class="btn btn-about">
                        	<a href="<?php echo base_url(); ?>aboutus">
                            	<span class="btn-title">
                                	Learn more About Us
                                </span>
                                <div class="btn-icon"></div>
                            </a>
                        </div>
                        <div class="btn btn-video">
                        	<a  href="<?php echo $general_setting[0]['YouTube_Url']; ?>" class="popup-youtube">
                            	<span class="btn-title">
                                	Watch Our Film
                                </span>
                                <div class="btn-icon"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        
        </div>
        <div id="pageing">
          <?php for($i=0;$i<count($slider_info);$i++){ ?>
        	<div class="pager-btn clearfix">
           		 <a data-slide-index="<?php echo $i; ?>" href="">
                 	<div class="pager"></div>
                    <div class="hover-div">
                    	<div class="pager-hover">
                       <?php echo $slider_info[$i]['Slider_ToolTip']; ?>
                    </div>
                    </div>
                    
                </a>
            </div>
            	<?php } ?> 
            </div> 
		
             
            </div>
           
        </div>
    </section>

