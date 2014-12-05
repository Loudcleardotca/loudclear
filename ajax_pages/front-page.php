<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	 <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php the_field('website_title', 'option'); ?>
    </title>

	<meta name="description" content="">
	<meta name="keywords" content="">

	<!--CSS Styles-->	
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.ico">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/assets/css/vendors/idangerous.swiper.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/assets/css/vendors/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/assets/css/vendors/blue.monday/jplayer.blue.monday.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/assets/css/vendors/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/assets/css/vendors/blueimp-gallery.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/assets/css/vendors/perfect-scrollbar.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/assets/css/skins/skin3/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/assets/css/jquery.fullPage.css" />
	<!--/CSS Styles-->
    	<style>

	/* Style for our header texts
	* --------------------------------------- */
	.intro h1{
		font-size: 5em;
		font-family: arial,helvetica;
		color: #000;
		margin:0;
	}
	.intro p{
		color: #000;
	}

	/* Centered texts in each section
	* --------------------------------------- */
	.section{
		text-align:center;
	}


	/* Bottom menu
	* --------------------------------------- */
	#infoMenu li a {
		color: #000;
	}
	</style>
	
	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <!-- /Mobile Specific Metas --> 


	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:100,200,300,400,700,400italic,700italic' rel='stylesheet' type='text/css'>

	<link href='http://fonts.googleapis.com/css?family=Exo+2:400,100,200,200italic,300,300italic,400italic,500,600,500italic,600italic,700,800,700italic,800italic,900,900italic' rel='stylesheet' type='text/css'>
	<!-- /Google Fonts -->

	<!-- NOVEMBER 11 -->
	<script type="text/javascript">
	
	WebFontConfig = { fontdeck: { id: '50707' } };

	(function() {
	var wf = document.createElement('script');
	wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
	'://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
	wf.type = 'text/javascript';
	wf.async = 'true';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(wf, s);
	})();
	</script>
	<!-- END NOVEMBER 11 -->


