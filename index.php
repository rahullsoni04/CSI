<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="plugins/css/mdb.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="css/style.css">
	<title>CSI-SAKEC</title>
</head>

<body>
	<!-- Loader -->
	<div class="preloader">
		<div class="loader"></div>
	</div>
	<!--Navbar -->
	<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color sticky-top">
		<a class="navbar-brand" href="#">CSI-SAKEC</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
			aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="#home">Home
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#about">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#events">Events</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#ourteam">Our Team</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#gallery">Gallery</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#contact">Contact Us</a>
				</li>
				<?php
				session_start();
				require_once "config.php";
				if(isset($_SESSION['username']))
				{
					echo'<li class="nav-item">';
					echo'<a class="nav-link" href="loggedinmembership.html">Membership</a>';
					echo'</li>';
				} 
				else 
				{
					echo'<li class="nav-item">';
					echo'<a class="nav-link" href="membership.html">Membership</a>';
					echo'</li>';	
				}
				
				?>
				<!-- <li class="nav-item">
					<a class="nav-link" href="membership.html">Membership</a>
				</li> -->
			</ul>
			<ul class="navbar-nav ml-auto nav-flex-icons">
				<?php
					//session_start();
					if(isset($_SESSION['username']))
					{
						
						echo'<li class="nav-item">';
						echo'<a class="nav-link" href="">User email id :'.$_SESSION['username'].' </a>';
						echo'</li>';
						echo'<li class="nav-item">';
						echo'<a class="nav-link" href="logout.php">Logout</a>';
						echo'</li>';
					}
				else{
					echo'<li class="nav-item">';
					echo'<a class="nav-link" href="login.html">Login</a>';
					echo'</li>';
					echo'<li class="nav-item">';
						echo'<a class="nav-link" href="signup.html">Sign up</a>';
						echo'</li>';
				}
				?>
				
			</ul>
		</div>
	</nav>
	<!-- Heading Section -->
	<header>
		<div id="home">
			<img class="roll-support1" src="images/settings.png" alt="">
			<a href="#events"> <img class="rolling" src="images/settings.png" alt="events"></a> -->
			<img class="roll-support2" src="settings.png" alt="">
			<h1>CSI SAKEC</h1>
		</div>
	</header>
	<br>
	<br>
	<br>


	<!-- log in   -->


	<!-- About Us -->
	<div id="about">
		<div class="container-fluid text-center">
			<h1 class=" h1-responsive font-weight-bold my-5">About Us</h1>
			<div class="spacer" style="height:60px;"></div>
			<div class="row">
				<div class="col-sm-6">
					<img class="aboutus" src="images/about.jpg" alt="">
				</div>
				<div class="col-sm-6">
					<div class="spacer" style="height:20px;"></div>
					<p>CSI is the largest and one of the most professionally managed association of India for CS and IT
						professionals. CSI SAKEC, since its inception, has proven to be a great source of knowledge by
						providing hands-on technical training and has worked towards the goal of transforming students
						into technical and competent professionals. It conducts events such as technical workshops,
						informative seminars, conferences, industry-academia interactions, technical competitions,
						student initiative programs and industrial visits which prove to be a gateway to technical
						expertise.</p>
				</div>
			</div>

		</div>
	</div>

	<div class="spacer" style="height:170px;"></div>

	<!-- events -->
	<div id="events">
		<div class="container">
			<div class="spacer" style="height:50px;"></div>
			<div class="row">
				<h1>
					Events
				</h1>
			</div>
			<hr class="line1">
			<div class="spacer" style="height:30px;"></div>
			<div class="row">

				<div class="col-sm-4 date">
					<br>
					<p>
						20 April 2020
					</p>
				</div>
				<div class="col-sm-8 event-details">
					<a href="event.html">
						<h2>
							CSI-SAKEC Outbound
						</h2>
					</a>
					<br>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptas, cupiditate perspiciatis
						et unde quidem eos aliquid nisi incidunt suscipit architecto quaerat consequuntur excepturi
						corrupti? Necessitatibus asperiores quas blanditiis architecto.
					</p>
				</div>

			</div>
			<div class="row">
				<div class="col-sm-4 date">
					<br>
					<p>
						07 july 2020
					</p>
				</div>
				<div class="col-sm-8 event-details">
					<a href="event.html">
						<h2>
							Dhoni's Birthday
						</h2>
					</a><br>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptas, cupiditate perspiciatis
						et unde quidem eos aliquid nisi incidunt suscipit architecto quaerat consequuntur excepturi
						corrupti? Necessitatibus asperiores quas blanditiis architecto.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 date">
					<br>
					<p>
						10 September 2020
					</p>
				</div>
				<div class="col-sm-8 event-details">
					<a href="event.html">
						<h2>
							Ganpati Special
						</h2>
					</a><br>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptas, cupiditate perspiciatis
						et unde quidem eos aliquid nisi incidunt suscipit architecto quaerat consequuntur excepturi
						corrupti? Necessitatibus asperiores quas blanditiis architecto.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 date">
					<br>
					<p>
						12-14 October 2020
					</p>
				</div>
				<div class="col-sm-8 event-details">
					<a href="event.html">
						<h2>
							Shark Tank
						</h2>
					</a><br>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptas, cupiditate perspiciatis
						et unde quidem eos aliquid nisi incidunt suscipit architecto quaerat consequuntur excepturi
						corrupti? Necessitatibus asperiores quas blanditiis architecto.
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="spacer" style="height:90px;"></div>

	<div id="ourteam">
		<!-- Section: Team v.2 -->
		<section class="team-section text-center my-5">

			<!-- Section heading -->
			<h1 class="h1-responsive font-weight-bold my-5">Our amazing team</h1>
			<!-- Section description -->
			<p class="grey-text w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
				Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
				eum porro a pariatur veniam.</p>

			<!-- Grid row -->
			<div class="row text-center">

				<!-- Grid column -->
				<div class="col-md-4 mb-md-0 mb-5">
					<div class="avatar mx-auto">
						<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg"
							class="rounded z-depth-1-half" alt="Sample avatar">
					</div>
					<h4 class="font-weight-bold dark-grey-text my-4">Maria Kate</h4>
					<h6 class="text-uppercase grey-text mb-3"><strong>Photographer</strong></h6>
					<!-- Facebook-->
					<a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-fb">
						<img class="social" src="images/instagram.png" alt="instagram">

					</a>
					<!--Dribbble -->
					<a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-dribbble">
						<img class="social" src="images/facebook.png" alt="facebook">
					</a>
					<!-- Twitter -->
					<a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-tw">
						<img class="social" src="images/twitter.png" alt="twitter">
					</a>
				</div>
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-md-4 mb-md-0 mb-5">
					<div class="avatar mx-auto">
						<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg"
							class="rounded z-depth-1-half" alt="Sample avatar">
					</div>
					<h4 class="font-weight-bold dark-grey-text my-4">John Doe</h4>
					<h6 class="text-uppercase grey-text mb-3"><strong>Front-end Developer</strong></h6>
					<!--Email-->
					<a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-email">
						<img class="social" src="images/instagram.png" alt="instagram">
					</a>
					<!-- Facebook-->
					<a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-fb">
						<img class="social" src="images/facebook.png" alt="facebook">
					</a>
					<!-- GitHub-->
					<a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-git">
						<img class="social" src="images/twitter.png" alt="twitter">
					</a>
				</div>
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-md-4">
					<div class="avatar mx-auto">
						<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg"
							class="rounded z-depth-1-half" alt="Sample avatar">
					</div>
					<h4 class="font-weight-bold dark-grey-text my-4">Sarah Melyah</h4>
					<h6 class="text-uppercase grey-text mb-3"><strong>Web Developer</strong></h6>
					<!--Linkedin -->
					<a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-li">
						<img class="social" src="images/instagram.png" alt="instagram">
					</a>
					<!-- Twitter -->
					<a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-tw">
						<img class="social" src="images/facebook.png" alt="facebook">
					</a>
					<!--Pinterest -->
					<a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-pin">
						<img class="social" src="images/twitter.png" alt="twitter">
					</a>
				</div>
				<!-- Grid column -->

			</div>
			<!-- Grid row -->
			<div class="spacer" style="height:120px;"></div>

			<div class="row text-center">

				<!-- Grid column -->
				<div class="col-md-4 mb-md-0 mb-5">
					<div class="avatar mx-auto">
						<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg"
							class="rounded z-depth-1-half" alt="Sample avatar">
					</div>
					<h4 class="font-weight-bold dark-grey-text my-4">Maria Kate</h4>
					<h6 class="text-uppercase grey-text mb-3"><strong>Photographer</strong></h6>
					<!-- Facebook-->
					<a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-fb">
						<img class="social" src="images/instagram.png" alt="instagram">

					</a>
					<!--Dribbble -->
					<a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-dribbble">
						<img class="social" src="images/facebook.png" alt="facebook">
					</a>
					<!-- Twitter -->
					<a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-tw">
						<img class="social" src="images/twitter.png" alt="twitter">
					</a>
				</div>
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-md-4 mb-md-0 mb-5">
					<div class="avatar mx-auto">
						<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg"
							class="rounded z-depth-1-half" alt="Sample avatar">
					</div>
					<h4 class="font-weight-bold dark-grey-text my-4">John Doe</h4>
					<h6 class="text-uppercase grey-text mb-3"><strong>Front-end Developer</strong></h6>
					<!--Email-->
					<a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-email">
						<img class="social" src="images/instagram.png" alt="instagram">
					</a>
					<!-- Facebook-->
					<a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-fb">
						<img class="social" src="images/facebook.png" alt="facebook">
					</a>
					<!-- GitHub-->
					<a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-git">
						<img class="social" src="images/twitter.png" alt="twitter">
					</a>
				</div>
				<!-- Grid column -->
				<!-- Grid column -->
				<div class="col-md-4">
					<div class="avatar mx-auto">
						<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg"
							class="rounded z-depth-1-half" alt="Sample avatar">
					</div>
					<h4 class="font-weight-bold dark-grey-text my-4">Sarah Melyah</h4>
					<h6 class="text-uppercase grey-text mb-3"><strong>Web Developer</strong></h6>
					<!--Linkedin -->
					<a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-li">
						<img class="social" src="images/instagram.png" alt="instagram">
					</a>
					<!-- Twitter -->
					<a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-tw">
						<img class="social" src="images/facebook.png" alt="facebook">
					</a>
					<!--Pinterest -->
					<a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-pin">
						<img class="social" src="images/twitter.png" alt="twitter">
					</a>
				</div>
				<!-- Grid column -->

			</div>
		</section>
		<!-- Section: Team v.2 -->
	</div>

	<div class="spacer" style="height:90px;"></div>

	<!-- Gallery -->
	<div id="gallery" style="background-image: linear-gradient(to top right, #ff7263,#ebfb65, #98f0ff);">
		<div class="spacer" style="height:10px;"></div>
		<h1 class="h1-responsive font-weight-bold my-5" style="color: rgb(104, 104, 104);">Gallery</h1>

		<div class="container-fluid text-center">


			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="images/gal-4.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="images/gal-2.jpg" alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="images/gal-3.jpg" alt="Third slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="images/gal-4.jpg" alt="ourth slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
							data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
							data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>

				</div>
				<div class="col-sm-2"></div>
			</div>
		</div>
	</div>
	<div class="spacer" style="height:120px;"></div>
	<!-- Footer -->
	<div id="contact">
		<div class="footer">

			<div class="row">

				<div class="col-sm-6">
					<div class="spacer" style="height:110px;"></div>
					<div class="grid-container">

						<div class="grid-item item1">
							<h4>
								Important Links
							</h4>
							<ul class="list-group list-group-flush">
								<a class="list-group-item list-group-item-action" href="#">SAKEC</a>
								<a class="list-group-item list-group-item-action" href="#gallery">Gallery</a>
								<a class="list-group-item list-group-item-action" href="#events">Events</a>
								<a class="list-group-item list-group-item-action" href="#ourteam">Our Team</a>
							</ul>
						</div>

						<div class="grid-item item2">
							<div class="vl"></div>

						</div>
						<div class="grid-item item3">
							<h4>
								Contacts
							</h4>
							<ul class="list-group list-group-flush">
								<li class="list-group-item list-group-item-action">Privacy Policy</li>
								<li class="list-group-item list-group-item-action">Terms</li>
								<li class="list-group-item list-group-item-action">Membership</li>
								<li type="button" class="list-group-item list-group-item-action" data-toggle="modal"
									data-target="#basicExampleModal">Newsletter</li>
								<!-- Modal -->
								<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog"
									aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Subscribe now!</h5>
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<input type="email" class="form-control" placeholder="E-Mail"
													id="emailid">
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary">Subscribe</button>

											</div>
										</div>
									</div>
								</div>
							</ul>
						</div>


						<div class="grid-item item4">
							<h5>Stay tuned and follow us on social media for more updates!</h5>
							<hr class="hr1">
							<div class="social-sites">
								<a href="https://www.instagram.com/csisakec/"><img class="social"
										src="images/instagram.png" alt="instagram"></a>
								<a href="https://www.facebook.com/csisakec/photos"><img class="social"
										src="images/facebook.png" alt="facebook"></a>
								<a href=""><img class="social" src="images/twitter.png" alt="twitter"></a>
								<a href=""><img class="social" src="images/youtube.png" alt="youtube"></a>
							</div>
						</div>
					</div>
				</div>



				<div class="col-sm-5">
					<div class="jumbotron">
						<h2>Contact Us</h2>
						<label for="name">Name</label> :
						<input type="name" placeholder="Name" class="form-control"><br>
						<label for="email">E-Mail</label> :
						<input type="email" class="form-control" placeholder="E-Mail" id="emailid"><br>
						<label for="message">Message</label> :
						<textarea data-toggle="tooltip" data-placement="bottom" title="Any Queries? Write us "
							type="text-area" placeholder="Message" class="form-control" rows="5"></textarea>
						<button type="button" class="btn btn-primary  btn-block">Submit</button>
					</div>
				</div>
			</div>
			<div class="spacer" style="height:30px;"></div>
			<div class="copyright">
				<div class="spacer" style="height:8px;"></div>
				<a href="#home"><i class="fas fa-home"></i></a>
				<div class="spacer" style="height:10px;"></div>
				<h5>Copyright &copy; CSI-SAKEC 2020-21 All Rights Reserved</h5>
				<div class="spacer" style="height:5px;"></div>

			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script>

		setTimeout(function () {
			$('.preloader').fadeToggle();
		}, 1000);


		$(document).ready(function () {
			//image height
			var winHeight = $(window).height();
			var winHeightImg = $(window).height();
			$('header').css('height', winHeightImg);
		})
	</script>
</body>

</html>