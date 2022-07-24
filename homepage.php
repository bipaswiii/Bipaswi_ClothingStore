<!DOCTYPE html>
<html lang="en">
<!--www.divinectorweb.com-->
<head>
	<meta charset="UTF-8">
	<title>bootstrap 5 homepage template</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;900&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
</head>
<body>

		
	</nav>
	<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
		<div class="carousel-indicators">
			<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img alt="..." class="d-block w-100" src="images/clothing5.jpg">
				<div class="carousel-caption">
					<h5 class="animated fadeInDown" style="animation-delay: 1s">Bipaswi's Boutique</h5>
					<p class="animated fadeInUp d-none d-md-block" style="animation-delay: 2s"> A family owned business catered to meet all your fashion and clothing needs.</p>
					<p class="animated fadeInUp" style="animation-delay: 3s"><a href="register.php">Register Now</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="images/clothing3.jpg">
				<div class="carousel-caption">
					<h5 class="animated fadeInDown" style="animation-delay: 1s">FASHION MEETS FUN</h5>
					<p class="animated fadeInUp d-none d-md-block" style="animation-delay: 2s">Look through a wide variety of clothes for any and every occasion</p>
					<p class="animated fadeInUp" style="animation-delay: 3s"><a href="newdisplay.php">Shop Now</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="images/clothing4.jpg">
				<div class="carousel-caption">
					<h5 class="animated fadeInDown" style="animation-delay: 1s">Already a part of the family?</h5>
					<p class="animated fadeInUp d-none d-md-block" style="animation-delay: 2s"></p>
					<p class="animated fadeInUp" style="animation-delay: 3s"><a href="login.php">Login Now</a></p>
				</div>
			</div>
		</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
	</script> 
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
	</script> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js">
	</script>
</body>
</html>
<style>
    * {
	font-family: 'Montserrat', sans-serif;
}
.carousel-item {
	height: 100vh;
	min-height: 300px;
}
.carousel-caption {
	bottom: 220px;
	z-index: 2;
}
.carousel-caption h5 {
	font-size: 45px;
	text-transform: uppercase;
	letter-spacing: 2px;
	margin-top: 25px;
}
.carousel-caption p {
	width: 60%;
	margin: auto;
	font-size: 18px;
	line-height: 1.9;
}
.carousel-caption a {
	text-transform: uppercase;
	text-decoration: none;
	background: crimson;
	padding: 5px 20px;
	display: inline-block;
	color: #fff;
	margin-top: 15px;
	border-radius: 5px;
}
.carousel-inner:before {
	content: '';
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	background: rgba(0, 0, 0, 0.6);
	z-index: 1;
}
.navbar .getstarted {
	background: crimson;
	margin-left: 30px;
	border-radius: 4px;
	font-weight: 400;
	color: #fff;
	text-decoration: none;
	padding: .5rem 1rem;
	line-height: 2.3;
}
.navbar-nav a {
	font-size: 15px;
	text-transform: uppercase;
	font-weight: 500;
}
.navbar-light .navbar-brand {
	color: #000;
	font-size: 25px;
	text-transform: uppercase;
	font-weight: 900;
	letter-spacing: 2px;
}
.navbar-light .navbar-brand span {
	color: crimson
}
.navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
	color: #000;
}
.navbar-light .navbar-nav .nav-link {
	color: #000;
}
.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
	color: #000;
}
.w-100 {
	height: 100vh;
}
.navbar-toggler {
	padding: 1px 5px;
	font-size: 18px;
	line-height: 0.3;
	background: #fff;
}
@media only screen and (max-width: 767px) {
	.navbar-nav {
		text-align: center;
	}
	.carousel-caption {
		bottom: 165px;
	}
	.carousel-caption h5 {
		font-size: 17px;
	}
	.carousel-caption a {
		padding: 10px 15px;
		font-size: 15px;
	}
	.navbar .getstarted {
		display: none;
	}
}

</style>
