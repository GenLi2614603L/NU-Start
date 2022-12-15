<?php 
	$numbers=range(1,17);
	shuffle($numbers);

	$random_1 = $numbers[0];
	$random_2 = $numbers[1];
	$random_3 = $numbers[2];
?>
<div class="relative">
               <!--div id="xmarquee">
               <marquee height="30px" vspace="30px">Courses: Music Production, Film Production, E-Learning, Construction, Counselling, Academic, Women Only Courses, Creative...</marquee>
               </div><!--marquee-->

<div class="row-1">
        	<div class="row-1">
            	<div class="wrapper">
                	<ul class="sub-menu">
                    	<li><a href="#">Sitemap </a>:</li>
                        <li><a href="#">FAQs </a>:</li>
                        <li><a href="#">Help</a></li>
                    </ul>
                    <div class="text-top">Telephone : <span>+44 0870 383 2151</span></div>
                </div><!--wrapper-->
            </div><row-1>
            <div class="row-2c">
            	<div id="wrapper">
                	<div class="logo"><a href="index.php"><img class="png" src="images/nustart-logo2.png" alt="" /></a></div>
                    <!--div class="leaderboard"><span>Advertise with us 728 x 90</span></div-->                    
                    <form id="form-top" action="" method="post" enctype="multipart/form-data">                        
                        <fieldset>
                        <div class="form-top">
                           <label><input name="name" value="search" onblur="if(this.value=='') this.value='search'" onfocus="if(this.value =='search' ) this.value=''" /></label>
                            <a class="button-form-top" href="#" onclick="document.getElementById('form-top').submit()"><img class="png" src="images/button-form-top.png" alt="" /></a>
                        </div>
                        </fieldset>                            
                    </form>
                </div><!--wrapper-->
            </div><!--row-2-->
            <div class="clear"></div>
            <div class="row-3">
                	<ul class="menu">
                    	<li><a <?php if ($page_id=="home" || $page_id=="donate") {echo " class=\"active\" ";} ?> href="index.php"><span><span>home</span></span> </a></li>
                        <li><a <?php if ($page_id=="about_us" || $page_id=="partnerships" || $page_id=="what" || $page_id=="staff") {echo " class=\"active\" ";} ?>href="#"><span><span>about us</span></span> </a>
                        	<div class="submenu_1">
								<ul class="menu_box">
									<li><a href="what.php">What we do</a></li>
									<li><a href="staff.php">Staff</a></li>
                                    <li><a href="partnerships.php">Partnerships</a></li>
										<!--div class="submenu_2">
											<ul class="menu_box">
												<li><a href="#">director</a></li>
												<li><a href="#">Teachers</a></li>
											</ul>
										</div--><!--submenu_2-->
									</li>
								</ul>
							</div>
                        </li>
                        <li><a <?php if ($page_id=="news") {echo " class=\"active\" ";} ?>href="news.php"><span><span>news &amp; events</span></span> </a></li>
                        <li><a <?php if ($page_id=="substance" || $page_id=="youth") {echo " class=\"active\" ";} ?>href="#"><span><span>projects</span></span> </a>
							<div class="submenu_1">
								<ul class="menu_box">
									<li><a href="substance.php">substance misuse</a></li>
									<li><a href="youth.php">youth crime</a></li>
								</ul>
							</div>
                        <li><a <?php if ($page_id=="counselling" || $page_id=="academic" || $page_id=="creative" || $page_id=="women" || $page_id=="flyers" || $page_id=="elearning" || $page_id=="trade" || $page_id=="courses") {echo " class=\"active\" ";} ?>href="courses.php"><span><span>courses</span></span> </a>
                        	<div class="submenu_1">
								<ul class="menu_box">
									<li><a href="counselling.php">counselling</a></li>
									<li><a href="academic.php">academic</a></li>
                                    <li><a href="creative.php">creative</a></li>
                                    <li><a href="women.php">women only</a></li>
                                    <li><a href="music.php">music production</a></li>
                                    <li><a href="film.php">film production</a></li>
                                    <li><a href="elearning.php">e-learning</a></li>
                                    <li><a href="trade.php">learn a trade</a></li>
                                    <li><a href="flyers.php">flyers</a></li>
								</ul>
							</div>
                        </li>
                        <li><a <?php if ($page_id=="clients") {echo " class=\"active\" ";} ?>href="clients.php"><span><span>clients</span></span> </a></li>
                        <li><a <a <?php if ($page_id=="contact") {echo " class=\"active\" ";} ?> href="contact.php"><span><span>contact us</span></span> </a></li>
                    </ul>
                    <div class="fright"><a class="link-top" href="#">rss </a></div>
                </div><!--row-3-->
        </div><!--row1-->
</div><!--relative-->
		<?php 
			if ($page_id=="home")
				{echo '		
        <div class="row-2a relative">
        	<div class="fright">
            	<div class="slogan-1 png">
                	<div class="padding"><a class="button-top png" href="mission.php"><span class="png"><span class="png">more</span></span> </a></div>
                </div>
                <div class="slogan-2 png">
                	<div class="padding"><a class="button-top png" href="courses.php"><span class="png"><span class="png">more</span></span> </a></div>
                </div>
                <div class="slogan-3 png">
                	<div class="padding"><a class="button-top png" href="donate.php"><span class="png"><span class="png">more</span></span> </a></div>
                </div>
            </div>
			<div class="slider">
			  <ul class="items">
				<li><img src="images/slide2.png" alt=""/></li>
				<li><img src="images/slide1.png" alt=""/></li>
				<li><img src="images/slide3.png" alt=""/></li>
                <li><img src="images/slide5.png" alt=""/></li>
                <li><img src="images/slide4.png" alt="" /></li>
			  </ul>
			  <a href="#" class="play">stop</a>
			</div>
        </div><!--row-2a--> ';} ?>