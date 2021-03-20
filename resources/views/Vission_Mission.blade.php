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

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 950px;
  height: 75px;
  border-radius: 15px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 1px 16px;
}
</style>
  <body>

    <!-- Header -->
      <header id="header" class="alt">
        <div class="logo"><a href="index.html">Re-Plate <span> Cuisine</span></a></div>
        <a href="#menu">Menu</a>
      </header>

    <!-- Nav -->
        @extends ('Navbar')

    <!-- Banner -->
      <section id="banner1">
        <div class="inner">
          <header>
            <h1>Vission & Mission</h1>
          </header>
          <a href="#main" class="button big scrolly" style="background: black;">Learn More</a>
        </div>
      </section>

    <!-- Main -->
      <div id="main">

        <!-- Section -->
          <section class="wrapper style1">
            <div class="inner">
              <!-- 2 Columns -->  
                  <div class="col col2">
                    <h2 style="text-align: center;">Vision</h2>
                    <div class="card">
                      <div class="container">
                        <p style="margin: 0px; padding: 10px; color: #626262;">One-third of the world’s food ends up in landfills, while almost a billion people around the globe are hungry.Re:Plate Cuisine turns average eaters into food heroes.</p> 
                      </div>
                    </div>
                    <div style="padding: 10px;"></div>
                     <div class="card">
                      <div class="container">
                        <p style="margin: 0px; padding: 10px; color: #626262;">We fight food insecurity by connecting food donors with hunger relief organizations.We aim at reducing food waste and eliminates last-minute wastage of restaurant food.</p> 
                      </div>
                    </div>
                    <div style="padding: 10px;"></div>
                     <div class="card">
                      <div class="container">
                        <p style="margin: 0px; padding: 20px; color: #626262;">We arrange efficient communication between food donors and charities.</p> 
                      </div>
                    </div>
                    <div style="padding: 10px;"></div>
                     <div class="card">
                      <div class="container">
                        <p style="margin: 0px; padding: 10px; color: #626262;">We aim to inspire thoughtful consumption of food before its expiration date and combines the topics of food safety and food waste to enable a transparent food system.</p> 
                      </div>
                    </div>
                    <div style="padding: 10px;"></div>
                     <div class="card">
                      <div class="container">
                        <p style="margin: 0px; padding: 20px; color: #626262;">Like reuse and recycle we believe in replate.</p> 
                      </div>
                    </div>
                  </div>
                </div>
       

            <!-- Section -->
          <section class="wrapper style1">
            <div class="inner">
              <!-- 2 Columns -->  
                  <div class="col col2">
                    <h2 style="text-align: center;">Mission</h2>
                    <div class="card">
                      <div class="container">
                        <p style="margin: 0px; padding: 10px; color: #626262;">One-third of the world’s food ends up in landfills, while almost a billion people around the globe are hungry.Re:Plate Cuisine turns average eaters into food heroes.</p> 
                      </div>
                    </div>
                    <div style="padding: 10px;"></div>
                     <div class="card">
                      <div class="container">
                        <p style="margin: 0px; padding: 10px; color: #626262;">We fight food insecurity by connecting food donors with hunger relief organizations.We aim at reducing food waste and eliminates last-minute wastage of restaurant food.</p> 
                      </div>
                    </div>
                    <div style="padding: 10px;"></div>
                     <div class="card">
                      <div class="container">
                        <p style="margin: 0px; padding: 20px; color: #626262;">We arrange efficient communication between food donors and charities.</p> 
                      </div>
                    </div>
                    <div style="padding: 10px;"></div>
                     <div class="card">
                      <div class="container">
                        <p style="margin: 0px; padding: 10px; color: #626262;">We aim to inspire thoughtful consumption of food before its expiration date and combines the topics of food safety and food waste to enable a transparent food system.</p> 
                      </div>
                    </div>
                    <div style="padding: 10px;"></div>
                     <div class="card">
                      <div class="container">
                        <p style="margin: 0px; padding: 20px; color: #626262;">Like reuse and recycle we believe in replate.</p> 
                      </div>
                    </div>
                  </div>
                </div>
       </section>
     </section>
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
