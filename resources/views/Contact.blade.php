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
      <section id="banner7">
        <div class="inner">
          <header>
            <h1>Contact Us</h1>
          </header>
          <a href="#main" class="button big scrolly" style="background: black;">Click Here</a>
        </div>
      </section>

    <!-- Main -->
      <div id="main">
        <!-- Section -->
          
            <section class="wrapper style1" style="background: white;">
            <div class="inner">
              <!-- 2 Columns -->
                <div class="flex flex-2">
                  <div class="col col2">
                    <h2 style="color: #999999;">Contact Us</h2>
                    <p style="color: #999999; font-size: 28px;">"We are always happy to make new contacts"</p>
                     <p style="color: #999999;font-size: 24px; margin: 1px;">Email: replatecuisine@replatecuisine.org</p>
                      <p style="color: #999999;font-size: 24px; margin: 1px;">Contact: +91 98766 98766</p>
                      <p style="color: #999999; font-size: 24px; margin: 1px;">Find us on:</p>
                      <div class="copyright">
                      <ul class="icons">
                        <li><a href="#" class="icon fa-twitter" style="color: #999999; font-size: 24px;"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon fa-facebook" style="color: #999999; font-size: 24px;"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon fa-instagram" style="color: #999999; font-size: 24px;"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon fa-snapchat" style="color: #999999; font-size: 24px;"><span class="label">Snapchat</span></a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="col col1">
                    <div class="image fit" style="width: 400px; height: 400px;">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d383342.6612980926!2d72.60098080622183!3d19.082039058646675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e1!3m2!1sen!2sin!4v1606327912338!5m2!1sen!2sin" width="400" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                  </div>
                </div>
            </div>
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