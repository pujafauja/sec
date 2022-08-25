<body>

	<div class="wrapper">

		<?php if($this->uri->segment(1) == ''): ?>
		<div class="main-section">
		<?php endif; ?>

			<header>
				<div class="container">
					<div class="header-content d-flex flex-wrap align-items-center">
						<div class="logo">
							<a href="index.html" title="">
								<img src="assets/img/logo.png" alt="" srcset="assets/img/01_Logo_2x.png 2x" height="80px"> 
							</a>
						</div><!--logo end-->
						<ul class="contact-add d-flex flex-wrap">
							<li>
								<div class="contact-info">
									<img src="assets/img/icon1.png" alt="">
									<div class="contact-tt">
										<h4>Call</h4>
										<span>+2 342 5446 67</span>
									</div>
								</div><!--contact-info end-->
							</li>
							<li>
								<div class="contact-info">
									<img src="assets/img/icon3.png" alt="">
									<div class="contact-tt">
										<h4>Address</h4>
										<span>Sukabumi, West Java, Indonesia</span>
									</div>
								</div><!--contact-info end-->
							</li>
						</ul><!--contact-information end-->
						<div class="menu-btn">
							<a href="#">
								<span class="bar1"></span>
								<span class="bar2"></span>
								<span class="bar3"></span>
							</a>
						</div><!--menu-btn end-->
					</div><!--header-content end-->
					<div class="navigation-bar d-flex flex-wrap align-items-center">
						<nav>
							<ul>
								<li><a class="active" href="<?php echo base_url() ?>" title="">Home</a></li>
								<li><a href="<?php echo base_url('about') ?>" title="">About</a>
								</li>
								<li><a href="<?php echo base_url('programs') ?>" title="">SEC Program</a>
									<ul>
										<li><a href="program-single.html" title="">Women Empowerment</a></li>
										<li><a href="program-single.html" title="">Charity Social Activities</a></li>
									</ul>
								</li>
								<li><a href="departments.html" title="">SEC Departments</a>
									<ul>
										<li><a href="department-single.html" title="">Business Department</a></li>
										<li><a href="department-single.html" title="">Education Department</a></li>
									</ul>
								</li>
								<li><a href="blog.html" title="">Articles</a>
								</li>
								<li><a href="contacts.html" title="">Contacts</a></li>
							</ul>
						</nav><!--nav end-->
						<ul class="social-links ml-auto">
							<li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div><!--navigation-bar end-->
				</div>
			</header><!--header end-->

			<div class="responsive-menu">
				<ul>
					<li><a href="index.html" title="">Home</a></li>
					<li><a href="about.html" title="">About</a></li>
					<li><a href="events.html" title="">Events</a></li>
					<li><a href="event-single.html" title="">Event Single</a></li>
					<li><a href="schedule.html" title="">Schedule</a></li>
					<li><a href="classes.html" title="">Classes</a></li>
					<li><a href="class-single.html" title="">Classe Single</a></li>
					<li><a href="teachers.html" title="">Teachers</a></li>
					<li><a href="teacher-single.html" title="">Teacher Single</a></li>
					<li><a href="blog.html" title="">Blog</a></li>
					<li><a href="post.html" title="">Blog Single</a></li>
					<li><a href="contacts.html" title="">Contacts</a></li>
					<li><a href="error.html" title="">404</a></li>
				</ul>
			</div><!--responsive-menu end-->