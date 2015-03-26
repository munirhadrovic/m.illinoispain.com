<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">

		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function(){
				$('#menu-seo').slicknav({
					prependTo:'#navigation-menu-seo'
				});
			});
			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		   
			
			
    	</script>
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';
			
			
		?>
		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><img src="img/logo.png" alt="LOGO"></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">

            <h1>Powered by <a href="http://mobilegrows.com/"><span>MobileGrows</span></a>|<a href="http://illinoispain.com/" rel="external">  <span>DesktopSite</span></a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/1slide.jpg" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/2slide.jpg" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/3slide.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
                        <li>
                            <img src="img/slider-images/4slide.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/5slide.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/6slide.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn ui-icon-phone ui-btn-icon-left buttons-radius" href="tel:<?php echo $telephone ?>">Call US</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0) {

									console.log("Blakberu je prosao ")
									var prostordugme=document.getElementById('findUS');
									var dugme= document.createElement('a');
									dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
									dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									dugme.innerHTML="Find US";
									prostordugme.appendChild(dugme);
									}		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
						
						

					</div>	   
				</fieldset>
                        <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                            <div
                                class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Home</a>
                            </div>
                        </div>

						<div data-role="collapsible-set">	
							<div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
							   <h3>About IPI</h3>
							        <div data-role="collapsible-set">
                                        <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                                            <h3>Medical Team</h3>
                                            <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">John V Prunskis MD FIPP</a>
                                            <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Terri Dallas Prunskis MD</a>
                                            <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Andrew J. Yu MD FIPP</a>
                                            <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Shingo J. Yu MD FIPP</a>
                                            <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Chadi Yaacoub MD FIPP</a>
                                            <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Anthony P. Lebario M.D.</a>
                                            <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Official Pain Physicians of the Retired Professional Football Players</a>
                                            <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Association of Illinois</a>
                                        </div>
                                    </div>

                                <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                                    <h3>Locations</h3>
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Elgin Illinois Pain Institute</a>
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Lake Barrington Illinois Pain Institute</a>
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">McHenry Illinois Pain Institute</a>
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Itasca Illinois Pain Institute</a>
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Libertyville Illinois Pain institute</a>
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Huntley illinois Pain Institute</a>
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Barrington Pain and Spine Institute</a>
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Association of Illinois</a>
                                </div>
                                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                                    <div
                                        class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Workers Compensation</a>
                                    </div>
                                </div>
                                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                                    <div
                                        class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Illinois Pain Institute Blog</a>
                                    </div>
                                </div>
						    </div>
                        </div>
                            <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                                <h3>Medical Conditions</h3>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Causes of Arm Pain</a>
                                    <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                                         <h3>Back Pain</h3>
                                         <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Ankylosing Spondylitis</a>
                                    </div>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Carpal Tunnel</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Complex Regional Pain Syndrome</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Headache</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Hip Pain</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Joint Pain</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Musculoskeletal Pain</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Neck Pain</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Pelvic Groin Pain</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Sciatica Pain</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Shoulder Pain</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Spine and Disc Hermiation</a>
                            </div>
                            <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                                <h3>Pain Location</h3>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Abdominal Pain</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Arm Pain</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Back Pain</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Cancer Pain</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Chest Wall Pain</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Headache Pain </a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Disk Herniation</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Hip pain</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Neck Pain</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Phantom pain</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Pelvic Pain</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Sciatica Pain</a>
                            </div>
                            <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                                <h3>Treatment Options</h3>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Botox Injections</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Discography</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Epidural Injections</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Epidural Lysis Procedure</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Facet Blocks</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Intrathecal Pump Therapy</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Joint Injections</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Platelet Rich Plasma(PRP)</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Percutaneous Discectomy</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">P-STIM</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Racz Epidural Neurolytic</a>
                            </div>
                            <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                                <h3>Contact Illinois Pain institute</h3>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Patient Forms</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Schedule an Appointment</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Referring a Patient</a>
                                <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Career Opportunities</a>

                            </div>

				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-mail ui-btn-icon-left buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></div>
				</div>				   
		  </div>
		  
		 
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- page 2 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="home" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu">
						<ul id="menu">
							<li><a href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#home" data-transition="<?php echo $transitionefect ?>">About IPI</a></li>
							<li><a href="#home" data-transition="<?php echo $transitionefect ?>">Medical Conditions</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Pain Location</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Treatment Options</a></li>

							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
						</ul>
					</section>
                    <p>This is only a <strong>preview</strong> version of your Mobile Website.</p>
                    <p>Please contact our official Sales Represcutative for Full Functional <strong>Version.</strong></p>
					

				</div>

			</div>	
				
				
		</div>
		
		<!-- page 2 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- contact us ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">About IPI</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Medical Conditions</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Pain Location</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Treatment Options</a></li>

                                <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
							</ul>
					</section>
					<div>	
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
							Message:<br>
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
							<input type="submit" value="Send" name="submit" class="btn" id="input-dugme">
						</form>
					</div>
				</div>
			</div>
		
		</div>
<!--contact us///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- page seo ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="seopage" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-seo">
							<ul id="menu-seo">
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Design</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Analytics</a></li>
							</ul>
					</section>
					
				</div>
			</div>
		
		</div>
<!--page seo///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesful!</p>
			
			</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////
	<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		<!-- Slajder se zavrsava -->
	</body>
</html>
