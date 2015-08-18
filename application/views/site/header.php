<!DOCTYPE html>
<html lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>outreach</title>
<link href="<?php echo base_url();?>site/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>site/inc/shortcodes/css/shortcodes.css" rel="stylesheet">
<link href="<?php echo base_url();?>site/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo base_url();?>site/css/animate.css" rel="stylesheet">
<link href="<?php echo base_url();?>site/css/wowslider.css" rel="stylesheet">
<link href="<?php echo base_url();?>site/style.css" rel="stylesheet">

<link href="<?php echo base_url();?>site/css/fullwidth.css" rel="stylesheet">

<link href="<?php echo base_url();?>site/css/skins/orange.css" rel="stylesheet">
<link href="<?php echo base_url();?>site/media-query.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,500,600,700,700italic&amp;subset=latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese' rel='stylesheet' type='text/css'/>

<!--<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,300,600,200,100' rel='stylesheet' type='text/css'/>-->
<link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>

   <script type='text/javascript' src='<?php echo base_url();?>site/js/jquery.js'></script>
   <script>
   function appr_error(){
   alert("Your account is not yet activated.Kindly contact Administrator");
   return false;
   }
   </script>

</head>
<body class="boxedlayout" oncontextmenu="return false;">
	<div class="boxedcontent">
		<div class="fixedmenu">
			<div class="container">
				<div class="row">
					<a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>site/img/logo.png" alt="" width="124%" style="width: 150px;"></a>
                   <!-- <h5 class="title-height1 blink" style="  text-align: left;  padding-right: 15px;"><a href="<?php echo base_url();?>Placements"><i>Companies are hiring now!</i></a></h5>-->
					
                   <div class="col-md-10 less-padding login-widht align-right" align="right"><!-- nav-margin-top  -->
                   		
						
						<?php $ses_data=$this->session->userdata('user_details');
						
		if (empty($ses_data)){ ?>
						
						<?php } else {
							
		?>
		<style>
			


<!--------------Krishna 20-07-2015--------------------->

		</style>
		<div class="col-md-2 less-padding">
		<li class="dropdown user"  id="header-user" style="list-style:none; float: right;">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							
							
							<img alt="" style="widht:40px;height:40px;" src="<?php echo base_url();?>images/outreach-profile-images/<?php echo $ses_data['profile_image']; ?>"  style="border-radius: 50%;">
							
							
							
							
							<span class="username"><?php echo ucfirst($ses_data['name']); ?> </span>
							<i class="fa fa-angle-down"></i>
						</a></br><?php if($ses_data['user_type']==1){ ?><a  href="<?php echo base_url();?>nodal-coordinator-listing" style="font-size: 15px;">Manage Nodal Centers</a>								<?php } ?>
						
		<ul class="dropdown-menu">
							<!--<li><a href="<?php echo base_url();?>site/editProfile"><i class="fa fa-user"></i> My Profile</a></li>
							<li><a href="<?php echo base_url();?>site/editProfile"><i class="fa fa-cog"></i> Account Settings</a></li>-->
							<li><a href="<?php echo base_url();?>Logout"><i class="fa fa-power-off"></i> Log Out</a></li>
						</ul>
						</li></div>
		
		<?php }?>
						
						
						
						<nav class="navbar pull-right" role="navigation">
					<div class="nav-top collapse navbar-collapse">
						<ul id="main-menu" class="nav navbar-nav">
					<?php if (empty($ses_data)){ ?> 
					<li><a href="<?php echo base_url();?>" style="font-size: 15px;">Home</a></li>
							<li ><a data-target="#" href="<?php echo base_url()."Cms/About-outreach";?>" style="font-size: 15px;">About outreach</a></li>
							
							<li ><a data-target="#" href="<?php echo base_url();?>Contact" style="font-size: 15px;">Contact</a></li>
								<?php  }else{?>
									
								<?php
									 } ?>
                            
							
                            <!--<li ><a data-target="#" href="<?php echo base_url();?>Contact">Contact</a></li>	-->						
                          </ul>
					</div>
                    </nav>
						
						
                   </div>
                   
				</div>
			</div>
		</div>	
	
		<style>
		.button-nav{
		 padding: 10px 10px;
		  }
		</style>
	<div class="row task-title">
    <div class="container">
		<?php $ses_data=$this->session->userdata('user_details'); if($ses_data){?>
		
		<?php }else{ ?>
    	
		<?php }?>
    </div>
</div>	