

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700,600italic,700italic,800,800italic' rel='stylesheet' type='text/css'>

<link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,900,700italic,900italic' rel='stylesheet' type='text/css'>

<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,700,300' rel='stylesheet' type='text/css'>

<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,500italic,700italic,700,900italic,900,300italic,300,100italic,100' rel='stylesheet' type='text/css'>


<link rel="stylesheet" href="<?php echo base_url();?>css/jquery.fancybox.css" type="text/css" media="screen" />

<link rel="stylesheet" href="<?php echo base_url();?>css/jquery.fancybox-thumbs.css" type="text/css" media="screen" />


<title>Welcome To MyRecruitBoard</title>
<link rel="icon" href="<?php echo base_url(); ?>images/favicon-4.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/my-style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/media.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jquery.mCustomScrollbar.min.css">
<script src="<?php echo base_url(); ?>js/jquery-1.11.1.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/ajax_form.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/jquery.bxslider.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/jquery.magnific-popup.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url();?>js/jquery.fancybox-thumbs.js"></script>
<script src="<?php echo base_url();?>js/tabs.js"></script>
<script src="<?php echo base_url();?>js/vi.js"></script>
<script src="<?php echo base_url();?>js/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url();?>js/jquery.fancybox-thumbs.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>css/jquery.fancybox.css" type="text/css" media="screen" />

<link rel="stylesheet" href="<?php echo base_url();?>css/jquery.fancybox-thumbs.css" type="text/css" media="screen" />




<script type="text/javascript">
		$(document).ready(function(){
		$('input[type=text]').attr('maxlength', '50');
		$('input[type=password]').attr('maxlength', '10');
		$('#Video_Up input[type=text],#Stu_VideoUrl,#Coach_VideoURL,#Juco_VideoUrl,#Coach_TeamID,#Coach_CoachAward,#Coach_SeasonRecord,#Coach_CareerRecord,#Video_details input[type=text],#Comm_Link').attr('maxlength', '');
		$('.home-slider').bxSlider({
			auto: true,
			mode: 'fade',
			 pagerCustom: '#pageing'
		});
		});
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.toggle').on('click',function(){
			$('.topnav').slideToggle();
			$('.bodyclose').toggleClass('active');
		})
		$('.bodyclose').on('click',function(){
			$(this).removeClass('active');
			$('.topnav').removeAttr('style');
		});
    }); 
</script>

<script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('.sub-menu').parents('li').prepend('<span class="plusmenu">+</span>')
            jQuery('ul.topnav li').find('.plusmenu').on('click', function(){
                if(jQuery(this).hasClass('active')) {
                    jQuery(this).removeClass('active');
                    jQuery(this).html('+');
                    jQuery(this).parent(this).removeClass('active')
                    
                } else {
                    jQuery('ul.topnav li').find('.plusmenu').removeClass('active');
                    jQuery('ul.topnav ul li').find('.plusmenu').html('+');
                    jQuery(this).addClass('active');
                    jQuery(this).html('-');
                    jQuery(this).parent(this).addClass('active')
                }
            });
        });
        </script>


<script type="text/javascript">
$(document).ready(function() {
	$('.popup-youtube').magnificPopup({
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});
});

</script>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700,600italic,700italic,800,800italic' rel='stylesheet' type='text/css'>

<link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,900,700italic,900italic' rel='stylesheet' type='text/css'>

<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,700,300' rel='stylesheet' type='text/css'>

<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,500italic,700italic,700,900italic,900,300italic,300,100italic,100' rel='stylesheet' type='text/css'>

</head>
<?php $CurrentClass= $this->router->fetch_class(); ?>
<body <?php if($CurrentClass=="home"){?> class="home-bg" <?php } ?> >
	
    <?php include('include/header.php'); ?>
	<?php echo isset($MainContent) ? $MainContent : ''; ?>	
	<?php include('include/footer.php'); ?>

</body>
</html>

<script>
$(document).ready(function(e) {
    setTimeout(function() {
	  $('.successmessage').fadeOut('slow');
	  $('.errormessage').fadeOut('slow');
	 }, 5000);
		
	
	$('.successmessage button.close.commonbtn').click(function(){
	  $('.successmessage').hide();             
	 });
	 $('.errormessage button.close.commonbtn').click(function(){         
	  $('.errormessage').hide();             
	 });
	  $('.errormessage_data button.close.commonbtn').click(function(){         
	  $('.errormessage_data').hide();             
	 });
});
</script>
	
