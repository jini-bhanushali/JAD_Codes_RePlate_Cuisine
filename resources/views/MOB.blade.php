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
			<section id="banner2">
				<div class="inner">
					<header>
						<h1>Members on Board</h1>
						<a href="#main" class="button big scrolly" style="background: black;">Know Us</a>
					</header>
				</div>
			</section>

		<!-- Main -->
			<div id="main">

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<!-- 2 Columns -->
								<div class="flex flex-2">
									<div class="col col1">
										<div class="image round fit" style="width: 250px; height: 250px;">
											<a href="generic.html" class="link"><img src="images/dharita.jpeg" alt="" style="width: 250px; height: 250px;"/></a>
										</div>
									</div>
									<div class="col col2">
										<h3>Dharita Desai</h3>
										<p style="text-align: justify;">The sharp increase in the amount of wastage in terms of food makes the need for charity in terms of donation. In the current scenario food is being wasted daily on a large basis in different restaurants, weddings, social functions, college canteens and many other social events.We have created a platform where People can donate extra food from their household, restaurants, events, parties etc. On the other hand, NGOs, old age homes, orphanages etc can order this food based on the availability.</p>
										
									</div>
								</div>
						</div>
						<div style="padding: 20px"></div>
						<div class="inner">
							<!-- 2 Columns -->
								<div class="flex flex-2">
									<div class="col col2">
										<h3>Jini Bhanushali</h3>
										<p style="text-align: justify;">As we all know the scarcity of food around the world whereas on the other hand one-third of the world’s food ends up in landfills,to minimize these two problems we came up with the idea of an excessive food listing portal. The way we reuse and recycle similarly now we will replate food.Re:Plate Cuisine turns average eaters into food heroes. We arrange communication between food donors and charities. We aim to reach out to as many people as possible on a daily basis.</p>
										
									</div>

									<div class="col col1">
										<div class="image round fit" style="width: 250px; height: 250px;">
											<a href="generic.html" class="link"><img src="images/jini.jpeg" alt="" style="width: 250px; height: 250px;"/></a>
										</div>
									</div>
								</div>
						</div>
						<div style="padding: 20px"></div>
						<div class="inner">
							<!-- 2 Columns -->
								<div class="flex flex-2">
									<div class="col col1">
										<div class="image round fit" style="width: 250px; height: 250px;">
											<a href="generic.html" class="link"><img src="images/aayushi.jpeg" alt="" style="width: 250px; height: 250px;" /></a>
										</div>
									</div>
									<div class="col col2">
										<h3>Aayushi Bhimani</h3>
										<p style="text-align: justify;">The basic idea behind all this is to inspire thoughtful consumption of food before its expiration date and combines the topics of food safety and food waste to enable a transparent food system.We are an online platform that bridges the gap between hunger and surplus food. We are an online platform that bridges the gap between hunger and surplus food.</p>
										
									</div>
								</div>
						</div>
						
				</section>

			</div>
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