</head>
<body>

	<!-- Preloader -->
    <div id="loader">
        <div id="text-loader">
        	<img src="<?php bloginfo( 'template_url' ); ?>/assets/img/logo.gif" />          
        </div>
       
    </div>
    <!-- Preloader -->

    <!-- Main Wrapper-->
	<div id="wrapper">
		
		<div id="container">
			
			<!-- Upstream -->
			<div id="upstream">	
			</div>
			<!-- /Upstream-->
			
			<!-- Contents -->
			<div id="contents">

				<!-- Swiper Pages -->
				<div id="swiper-content">
					<div class="swiper-wrapper">
						
						<!-- 
						####################################
						Home Page - 0
						####################################
						-->
						<div id ="home" class="sub-page swiper-slide" data-hash="hello" >
                        <!-- Kenburn Slider -->
								<div id="kb-container">
								</div>
                        <!-- Next page shortcut -->
								<div id="enhancer">									
									<i class="fa vertical-arrows-scroll-next"></i>
								</div>
								<!-- Next page shortcut -->						
							
						</div>
						<!-- 
						#################################
						/Home Page 
						#################################
						-->


						<!-- 
						#################################
						About US - 1
						#################################
						-->
						<div class="sub-page swiper-slide" data-hash="about">
							
							
							<!-- Page Contents -->	
							<div class="page-container" style="width:100%;" id="new-grid">
								<div class="inner-wrapper scrollbar">
                                
									<!-- Side bar contents -->	
                                 	 <div style="text-align:center; width:100%">
								      	<img src="<?php the_field('about_banner', 'option'); ?>" class="img-responsive" alt="img" style="display: initial; width:100%;"><a href="javascript:void(0)" onclick="layoutSwiper.swiperit.swipeTo('2');"><div class="hmabtnext"><!-- --></div></a>
                                      <div class="people-caption">
                                      <p>Chris Robertson  |  Stan DiFruscio  |  Erin Mitchell </p>
                                      </div>  
                                      </div>
                                    
                                    
                                    
									<div class="mycontainer">
										<div class="inner">
         
											<div style= "font-size:24px; padding-top:22px;  color:#6d6e71;">
											<?php the_field('about_content', 'option'); ?> 
                                            </div>
											<br><br>

											
								        
								        </div>
									</div>
									<!-- /Side bar contents -->	
									
								</div>
							</div>
							<!-- /Page Contents -->	
						</div>


						
						<!-- 
						#################################
						/ About Us
						#################################
						-->

						<!-- 
						#################################
						TEAM - 2
						#################################
						-->
						<!-- ####### STAN - 2 ####### -->
						<div class="sub-page swiper-slide" data-hash="people-stan">
				
							<!-- Page contents -->
							<div class="page-container" style="width:100%;" id="partners">
								<div class="inner-wrapper scrollbar" >
									
                                    <!-- Team side bar -->
									<a href="javascript:void(0)" onclick="layoutSwiper.swiperit.swipeTo('3');"><div class="vertical-arrows-scroll-next"><!-- --></div></a>
									
									<div class="team-side" style= " background: url('<?php the_field('photo_stan', 'option'); ?>') no-repeat scroll center center / cover transparent;  min-height: 300px;  overflow: hidden;  position: relative;">																

									</div>
									<!-- /Team side bar -->

									<!-- Team contents -->
									<div class="team-container">
										<!-- Team Contents Carousel Wrapper -->
										<div class="team-carousel-wrapper">
											<div class="team-carousel">

												<!-- Team Item -->
												<div class="item">
													<div class="item-wrapper">
														<!-- Team Item Title-->
														<img class="partners-img" style="width:auto; height:auto;"src="<?php bloginfo( 'template_url' ); ?>/assets/img/L+C-STAN.png">
														<!-- /Team Item Title-->
														
														<!-- Team Item Informartion-->
														<div class="info">
															<!-- Team Item Description-->
															<div class="description desktop-only">
																<p><?php the_field('description_stan', 'option'); ?></p>
															</div>
															<!-- /Team Item Description-->

															
														</div>
														<!-- /Team Item Informartion-->

													</div>
												</div>
												<!-- /Team Item -->

												

											</div>
										</div>
										<!-- /Team Contents Carousel Wrapper -->

									</div>
							    </div>
							</div>
						</div>
							<!-- ####### CHRIS - 3 ####### -->
							<div class="sub-page swiper-slide" data-hash="people-chris">
							
							<!-- Page contents -->
							<div class="page-container" style="width:100%;" id="partners">
								<div class="inner-wrapper scrollbar">
									
							
                               <!-- Team side bar -->
									<a href="javascript:void(0)" onclick="layoutSwiper.swiperit.swipeTo('4');"><div class="vertical-arrows-scroll-next"><!-- --></div></a>

									<a href="javascript:void(0)" onclick="layoutSwiper.swiperit.swipeTo('2');"><div class="vertical-arrows-scroll-prev"><!-- --></div></a>


									
									<div class="team-side" style= " background: url('<?php the_field('photo_chris', 'option'); ?>') no-repeat scroll center center / cover transparent;  min-height: 300px;  overflow: hidden;  position: relative;">																

									</div>
									<!-- /Team side bar -->

									<!-- Team contents -->
									<div class="team-container">
																			<!-- Team Contents Carousel Wrapper -->
										<div class="team-carousel-wrapper">
											<div class="team-carousel">

												<!-- Team Item -->
												<div class="item">
													<div class="item-wrapper">
														<!-- Team Item Title-->
															<img  class="partners-img" style="width:auto; height:auto;"src="<?php bloginfo( 'template_url' ); ?>/assets/img/L+C-CHRIS.png">
														<!-- Team Item Information-->
														<div class="info">

															<!-- Team Item Description-->
															<div class="description desktop-only">
																<p><?php the_field('description_chris', 'option'); ?>
																</p>
															</div>
															<!-- /Team Item Description-->


														<!-- /Team Item Information-->
															
														</div>
													</div>
												</div>
												<!-- /Team Item -->

												

											</div>
										</div>
										<!-- /Team Contents Carousel Wrapper -->

									</div>
							    </div>
							</div>
							<!-- /Page contents -->
							</div>
							<!-- ####### ERIN - 4 ####### -->
							<div class="sub-page swiper-slide" data-hash="people-erin">
							<!-- Page contents -->
							<div class="page-container" style="width:100%;" id="partners">
								<div class="inner-wrapper scrollbar">
									

									<!-- Team side bar -->
									
									<div class="team-side" style= " background: url('<?php the_field('photo_erin', 'option'); ?>') no-repeat scroll center center / cover transparent;  min-height: 300px;  overflow: hidden;  position: relative;">																

									</div>
									<!-- /Team side bar -->
                                    

									
									<a href="javascript:void(0)" onclick="layoutSwiper.swiperit.swipeTo('5');"><div class="vertical-arrows-scroll-next"><!-- --></div></a>
									

									<a href="javascript:void(0)" onclick="layoutSwiper.swiperit.swipeTo('3');"><div class="vertical-arrows-scroll-prev"><!-- --></div></a>
                                    
                                    
									<!-- Team contents -->
									<div class="team-container">
																			<!-- Team Contents Carousel Wrapper -->
										<div class="team-carousel-wrapper">
											<div class="team-carousel">

												<!-- Team Item -->
												<div class="item">
													<div class="item-wrapper">

														<!-- Team Item Title-->
														<img  class="partners-img" style="width:auto; height:auto;"src="<?php bloginfo( 'template_url' ); ?>/assets/img/L+C-ERIN.png">

														<!-- Team Item Informations-->
														<div class="info">

															<!-- Team Item Description-->
															<div class="description desktop-only">
																<p><?php the_field('description_erin', 'option'); ?></p>
															</div>
															<!-- /Team Item Description-->


														<!-- /Team Item Informations-->
														</div>

													</div>
												</div>
												<!-- /Team Item -->

												

											</div>
										</div>
										<!-- /Team Contents Carousel Wrapper -->

									</div>
							    </div>
							</div>
							<!-- /Page contents -->
							</div>

						<!-- ####### TEAM - 5 ####### -->
						<div class="sub-page swiper-slide" data-hash="team">
							
							
							<!-- Page Contents -->	
							<div class="page-container" style="width:100%;">
								<div class="inner-wrapper scrollbar">
								

                                    
                                    
									<!-- Gallery wrapper -->
									    <div id="gal1" class="masonryGrid fullscreen-enable col-5">
										    <!-- Gallery Item -->
                                            
                                            <?php $loop = new WP_Query( array( 'post_type' => 'team' , 'showposts' => 20) ); ?>

											<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                            
                                            
										    <div class="gal1-item da-item">
										    	
										    		<img class="img-responsive" src="<?php the_field('member_photo'); ?>" alt="img" />

													<!-- Gallery Overlay -->
										    		<div class="info da-overlay"  style="background-color: <?php the_field('hovering_color'); ?>!important;">
														<div class="centerit">
															<h3><?php the_field('member_name'); ?></h3>
                                                            <h4><?php the_field('member_designation'); ?></h4>
															<p style="color:#ffffff;"><?php the_field('member_description'); ?></p>
														</div>
													</div>
										    		<!-- /Gallery Overlay -->
										    		
										    </div>
										    <!-- /Gallery Item -->
											<?php endwhile; ?>

										
									</div>
									<!-- /Gallery wrapper -->	
								</div>
							</div>
							<!-- /Page Contents -->	

						</div>
						<!-- 
						#################################
						/ Team
						#################################
						-->
						

						<!-- 
						#################################
						Services 
						#################################
						-->
						<div class="sub-page swiper-slide" data-hash="services" style="background-color: #e6e6e6;" id="noscroll">
							
							<!-- Page Contents -->	
							<div class="page-container" style="width:100%;">
								<div class="inner-wrapper">
									
                                    <div id="fullpage">    
                                        
                                        <!-- ################################# SECTION 1 ################################# -->
									  	<div class="section" id="section1" data-anchor="services">
                                       
										  	<div class="mycontainer servicescontainer">
												<div class="inner">
         
												  <div class="intro white-copy">
			                                      		
														<div class="servicemain"><?php the_field('main_description', 'option'); ?></div>
                                                        <div class="white-copy service-middle">
                                                        <?php the_field('main_sub_description', 'option'); ?>
                                                        </div>

														<!-- GO DOWN -->
														<div class="navigation-link">
															<a href="#secondPage" class="navigation-link"><img src="<?php bloginfo('template_url'); ?>/assets/img/arrows-down.png"></a> 
											        	</div>
											        </div>
												</div> 
		                                         
									  		</div>
                                        </div>
                                        
                                        
                                        <!-- ################################# SECTION 2 ################################# -->                        
                                        <div class="section" id="section2" data-anchor="secondPage" style= " background: url('<?php bloginfo('template_url'); ?>/assets/img/markbackground.jpg') no-repeat scroll center center / cover transparent; overflow: hidden;  position: relative;" >
                                        	<!-- GO UP -->
                                        	<div class="navigation-link">
                                        		<a href="#services"><img src="<?php bloginfo('template_url'); ?>/assets/img/arrows-up.png"></a>
                                        	</div>
                                        	<div class="mycontainer servicescontainer">
												<div class="inner">
         
													<div class="intro left-align small-intro">
			                                      		      
                                                         
													
                                                    
                                                  <div class="experience-con">
														<?php if(get_field('mark_service_details', 'option')): ?>
												        <div class="container-sub">

														<?php while(has_sub_field('mark_service_details', 'option')): ?>

	

													                <!-- repeat -->
												                	<div class="experience-details">
												                  		<div class="service-middle">
												                    		
														                      
														                      	<h4 class="white-copy "><?php the_sub_field('mark_service_title'); ?></h4>			                      	 
														                   
												                  		</div>
												                  	
												                	</div>
												                	   
												                	<div style="clear:both;"/><!-- --></div>
												                	<!-- end repeat -->

														<?php endwhile; ?>

													</div>
													<?php endif; ?>
												</div>
												
												
                                                    
                                                    
													       
											        	</div>											        	
													</div> 		                                         
									  			</div> 
                                                 <!-- GO DOWN -->
													        <div class="navigation-link">
																<a href="#thirdPage"><img src="<?php bloginfo('template_url'); ?>/assets/img/arrows-down.png"></a> 
															</div> 
                                        </div>
                                        
                                        
                                        
                                        
                                        <!-- ################################# SECTION 3 ################################# -->                        
                                        <div class="section" id="section3" data-anchor="thirdPage" style= " background: url('<?php bloginfo('template_url'); ?>/assets/img/setbackground.jpg') no-repeat scroll center center / cover transparent; overflow: hidden;  position: relative;">
                                        	<!-- GO UP -->
                                        	<div class="navigation-link">
                                        		<a href="#secondPage"><img src="<?php bloginfo('template_url'); ?>/assets/img/arrows-up.png"></a>
                                        	</div>

                                        	<div class="mycontainer servicescontainer">
												<div class="inner">
         
													<div class="intro left-align small-intro">
                                                    
                                                  <div class="experience-con">
														<?php if(get_field('set_service_details', 'option')): ?>
												        <div class="container-sub">

														<?php while(has_sub_field('set_service_details', 'option')): ?>

	

													                <!-- repeat -->
												                	<div class="experience-details">
												                  			<div class="service-middle">
												                    		
														                      
														                      	<h4 class="white-copy "><?php the_sub_field('set_service_title'); ?></h4>			                      	 
														                   
												                  		</div>
												                	 </div>  
												                	<div style="clear:both;"/><!-- --></div>
												                	<!-- end repeat -->

														<?php endwhile; ?>

													</div>
													<?php endif; ?>
												</div>
												
											        	</div>
											        	
													</div> 		                                         
									  			</div>  
                                                <!-- GO DOWN -->
											        	<div class="navigation-link">
															<a href="#fourthPage" class="navigation-link"><img src="<?php bloginfo('template_url'); ?>/assets/img/arrows-down.png"></a>
														 </div> 
                                        </div>

									  	<!-- ################################# SECTION 4 ################################# -->                        
                                        <div class="section" id="section4" data-anchor="fourthPage" style= " background: url('<?php bloginfo('template_url'); ?>/assets/img/gobackground.jpg') no-repeat scroll center center / cover transparent; overflow: hidden;  position: relative;">
                                        	<!-- GO UP -->
                                        	<div class="navigation-link">
                                        		<a href="#thirdPage"><img src="<?php bloginfo('template_url'); ?>/assets/img/arrows-up.png"></a>
                                        	</div>
                                        	<div class="mycontainer servicescontainer">
												<div class="inner">
         
													<div class="intro left-align small-intro">
                                                    
                                                  <div class="experience-con">
														<?php if(get_field('go_service_details', 'option')): ?>
												        <div class="container-sub">

														<?php while(has_sub_field('go_service_details', 'option')): ?>

	

													                <!-- repeat -->
												                	<div class="experience-details">
												                  			<div class="service-middle">
												                    		
														                      
														                      	<h4 class="white-copy "><?php the_sub_field('go_service_title'); ?></h4>			                      	 
														                   
												                  		</div>
												                	</div>
												                	   
												                	<div style="clear:both;"/><!-- --></div>
												                	<!-- end repeat -->

														<?php endwhile; ?>

													</div>
													<?php endif; ?>
												</div>
												
													        
											        	</div>											        	
													</div> 		                                         
									  			</div>  
                                        </div>
                                        <!-- /end-->	                            
                                
                                
                                
                                  </div>
                             
								</div>
							</div>
							<!-- /Page Contents -->	
						</div>
						<!-- 
						#################################
						/ Services
						#################################
						-->








						<!-- 
						#################################
						Contacts 
						#################################
						-->
						<div class="sub-page swiper-slide" data-hash="contact-us">
							
							<!--Contact Left Side-->	
							<div id="contact-left">
								<div class="inner-wrapper scrollbar">
									<div id="contact">
										<h2 class="contact-title" ><?php the_field('first_title', 'option'); ?><span style="font-size: 60px!important;
