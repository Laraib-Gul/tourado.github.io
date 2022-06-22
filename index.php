<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Health medical template project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/Dropdown.css">







	<!-- Bootstrap CSS  for carousel-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- For Travel Forum -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
		
		/* for review */
		.container-fluid {
			padding: 60px 50px;
		}

		/* review part 2 */
		.carousel-control.right,
		.carousel-control.left {
			background-image: none;
			color: silver;
		}

		.carousel-indicators li {
			border-color: black;
		}

		.carousel-indicators li.active {
			background-color: black;
		}

		.item h4 {
			font-size: 17px;
			line-height: 1.375em;
			font-weight: 400;
			font-style: normal;
			margin: 70px 280px 70px 280px;
			color: rgb(0, 0, 0);
			font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
		}

		.item span {
			font-style: italic;
		}

		/* for image */
		.person {
			border: 10px solid transparent;
			margin-bottom: 15px;
			height: 10%;
			width: 10%;

		}

		.person:hover {
			border-color: #f1f1f1;
		}

		.image_center {
			text-align: center;
		}
	</style>
</head>

<body style="font-family: 'Montserrat', sans-serif !important;">

	<div class="super_container">

		<!-- Menu -->

		<div class="menu trans_500">
			<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
				<div class="menu_close_container">
					<div class="menu_close"></div>
				</div>
				<form action="#" class="menu_search_form">
					<input type="text" class="menu_search_input" placeholder="Search" required="required">
					<button class="menu_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
				<ul>
					<li class="menu_item"><a href="index.php">Home</a></li>
					<li class="menu_item"><a href="AboutUs.html">About us</a></li>
					<li class="menu_item"><a href="contact.html">Contact Us	</a></li>
					<li class="menu_item" data-toggle="modal" data-target="#myModal2"><a href="#">SignUp</a></li>
					<li class="menu_item" data-toggle="modal" data-target="#myModal1"><a href="#">LogIn</a></li>
				</ul>
			</div>
			<div class="menu_social">
				<ul>
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>

		<!-- Home -->

		<div class="home">


			<!-- Header -->

			<header class="header" id="header">
				<div>
					<div class="header_top">
						<div class="container">
							<div class="row">
								<div class="col">
									<div
										class="header_top_content d-flex flex-row align-items-center justify-content-start">
										<div class="logo">
											<a href="#"><img src="images/map2.png"
													style="width: 60px; height: 60px; margin-bottom: 10px; " alt="">
												tourado</a>
										</div>
										<div
											class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
											<div class="header_top_nav">
												<ul class="d-flex flex-row align-items-center justify-content-start">
													<li><a href="#">Help Desk</a></li>
													<li><a href="#">Emergency Services</a></li>
													<li><a href="#">Booking</a></li>
												</ul>
											</div>
											<div class="header_top_phone">
												<i class="fa fa-phone" aria-hidden="true"></i>
												<span>+92 321 1256778</span>
											</div>
										</div>
										<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header_nav" id="header_nav_pin">
						<div class="header_nav_inner">
							<div class="header_nav_container">
								<div class="container">
									<div class="row">
										<div class="col">
											<div
												class="header_nav_content d-flex flex-row align-items-center justify-content-start">
												<nav class="main_nav">
													<ul
														class="d-flex flex-row align-items-center justify-content-start">
														<li class="active"><a href="index.php">Home</a></li>
														<li><a href="AboutUs.html">About Us</a></li>
														<li><a href="contact.html">Contact Us</a></li>
														<li><a href="Feedback.html">Feedback</a></li>
														<li><a href="index.php#travel">Travel Forum</a></li>
														<li data-toggle="modal" data-target="#myModal1"><a
																href="#">LogIn</a></li>
														<li data-toggle="modal" data-target="#myModal2"><a
																href="#">SignUp</a></li>


													</ul>
												</nav>


											</div>


										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><br><br>



			</header>


			<div class="container-fluid">
				<h2>Responsive Embed</h2>

				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="OMJYNXM1CJX7AY59.mp4"
						style="width: 100%; height: 100%;"></iframe>
				</div>
			</div>




		</div>




		<div class="container">

			<!-- Button to Open the Modal -->

			<!-- The Modal -->
			<div class="modal fade" id="myModal1" style="margin-top: 140px;">
				<div class="modal-dialog modal-dialog-scrollable">
					<div class="modal-content" style="background-color: rgb(245, 245, 245);">

						<!-- Modal Header -->
						<div class="modal-header" style="background-color:rgb(80, 206, 168);">
							<h3 class="modal-title w-100 text-center" style="color: white;"> <i
									class="fa fa-user-circle" aria-hidden="true"> </i> LogIn</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"
								style="color: black; font-size: 30px;">
								<span aria-hidden="true" >&times;</span>
							</button>
						</div>


						<!-- Modal body -->
						<form action="loginForm.php" method="post">


							<div class="form-group" style="margin-left: 3%; margin-right: 3%; margin-top: 5%;">
								<label for="uemail" style="font-size: 18px;"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Email
									Address</label>
								<input type="text" class="form-control" id="uemail" style="font-size: 15px;" placeholder="Enter Email"
									name="uemail" required>

							</div>


							<div class="form-group" style="margin-left: 3%; margin-right: 3%;">
								<label for="upassword" style="font-size: 18px;"><i class="fa fa-unlock-alt"  aria-hidden="true"></i>
									Password:</label>
								<input type="password" class="form-control" style="font-size: 15px;" id="upassword" placeholder="Enter password"
									name="upassword" required>

							</div>


							<div class="border border-light p-3 mb-4"
								style="background-color: rgb(245, 245, 245); color: white; border-color: white;">

								<div class="text-center">

									<input type="submit" class="btn btn-info" value="Login"
										style="font-size: 18px; color: white; background-color: rgb(80, 206, 168); border-width: 2px;  border-color: rgb(80, 206, 168); width: 99%; height: 20%;">
									<br><br>
									<button
										style=" background-color: transparent; border-color: transparent; width: 100%;"><a
											href="#myModal2" data-toggle="modal" data-dismiss="modal"
											style="color:black; background-color: rgb(245, 245, 245); border-color: white; width: 208%; box-shadow: white;">
											New User? SignUp </a></button>
								</div>

							</div>



						</form>



					</div>
				</div>
			</div>

		</div>





		<div class="container">

			<!-- Button to Open the Modal -->


			<!-- The Modal -->
			<div class="modal fade" id="myModal2">
				<div class="modal-dialog modal-dialog-scrollable">
					<div class="modal-content"
						style="width: 105%; margin-right: 150%; background-color: rgb(245, 245, 245)">

						<!-- Modal Header -->
						<div class="modal-header" style="background-color: rgb(80, 206, 168); height: 90px; ">
							<h2 class="modal-title w-100 text-center"
								style=" color: white; text-align: center; margin-top:12px;"><i class="fa fa-user-plus"
									aria-hidden="true"></i> Registration </h2>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"
								style="margin-top: -3%; color: black; font-size:45px">
								<span aria-hidden="true">&times;</span>
							</button>


						</div>


						<!-- Modal body -->
						<form action="SignupForm.php" method="post" class="input-group" style="margin-top: 7%;">
							<div class="form-group" style="margin-left: 5%; margin-right: 4%; margin-top: 1%;">
								<label style="font-size: 18px;" for="uname"><i class="fa fa-user-circle-o"
										aria-hidden="true"></i> Username</label>
								<input type="text" class="form-control" id="uname" placeholder="Enter username"
									name="uname" style="width: 100%; font-size: 15px;" required>

							</div>
							<br> <br>
							<div class="form-group" style="margin-left: 5%; margin-right: 10%; margin-top: 1%;">
								<label style="font-size: 18px;" for="uemail"><i class="fa fa-user-circle-o"
										aria-hidden="true"></i> Email Address</label>
								<input type="email" class="form-control" id="uemail" placeholder="Enter Email"
									name="uemail" style="width: 107%; font-size: 15px;" required>

							</div>
							<br> <br>

							<div class="form-group" style="margin-left: 5%; margin-right: 4%;">
								<label style="font-size: 18px;" for="upassword"><i class="fa fa-unlock-alt"
										aria-hidden="true"></i> Password:</label>
								<input type="password" class="form-control" id="upassword" placeholder="Enter Password"
									name="upassword" style="width: 100%; font-size: 15px;" required>

							</div>
							<br> <br>
							<div class="form-group" style="margin-left:5%; margin-right: 10%;">
								<label style="font-size: 18px;" for="retype"><i class="fa fa-unlock-alt"
										aria-hidden="true"></i> Retype-Password</label>
								<input type="password" class="form-control" id="retype"
									placeholder="Enter Retype-Password" name="retype" style="font-size: 15px; width: 107%;" required>

							</div>
							<br><br>





							<div class="border border-light p-3 mb-4">

								<div class="text-center">

									<input type="submit" class="btn btn-info" value="Sign Up"
										style="color: white; font-size:18px; background-color: rgb(80, 206, 168); border-width: 2px;  border-color: rgb(80, 206, 168); width: 100%; height: 20%;">
									<br><br>
									<button
										style=" background-color: transparent; border-color: transparent; width: 100%;"><a
											href="#myModal1" data-toggle="modal" data-dismiss="modal"
											style="color: black; background-color: rgb(245, 245, 245); border-color: white; width: 208%; box-shadow: white;">
											Already have an account? Login </a></button>
								</div>

							</div>









						</form>



					</div>
				</div>
			</div>

		</div>

		<!-- Info Boxes -->

		<div class="info">

			<div class="container">
				<div class="row row-eq-height">

					<!-- Info Box -->
					<div class="col-lg-4 info_box_col">
						<div class="info_box">
							<div class="info_image"><img src="images/7.webp" style="height: 250px; width: 500px;"
									alt=""></div>
							<div class="info_content">
								<div class="info_title" style="font-family:  'Montserrat', sans-serif;">Travel Forum
								</div>
								<div class="info_text" style="font-family:  'Montserrat', sans-serif;">Helps you to see
									reviews of people who have visited various places and share their experience.</div>
								<div class="button info_button"><a href="Travel_Forum.html"
										style="font-family:  'Montserrat', sans-serif;"><span>read more</span><span>read
											more</span></a></div>
							</div>
						</div>
					</div>

					<!-- Info Box -->
					<div class="col-lg-4 info_box_col">
						<div class="info_box">
							<div class="info_image"><img src="images/26.jpg" style="height: 250px; width: 500px;"
									alt=""></div>
							<div class="info_content">
								<div class="info_title" style="font-family:  'Montserrat', sans-serif;">Feedback</div>
								<div class="info_text" style="font-family:  'Montserrat', sans-serif;">Users can give
									their feedback to help improve website. Feedback may include questions, comments or
									suggestions. </div>
								<div class="button info_button"><a href="Feedback.html"
										style="font-family:  'Montserrat', sans-serif;"><span>read more</span><span>read
											more</span></a></div>
							</div>
						</div>
					</div>

					<!-- Info Box -->
					<div class="col-lg-4 info_box_col">
						<div class="info_box">
							<div class="info_image"><img src="images/emergency.jpg" style="height: 250px; width: 500px;"
									alt=""></div>
							<div class="info_content">
								<div class="info_title" style="font-family:  'Montserrat', sans-serif;">Emergency Care
								</div>
								<div class="info_text" style="font-family:  'Montserrat', sans-serif;">Users can see
									list of imporblackt medicines and precautionary measures that can be taken at once.
								</div>
								<div class="button info_button"><a href="#"
										style="font-family:  'Montserrat', sans-serif;"><span>read more</span><span>read
											more</span></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>

		<!-- Travel Forum section -->
		<div id="travel">
			<h2
				style="text-align: center; color: black; font-family:  'Montserrat', sans-serif; font-weight: bold; font-size: 24px;">
				What our customers say about us</h2><br>
			<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
					<li data-target="#myCarousel" data-slide-to="4"></li>
					<li data-target="#myCarousel" data-slide-to="5"></li>
					<li data-target="#myCarousel" data-slide-to="6"></li>
					<li data-target="#myCarousel" data-slide-to="7"></li>
					<li data-target="#myCarousel" data-slide-to="8"></li>
					<li data-target="#myCarousel" data-slide-to="9"></li>
					<li data-target="#myCarousel" data-slide-to="10"></li>
					<li data-target="#myCarousel" data-slide-to="11"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<div class="image_center"> <img src="images/1.png" class="img-circle person" alt="Random Name">
						</div>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i><br>
						<h4><i class="fa fa-quote-left" style="font-size:48px;color:black"></i><br><br>"Love the way the
							website helps to organize the tours 👍.
							We have used various tour planning platforms before but they would always mess up and did
							not work well. I love how we can completely customize our trip. Loads quickly and responsive
							to all devices. A++"<br><span>Katherine Thomas</span></h4>


					</div>
					<div class="item">
						<div class="image_center"> <img src="images/226.jpg" class="img-circle person"
								alt="Random Name"> </div>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-secondary" style="font-size:24px;"></i><br>
						<h4><i class="fa fa-quote-left" style="font-size:48px;color:black"></i><br><br>"Tourado is one
							of the best website i have used so far. I really enjoyed my trip to various areas. The tour
							schedule was remarkable, helped us to visit beautiful Northern areas of Pakisblack. Keep
							Going!!"<br><span>Garrett Kite</span></h4>
					</div>
					<div class="item">
						<div class="image_center"> <img src="images/3.png" class="img-circle person" alt="Random Name">
						</div>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star-half-full text-warning" style="font-size:24px;"></i><br>
						<h4><i class="fa fa-quote-left" style="font-size:48px;color:black"></i><br><br>"A very well done
							service provider that now works exactly as advertised. Amazing website with amazing tour
							plans. 😍👏"<br><span>Taylor Jay</span></h4>
					</div>
					<div class="item">
						<div class="image_center"> <img src="images/4.png" class="img-circle person" alt="Random Name">
						</div>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-secondary" style="font-size:24px;"></i>
						<i class="fa fa-star text-secondary" style="font-size:24px;"></i><br>
						<h4><i class="fa fa-quote-left" style="font-size:48px;color:black"></i><br><br>"This Website
							saved my day! It's very easy to use this website and the recommended plans make it very easy
							to get what is desired. Nice job, can't wait to try out with other plans
							again!"<br><span>Ruby Karl</span></h4>
					</div>
					<div class="item">
						<div class="image_center"> <img src="images/556.jpg" class="img-circle person"
								alt="Random Name"> </div>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i><br>
						<h4><i class="fa fa-quote-left" style="font-size:48px;color:black"></i><br><br>"I've tried a
							dozen apps, but never felt satisfied. Excellent job, made my tour memorable."<br><span>Diane
								Pennebaker</span></h4>
					</div>
					<div class="item">
						<div class="image_center"> <img src="images/6.jpg" class="img-circle person" alt="Random Name">
						</div>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star-half-full text-warning" style="font-size:24px;"></i><br>
						<h4><i class="fa fa-quote-left" style="font-size:48px;color:black"></i><br><br>"This website is
							great. It does exactly what I need it do and when I did run into a settings problem, the
							friendly chatbot at Tourado helped me to sort it out nice and quickly 😊"<br><span>Cheryl
								Smith</span></h4>
					</div>
					<div class="item">
						<div class="image_center"> <img src="images/7.jpg" class="img-circle person" alt="Random Name">
						</div>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-secondary" style="font-size:24px;"></i><br>
						<h4><i class="fa fa-quote-left" style="font-size:48px;color:black"></i><br><br>"The whole team
							went above and beyond to help me fix an issue which ultimately had nothing to do with the
							app. Highly recommend this website for booking tours."<br><span>Tony Johnson</span></h4>
					</div>
					<div class="item">
						<div class="image_center"> <img src="images/8.jpg" class="img-circle person" alt="Random Name">
						</div>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-secondary" style="font-size:24px;"></i>
						<i class="fa fa-star text-secondary" style="font-size:24px;"></i><br>
						<h4><i class="fa fa-quote-left" style="font-size:48px;color:black"></i><br><br>"My previous tour
							that I booked when I visited Pakisblack was good, somehow faced small issues, looking
							forward to get better services this time."<br><span>Marion Campbell</span></h4>
					</div>
					<div class="item">
						<div class="image_center"> <img src="images/9.jpg" class="img-circle person" alt="Random Name">
						</div>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i><br>
						<h4><i class="fa fa-quote-left" style="font-size:48px;color:black"></i><br><br>"Tourado has
							never failed to meet my expectations. Whenever I am in a hurry to plan a tour, I always have
							my faith in them as they provide the best services, along with quick payment methods and
							reasonble travelling mediums ✔. Thanks Tourado!!"<br><span>Saba Ahmed</span></h4>
					</div>
					<div class="item">
						<div class="image_center"> <img src="images/10.jpg" class="img-circle person" alt="Random Name">
						</div>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i><br>
						<h4><i class="fa fa-quote-left" style="font-size:48px;color:black"></i><br><br>"We have enjoyed
							four previous tours with TOURADO and we had been searching for a high quality, small group
							tour of some cold area. Thus, when Tourado offered the Exploring Northern Areas tour, we
							booked without hesitation. They never fail to surprise you with the updated features.
							✌"<br><span>Zubair Ikhlaq</span></h4>
					</div>
					<div class="item">
						<div class="image_center"> <img src="images/11.jpg" class="img-circle person" alt="Random Name">
						</div>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star-half-full text-warning" style="font-size:24px;"></i><br>
						<h4><i class="fa fa-quote-left" style="font-size:48px;color:black"></i><br><br>"A superb week
							exploring History of Pakisblack. This was my first visit to historical places, and it was
							wonderful. The hotel was excellent, full of character, quiet & secluded. We visited good
							restaurants, where we were guided & encouraged to sample local specialities. There was free
							time for us to see some essential sites independently, and there was guidance on how to use
							the free time we had. All in all a great week.😍"<br><span>Ahad Asif</span></h4>
					</div>
					<!-- PHP CODE -->
					<?php
                            $conn = mysqli_connect("localhost", "root", "", "tourado");
                            $query = "SELECT * From feedback ORDER BY fid DESC Limit 1";

                            $query_run = mysqli_query($conn, $query);
                            //  $query_run_join = mysqli_query($conn, $queryJoin);
                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $row) { ?>
					<!-- TF RETRIEVE TRIAL-->
					<div class="item">
					<div class="image_center"> <img src="images/fbperson.png" class="img-circle person" alt="Random Name">
					</div>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-warning" style="font-size:24px;"></i>
						<i class="fa fa-star text-secondary" style="font-size:24px;"></i><br>
						<h4><i class="fa fa-quote-left" style="font-size:48px;color:black"></i><br><br><?= $row['fmessage']; ?><br>
						<span><?= $row['fname']; ?></span></h4>
						
					</div>
				</div>
				<?php  
                                        
                                    }
                                } else {
                                    ?>
                                    <div style="width: 50%;" class="centerdiv">
                                        <p class="one"><b>No record Fetched </b></p>
                                    </div>
                                <?php
                                }
                                ?>
				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
	<!-- Travel Forum Ends here-->

	<br><br><br>


	<!-- Services -->

	<div class="services" style="background-color: rgb(197, 249, 253);">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">Our Services</div>
					<div class="section_subtitle">to choose from</div>
				</div>
			</div>
			<div class="row icon_boxes_row">

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/Area.png" alt=""></div>
							<div class="icon_box_title">Tour Spots</div>
						</div>
						<div class="icon_box_text" style="text-align: justify; text-justify:inter-word;">Pakisblack is
							blessed with beautiful tourists as well as historical and religious sites where tourists
							from abroad visit in large numbers. We provide multiple tour spots to explore and enjoy.
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/Hotel.png" alt=""></div>
							<div class="icon_box_title">Hotels</div>
						</div>
						<div class="icon_box_text" style="text-align: justify; text-justify:inter-word;">Tourists can
							book room(s) in hotel to stay. List of hotels is provided to give an idea of available
							hotels in the particular area.</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/Restuarant.png" alt=""></div>
							<div class="icon_box_title">Restaurants</div>
						</div>
						<div class="icon_box_text" style="text-align: justify; text-justify:inter-word;"> Tourists will
							find best resturants of particular place on our website and they can select restaurants
							where they can enjoy different cuisine.</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/Tra.png" alt=""></div>
							<div class="icon_box_title">Travelling Medium</div>
						</div>
						<div class="icon_box_text" style="text-align: justify; text-justify:inter-word;">Tourists can
							select any travel medium to travel. We offer car, jeep, train, bus and aeroplane as travel
							mediums. Users can select any of them according to their budget and desires.</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/Hospital.png" alt=""></div>
							<div class="icon_box_title">Hospital</div>
						</div>
						<div class="icon_box_text" style="text-align: justify; text-justify:inter-word;">A list of
							hospitals is provided which will help tourists in case of any emergency. Users can
							immediately visit teh nearby hospitals.</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="icon_box_icon"><img src="images/packages.png" alt=""></div>
							<div class="icon_box_title">Packages</div>
						</div>
						<div class="icon_box_text" style="text-align: justify; text-justify:inter-word;">Various
							packages are offered that facilitates tourists to explore the Pakisblack.Packages may vary
							in prices.</div>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col">
					<div class="button services_button ml-auto mr-auto"><a href="#"><span>read more</span><span>read
								more</span></a></div>
				</div>
			</div>
		</div>
	</div>







	<!-- FAQ & News -->

	<div class="stuff" style="background-color: rgb(249, 251, 253);">
		<div class="container">
			<div class="row">

				<!-- FAQ -->
				<div class="col-lg-7">
					<div class="faq">
						<div class="faq_title">Faq & Stuff</div>
						<div class="faq_subtitle">read all about it</div>
						<div class="elements_accordions">
							<div class="accordions">

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center active">
										<div>What is Tourado?</div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>Tourado is a great Tour Planning website that helps tourists plan their
												trips according to their desires, budget and preferences.</p>
										</div>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center">
										<div>Can I customize my tour?</div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>Yes, you can surely customize your tour plan. Also you have two other
												ways available to plan your tour.</p>
										</div>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center">
										<div>What are the other two ways to plan a tour using Tourado?</div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>You can either get recommendations according to your interest and budget
												or select a ready-made package from the available packages.</p>
										</div>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center">
										<div>How many traveling mediums are available to opt for?</div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>You can select any traveling medium out of the five facilitated by
												Tourado. These traveling mediums include: Bus, Car, Jeep, Train and
												Aeroplane.</p>
										</div>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center">
										<div>How can I book a room for myself?</div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>You can book room(s) in hotel, take a room in guest-house on rent, or
												rent a room available in any house being offered by the owner of the
												house.</p>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- Latest News -->
				<div class="col-lg-5">
					<div class="news">
						<div class="news_title">Latest News</div>
						<div class="news_subtitle">read all about it</div>
						<div class="news_container">

							<!-- Latest News Post -->
							<div class="latest d-flex flex-row align-items-start justify-content-start">
								<div>
									<div class="latest_image"><img src="images/3.jpg" alt=""></div>
								</div>
								<div class="latest_content">
									<div class="latest_title"><a href="news.html">Snow, Snow Everywhere, Murree, Swat,
											Skardu, Naran Kaghan</a></div>
									<div class="latest_info">
										<ul class="d-flex flex-row align-items-start justify-content-start">
											<li><a href="#">by Rooma Shahid</a></li>
											<li><a href="#">Jan 14, 2022</a></li>
										</ul>
									</div>
									<div class="latest_comments"><a href="#">5 Comments</a></div>
								</div>
							</div>

							<!-- Latest News Post -->
							<div class="latest d-flex flex-row align-items-start justify-content-start">
								<div>
									<div class="latest_image"><img src="images/skardu.jpg" style="height: 70px;" alt="">
									</div>
								</div>
								<div class="latest_content">
									<div class="latest_title"><a href="news.html">Best Places To Visit In Skardu During
											Autumn</a></div>
									<div class="latest_info">
										<ul class="d-flex flex-row align-items-start justify-content-start">
											<li><a href="#">by Kaif Jamal</a></li>
											<li><a href="#">Jan 26, 2022</a></li>
										</ul>
									</div>
									<div class="latest_comments"><a href="#">2 Comments</a></div>
								</div>
							</div>

							<!-- Latest News Post -->
							<div class="latest d-flex flex-row align-items-start justify-content-start">
								<div>
									<div class="latest_image"><img src="images/Kalam.jpg" style="height: 70px;" alt="">
									</div>
								</div>
								<div class="latest_content">
									<div class="latest_title"><a href="news.html">Akcent Embracing The Beauty Of Hunza
											and Promoting Tourism </a></div>
									<div class="latest_info">
										<ul class="d-flex flex-row align-items-start justify-content-start">
											<li><a href="#">by Areesha Afzal</a></li>
											<li><a href="#">Feb 11, 2022</a></li>
										</ul>
									</div>
									<div class="latest_comments"><a href="#">4 Comments</a></div>
								</div>
							</div>

							<!-- Latest News Post -->
							<div class="latest d-flex flex-row align-items-start justify-content-start">
								<div>
									<div class="latest_image"><img src="images/2.jpg" alt=""></div>
								</div>
								<div class="latest_content">
									<div class="latest_title"><a href="news.html">20 Places in Northern Pakisblack
											2021-22</a></div>
									<div class="latest_info">
										<ul class="d-flex flex-row align-items-start justify-content-start">
											<li><a href="#">by Ali Ahmad</a></li>
											<li><a href="#">Feb 25, 2022</a></li>
										</ul>
									</div>
									<div class="latest_comments"><a href="#">3 Comments</a></div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/23.jpg"
			data-speed="0.8"></div>
		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer About -->
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="logo">
								<a href="#"><img src="images/map2.png"
										style="width: 60px; height: 60px; margin-bottom: 10px; " alt=""> tourado</a>
							</div>
							<div class="footer_about_text" style="text-align: justify; text-justify:inter-cluster;">
								Tourado is a great Tour Planning website that helps tourists plan their trips according
								to their desires, budget and preferences.</div>
							<div class="footer_social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest"
												aria-hidden="true"></i></a></li>
									<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"
												aria-hidden="true"></i></a></li>
									<li><a href="https://www.twitter.com/"><i class="fa fa-twitter"
												aria-hidden="true"></i></a></li>
									<li><a href="https://dribbble.com/"><i class="fa fa-dribbble"
												aria-hidden="true"></i></a></li>
									<li><a href="https://www.behance.net/"><i class="fa fa-behance"
												aria-hidden="true"></i></a></li>
									<li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"
												aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="copyright" style="text-align: justify; text-justify:inter-cluster;">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;
								<script>document.write(new Date().getFullYear());</script> All rights reserved. Designed
								by Laraib Gul, Mehreen Qaiser and Irsa Nadeem.</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</div>
							<!-- | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib -->
						</div>
					</div>


					<!-- Footer Contact -->
					<div class="col-lg-5 footer_col">
						<div class="footer_contact">
							<div class="footer_contact_title">Quick Contact</div>
							<div class="footer_contact_form_container">
								<form action="#" class="footer_contact_form" id="footer_contact_form">
									<div
										class="d-flex flex-xl-row flex-column align-items-center justify-content-between">
										<input type="text" class="footer_contact_input" placeholder="Name"
											required="required">
										<input type="email" class="footer_contact_input" placeholder="E-mail"
											required="required">
									</div>
									<textarea class="footer_contact_input footer_contact_textarea" placeholder="Message"
										required="required"></textarea>
									<button class="footer_contact_button">send message</button>
								</form>
							</div>
						</div>
					</div>

					<!-- Footer Hours -->
					<div class="col-lg-4 footer_col">
						<div class="footer_hours">
							<div class="footer_hours_title">Office Opening Hours</div>
							<ul class="hours_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Monday – Thursday</div>
									<div class="ml-auto">8.00 – 19.00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Friday</div>
									<div class="ml-auto">8.00 - 18.30</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Saturday</div>
									<div class="ml-auto">9.30 – 17.00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Sunday</div>
									<div class="ml-auto">9.30 – 15.00</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div
							class="footer_bar_content d-flex flex-sm-row flex-column align-items-lg-center align-items-start justify-content-start">
							<nav class="footer_nav">
								<ul
									class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									<li class="active"><a href="index.php">Home</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="services.html">Services</a></li>
									<li><a href="news.html">News</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
							
							<div class="footer_phone ml-lg-auto">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<span>+92 321 1256778</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	</div>
	<script>
		window.addEventListener('mouseover', initLandbot, { once: true });
		window.addEventListener('touchstart', initLandbot, { once: true });
		var myLandbot;
		function initLandbot() {
			if (!myLandbot) {
				var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
				s.addEventListener('load', function () {
					var myLandbot = new Landbot.Livechat({
						configUrl: 'https://chats.landbot.io/v3/H-1200738-A6YLUBJW8B6ENJV4/index.json',
					});
				});
				s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.js';
				var x = document.getElementsByTagName('script')[0];
				x.parentNode.insertBefore(s, x);
			}
		}
	</script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>