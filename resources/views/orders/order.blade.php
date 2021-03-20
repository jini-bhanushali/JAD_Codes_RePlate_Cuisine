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
      <section id="banner9">
        <div class="inner">
          <header>
            <h1>Order</h1>
          </header>
          <a href="#main" class="button big scrolly" style="background: black;">Click Here</a>
        </div>
      </section>
 
    <!-- Main -->
      <div id="main">

        <!-- Section -->
          <section class="wrapper style1">
            <div class="inner">
              <!-- 2 Columns -->  
                  <div class="col col2">
                   <h2 style="text-align: center;">Order</h2>
                   </div>
                    <div class="row">
                       @foreach($donations as $donation)
                       <div class="col-md-3">
                            <div class="image fit" style="width: 270px; height: 300px;">
                              <img src="{{asset('storage/'.$donation->image)}}" alt="" style="width: 270px; height: 200px;"/>
                                <h4 style="text-align: left; margin: 0px;">{{$donation->item}}</h4>
                                <script src='https://kit.fontawesome.com/a076d05399.js'></script>
                                  <p style="padding: 0px; margin: 0px; text-align: left; font-size: 12px;">Quantity:  {{$donation->quantity}}</p>
                                <p style="padding: 0px; margin: 0px; text-align: left; font-size: 18px;">{{$donation->city}}<i class='fas fa-map-marker-alt' style='font-size:18px; padding-right: 60px;'></i>

                                <a href="{{route('order.show', $donation->id)}}" class="button" style="background: black; height: 40px; width: 80px; padding: 0px; line-height: 2.50em;">Order</a> </p>
                            </div>
                        </div>
                       @endforeach
                    </div>
               
                 
                  <!----<a href="#" class="button">Learn More</a>--->
                
              </div>
            </div>
          </section>

      </div>
                  
                  

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