font-weight: bold; "><?php the_field('second_title', 'option'); ?></span></h2>

										


										<!--Contact form-->
										<form id="contact-form" method="post" action="contact.php">
											  <div class="form-group clearfix">
											    	<input type="email" class="form-control requiredField email" id="contact-email" name="email" placeholder="Email">
											  </div>
											  <div class="form-group clearfix">
											    	<input type="text" class="form-control requiredField" id="name" name="name" placeholder="Name">
											  </div>
											  <div class="form-group">
											    	<textarea class="form-control requiredField" id="message" name="message" rows="1" placeholder="Message"></textarea>
											  </div>
											  <button type="submit" name="submit" class="btn btn-theme">Send</button>
										</form>	
										<!--/Contact form-->
                                        
                                        <!--Contact details-->
										<div class="contact-details">
											
											<?php the_field('contact_details', 'option'); ?>
										</div>
										<!--Contact details-->

										<div class="clearfix"></div>
									</div>	
								</div>
							</div>
							<!--/Contact Left Side-->	

							<!--Contact Right Side-->	
							<div id="contact-right">

								<!--Google map container-->	
								<div  id="gmap-container">
									<div id="gmap" class="swiper-no-swiping"></div>
								</div>
								<!--/Google map container-->	

							</div>
							<!--/Contact Right Side-->	

						</div>
						<!-- 
						#################################
						/ Contacts
						#################################
						-->

					</div>
				</div>
				<!-- /Swiper Pages -->


				<!-- 
				#################################
				SIDEBAR MENU
				#################################
				-->
				<!-- Taskbar -->
				<div id="taskbar">
					

					<!--Taskbar social icons-->
					<ul id="socialicons">
						<li><a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="<?php the_field('linkedin_link', 'option'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="<?php the_field('pinterest_link', 'option'); ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
					</ul>
					<!--/Taskbar social icons-->

					<!--Taskbar logo-->
					<div id="logo">
						<a href="javascript:layoutSwiper.swiperit.swipeTo('0');"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/LOUD+CLEAR.png" /></a>
					</div>
					<!--/Taskbar logo-->

					<!-- menu -->
					
					<a href="#menu1" class="menu-link" onclick="javascript:mobileFunction();"></a>
				

				
					<!--/Menu Items contents-->	

					<!--Menu Items Navigation Bar-->	
					<ul id="menu-pannel-navigation">
						<li class="item hmnav">Home</li>
						<li class="item abnav">About us</li>
						<li class="item tmnav">The team</li>
                        
                        <li style="display:none;" class="item">The team</li>
                        <li style="display:none;"  class="item">The team</li>
                        <li style="display:none;"  class="item">The team</li>
                        
						<li class="item srnav">Services</li>

						<li class="item ctnav">Contact</li>
					</ul>
					<!--Menu Items Navigation Bar-->
					<!-- end menu -->


				</div>
				<!-- /Taskbar -->
				<!-- 
				#################################
				/ SIDEBAR MENU
				#################################
				-->

			</div>
			<!-- /Contents-->

		</div>

		


	</div>
	<!-- /Main Wrapper-->
	

	<!-- javascript Plugins-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

