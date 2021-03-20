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
        <div class="logo"><a href="index.html">Re-Plate <span> Cuisine</span></a></div>
        <a href="#menu">Menu</a>
      </header>

    <!-- Nav -->
    @extends ('Navbar')

    <!-- Banner -->
      <section id="banner4">
        <div class="inner">
          <header>
            <h1>Frequently Asked Questions</h1>
          </header>
          <a href="#main" class="button big scrolly" style="background: black;">Know More</a>
        </div>
      </section>

    <!-- Main -->
      <div id="main">

        <!-- Section -->
          <section class="wrapper style1">
            <div class="inner">
              <!-- 2 Columns -->  
                  <div class="col col2">
                    <h2 style="text-align: center;">FAQs</h2>
                  </div>
                  <div class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn" style="text-align: left;"><h4>What is Re:plate Cuisine?</h4></a>
                    <div class="dropdown-content">
                     <a href="#1">Re:plate Cuisine is an excessive food listing portal. It  turns average eaters into food heroes.We fight food insecurity by connecting food donors with hunger relief organizations.We aim to redistribute surplus food to those who are in need of it.Like reuse and recycle we believe in replate.Re:Plate cuisine encourages to donate food (Consumption) before it’s expiration this way we will improve our food cycle with a proper food waste management.</a>
                    </div>
                  </div>

                  <div class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn" style="text-align: left;"><h4>How is Re:plate different from others?</h4></a>
                    <div class="dropdown-content">
                     <a href="#1">Re:plate is a complete donation based website. We aim for no profit in terms of money. Our only goal is to save food and give this basic necessity to the ones who deserve it and are not in a good state to have it on their own.</a>
                    </div>
                  </div>

                  <div class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn" style="text-align: left;"><h4>How did it start? </h4></a>
                    <div class="dropdown-content">
                     <a href="#1">It was a random thought . Watching people not even having a basic meal moved us and we decided that we have to do something for them. On our visits to ngos we were sad to see their state too. Their everyday fight to arrange food was very disturbing . On the other hand a lot of food is wasted everyday in parties , restaurants , events , weddings etc. This gave us an idea why not connect these two things and solve the problem. This gave birth to Re:Plate Cuisine.</a>
                    </div>
                  </div>

                  <div class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn" style="text-align: left;"><h4>Why is food recovery important?</h4></a>
                    <div class="dropdown-content">
                     <a href="#1">Throwing away food benefits no one.  the food  could have gone to someone in need.Just because it’s easier doesn’t mean it’s better! There are tons of people out there in need of a meal, and by giving to them rather than the trashcan, you are building up some major good karma.On top of that, you’ll be improving the environment and providing people with meaningful work: it’s an easy way for corporates and businesses to give back to their community.</a>
                    </div>
                  </div>

                  <div class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn" style="text-align: left;"><h4>What kind of food do we accept?</h4></a>
                    <div class="dropdown-content">
                     <a href="#1">We accept any kind of food, we just need to know details concerning food type, like if its raw or cooked, packaged, hot or cold, and how much there is.We make sure that food is in good condition.</a>
                    </div>
                  </div>

                  <div class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn" style="text-align: left;"><h4>Do you have a question that wasn’t answered here?</h4></a>
                    <div class="dropdown-content">
                     <a href="#1">Shoot us an email at replatecuisine@replatecuisine.org , Reach us in our helpline 90377 90377</a>
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