<!DOCTYPE HTML>
<html>
	<head>
		<title>Re-Plate Cuisine</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<style>
li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: left;
  padding: 0px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: darkgrey;
}



.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="{{route('home')}}">Re-Plate <span> Cuisine</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			  @extends ('Navbar')

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Re-Plate Cuisine</h1>
						<p>"We bridge the gap between hunger and excess food!"</p>
						<a href="{{route('donation.index')}}" class="button big scrolly" style="background: black;">Donate</a> 
						<a href="{{route('order.index')}}" class="button big scrolly" style="background: black;">Order</a>
					</header>
				</div>
			</section>

		<!-- Main -->
			<div id="main">

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<!-- 2 Columns -->
									<div class="col col2">
										<h2 style="text-align: center;">How we work?</h2>
										<p style="margin: 0px">We are an online platform that bridges the gap between hunger and surplus food. We have created a platform where People can donate extra food from their household, restaurants, events, parties etc. On the other hand, NGOs, old age homes, orphanages etc can order this food based on the availability. This way a communication is created between the two clients. We make sure that the food donated is of good quality and an expiration date is mentioned by the donor the consumer has place an order within this time only. Like reuse and recycle we believe in replate.
										</p>
										<a href="/about" style="color: navy-blue;">Know more--></a>
									</div>
								</div>
						</div>
					</section>

				<!-- Section -->
					<section class="wrapper style1" style="padding-top: 1px;">
						<div class="inner">
							<div class="flex flex-3">
								<div class="col align-center"   style="display:flex; flex-direction:column;  align-items:center">
									<div class="image round fit" style="width: 250px; height: 250px;">
										<img src="images/quality_check.jpg" alt="" style="width: 250px; height: 250px;"/>
									</div>
									<h3>Quality Check</h3>
								</div>
								<div class="col align-center"  style="display:flex; flex-direction:column;  align-items:center">
									<div class="image round fit" style="width: 250px; height: 250px;">
										<img src="images/call_us.jpg" alt="" style="width: 250px; height: 250px;"/>
									</div>
									<h3>Call Us</h3>
								</div>
								<div class="col align-center"  style="display:flex; flex-direction:column;  align-items:center">
									<div class="image round fit" style="width: 250px; height: 250px;">
										<img src="images/location.jpg" alt="" style="width: 250px; height: 250px;"/>
									</div>
									<h3>Locate</h3>
									<!----<a href="#" class="button">Learn More</a>--->
								</div>
							</div>
						</div>
					</section>

			</div>

<!-- Section -->
					<section class="wrapper style2" style="background: black;">
						<div class="inner">
								<div>
									<h3 style="text-align: center;">What can we do together?</h3>
									<p>Together we can make sure no one is hungry. We can consciously see to it that we don’t waste any food rather donate it to the ones who need it. We can spread awareness in people and spread this idea to every individual because even a lite bite counts. From small scale to large if everyone donates their excess food, we are sure that no one has to sleep hungry. We can work together to reduce food wastage to a level where there is no wastage of food anymore. This way even the NGOs and organisations can use their funds for educating the needy if they can arrange food through this. So let’s stand together and bridge this gap between surplus food and hunger.</p>
									
								</div>
							</div>
						</div>
					</section>

			<!-- Section -->

					<section class="wrapper style1">
						<div class="inner">
							<header class="align-center"  style="display:flex; flex-direction:column;  align-items:center">
								<h2>Categories</h2>
							</header>
							<div class="flex flex-3">
								<div class="col align-center"  style="display:flex; flex-direction:column;  align-items:center">
									<div class="image fit" style="width: 250px; height: 250px;">
										<img src="images/basic.jpg" alt="" style="width: 250px; height: 250px;" />
										
									</div>
									<h3>Basic</h3>
									<p style="text-align: justify;">Basic level certification are meant for food business operators and as well as for food science background students. Duration of each course is of 4 hours. Course are: –
									Street Food Vending
									Catering
									Manufacturing / Processing
									Storage & Transport
									Retail & Distribution
									</p>
								</div>
								<div class="col align-center"  style="display:flex; flex-direction:column;  align-items:center">
									<div class="image fit" style="width: 250px; height: 250px;">
										<img src="images/advance.jpg" alt="" style="width: 250px; height: 250px;"/>
										
									</div>
									<h3>Advance</h3>
									<p style="text-align: justify;">Advance level certification are meant for State & Central Licensed food business and as well as for food science background students. Duration of each course is 8 hours. Course are: –
									Catering
									Manufacturing / Processing
									Storage & Transport
									Retail & Distribution
									 </p>
								</div>
								<div class="col align-center"  style="display:flex; flex-direction:column;  align-items:center">
									<div class="image fit" style="width: 250px; height: 250px;">
										<img src="images/special.jpg" alt="" style="width: 250px; height: 250px;"/>
									</div>
									<h3>Special</h3>
									<p style="text-align: justify;">Special course have been developed for high risk food business. Duration of special course is 8-12 hours. Spread over 1-2 days. Course are: –
									Milk & Milk Products
									Meat & Poultry
									Fish & Sea Food
									Packaged Water
									Bakery (Level 1)
									Bakery (Level 2)
									Edible Oil and Fat
									Health Supplement
									 </p>
								</div>
							</div>
						</div>
					</section>
					<!-- Section -->

		<!----Footer----->

		<section id="footer" style="background: black;">
				<div class="inner">
					<header>
						<h2 style="color: grey;">Get in Touch</h2>
					</header>
					<form method="post" action="#">
						<div class="field half first">
							<label for="name" style="color: grey;">Name</label>
							<input type="text" name="name" id="name" style="background: grey; border-color: red; border-width: 3px;"/>
							<div style="padding: 10px;"></div>
						</div>
						<div class="field half">
							<label for="email" style="color: grey;">Email</label>
							<input type="text" name="email" id="email" style="background: grey; border-color: red; border-width: 3px;"/>
						</div>
						<div style="padding: 10px;"></div>
						<div class="field">
							<label for="message" style="color: grey;">Message</label>
							<textarea name="message" id="message" rows="6" style="background: grey; border-color: red; border-width: 3px;"></textarea>
						</div>
						<div style="padding: 20px;"></div>
						<ul class="actions">
							<li><input type="submit" value="Send Message" class="alt" style="background: red;border-color: red; border-width: 3px;"/></li>
						</ul>
					</form>
				</div>
				<footer id="footer" style="padding-top: 10px;">
				<div class="copyright">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
					</ul>
					<p>&copy; Untitled. All rights reserved. Design: <a href="https://templated.co">Re-Plate Cuisine</a>. Images: <a href="https://unsplash.com">Unsplash</a>.</p>
				</div>
			</footer>
			</section>

		<!----Footer----->
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>