<!--
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/vendors/jquery-1.11.0.min.js"></script>
	-->
	<!-- used for setting and getting cookies -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/vendors/jquery.cookie.js"></script>
	
	<!-- bootstrap js file -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/vendors/bootstrap.min.js"></script>
	
	<!-- swiper plugin -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/vendors/idangerous.swiper-2.4.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/vendors/idangerous.swiper.hashnav-1.0.js"></script>

	<!-- greensock animation framework -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/vendors/TweenMax.min.js"></script>
	
	<!-- video background for homepage -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/vendors/jquery.videobackground.js"></script>
	
	<!-- used for audio player -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/vendors/jquery.jplayer.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/vendors/jplayer.playlist.min.js"></script>
	
	<!-- about me image slider -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/vendors/jquery.slides.min.js"></script>
	
	<!-- masonry for grid gallery -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/vendors/imagesloaded.pkgd.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/vendors/masonry.pkgd.min.js"></script>
	
	<!-- Carouferedsel for gallery thumbs -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/vendors/jquery.caroufredsel-6.2.1-packed.js"></script>

	<!-- Up-stream fullscreen gallery -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/vendors/blueimp-gallery.min.js"></script>
	
	<!-- scrollTo plugin -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/vendors/jquery.scrollTo.min.js"></script>
	
	<!-- Mouse wheel plugin -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/vendors/jquery.mousewheel.js"></script>
	
	<!-- isotope plugin for blog -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/vendors/jquery.isotope.min.js"></script>

	<!-- google map -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=en"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/vendors/gmap3.min.js"></script>

	<!-- lazy load for images -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/vendors/jquery.lazyload.min.js"></script>

	<!-- scrollbar -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/vendors/perfect-scrollbar.js"></script>

	<!-- Place holder -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/vendors/jquery.placeholder.js"></script>

	<!-- kenburn slider for hello page -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/jquery.owwwlab-kenburns.js"></script>


	<!-- main js engine -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/custom.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/vendors/jquery.slimscroll.min.js"></script>

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/jquery.fullPage.js"></script>

	<!-- /javascript Plugins-->




	<script>
	<?php if(get_field('home_slideshow', 'option')): ?>
		var imagesArray = [<?php while(has_sub_field('home_slideshow', 'option')): ?>
			"<?php the_sub_field('home_image'); ?>",
		<?php endwhile; ?>];
	<?php endif; ?>

	//If you look in the custom.j you will see the variable imagesArray is used don't change the name... this scrip must be placed before inititing the scripts below

    
    </script>



	

	<!--Initiate javascript functions-->
	<script>
		/* run what you need
		----------------------------------------------*/
		initRequired.init();
		preloader.init();
		//audioBackground.init();
		kenburn.init();
		//videoBackground.init();
		//aboutMeSlider.init();
		gridPortfolio.init();
		upstreamPortfolio.init();
		// verticalGallery.init();
		// HorizontalGallery.init();
		teamCarousel.init();
		//blog.init();
		// helloSlider.init();
		videoPortfolio.init();
	</script>
	<!--/Initiate javascript functions-->

	<script>

	/* ==========================================================================
   	#Global Variable
   	========================================================================== */
	var sectionPeople = "partners";


	/* ==========================================================================
   	#Mobile Menu
   	========================================================================== */
	$(document).ready(function() {

		$( "#menu-pannel-navigation > .item" ).click(function() {

			/*if(sectionPeople=="team"){
				scrollPeople('team','intro');
			} else if(sectionPeople=="partners"){
				scrollPeople('partners','intro');
			}*/
			
	 		
			if($(window).width() < 769){
		 		$('#menu-pannel-navigation').hide();
		 	}
		});

	});

	function mobileFunction(){
		$('#menu-pannel-navigation').fadeToggle('fast');
	}


	$(window).resize(function() {
		var pageWidth = $(window).width(); 

	    if( $(window).width()> 768){
	    	$('#menu-pannel-navigation').show();
	    }
		else{
	 		$('#menu-pannel-navigation').hide();
		}

	});

	/* ==========================================================================
   	#Stop wheel scrolling on the partners section
   	========================================================================== */
   	$(document).ready(function() {

		$('#partners').hover(function() {
		    $(document).bind('mousewheel DOMMouseScroll',function(){ 
		        stopWheel(); 
		    });
		}, function() {
		    $(document).unbind('mousewheel DOMMouseScroll');
		});
	});


   	function stopWheel(e){
	    if(!e){ /* IE7, IE8, Chrome, Safari */ 
	        e = window.event; 
	    }
	    if(e.preventDefault) { /* Chrome, Safari, Firefox */ 
	        e.preventDefault(); 
	    } 
	    e.returnValue = false; /* IE7, IE8 */
	}  	


	/* ==========================================================================
   	#Hide menu only for desktop
   	========================================================================== */
	if (!isTouchDevice){
        window.onhashchange = function(evt){        
		    var hash = window.location.hash.substring(1);

		    if (hash.length === 0) { 
		      $('#taskbar').show();
		    } else { 
		       $('#taskbar').hide();
		    }
		  

		  	if(hash == "hello"){
		  		$('#taskbar').hide();
		  	}else{
		  		$('#taskbar').show();
		  	}
		};		
    }

    $(document).ready(function() {    
		if (!isTouchDevice){
			if (window.location.hash) {
			    var hash = window.location.hash.substring(1);

			    if (hash.length === 0) { 
			      	$('#taskbar').show();
			    } else { 
			    	if(hash == "hello"){
		  				$('#taskbar').hide();
				  	}
				  	else if(hash == "secondPage" || hash == "thirdPage" || hash == "fourthPage"){

				  		layoutSwiper.swiperit.swipeTo('6')
				  	}
				  	else{
				  		$('#taskbar').show();
				  	}
			    }

			} else { 
			   $('#taskbar').hide();
			}
		  		
		 }
	});
	 	
	/* ==========================================================================
   	LOADER
   	========================================================================== */
    $(document).ready(function() {    
		$( "#loader" ).delay( 2000 ).fadeOut( 600 );		
        perfectScroll.init();
	});
	
	/* ==========================================================================
   	SERVICES FUNCTIONS
   	========================================================================== */
	//NOVEMBER 10
	$(document).ready(function() {


		if (!isTouchDevice){
			$('#fullpage').fullpage({
				menu: false,
				anchors: ['services', 'secondPage', 'thirdPage','fourthPage'],
				navigation: false,
				sectionsColor: ['#5e5e5e', '#efbf0f', '#f47b2d', '#60aedd'],
				scrollOverflow: true,
				keyboardScrolling: false
			});
		  		
		 }else{
		 	$('#fullpage').fullpage({
				menu: false,
				anchors: ['', 'secondPage', 'thirdPage','fourthPage'],
				navigation: false,
				sectionsColor: ['#5e5e5e', '#efbf0f', '#f47b2d', '#60aedd'],
				scrollOverflow: true,
				keyboardScrolling: false
			});

		 }


		
	});
	//END NOVEMBER 10

	/* ==========================================================================
   	#Toggle menu on services
   	========================================================================== */
	$(document).ready(function() {


		$('.hidden-description').slideUp();


	});
/*
	$('.trigger').click(function(me){

			$(this).next('.hidden-description').slideToggle('slow');
			return false;
			e.preventDefault();
			
		});
	
	function goUP(){
	$.fn.fullpage.moveTo(1);

	}*/
	



	</script>


</body>
</html>
<!-- Localized -->