<!DOCTYPE HTML>
<html>
  <head>
    <title>Re-Plate Cuisine</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


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
                    <h2 style="text-align: center;">Food Details</h2>
                  </div>
                </div>
           
            <div class="inner">

            <h3  style="color: red;">Donation Details</h3>
           <div class="row">
            <div class="col-md-6"> 
            <label style="font-size: 1.2rem; color: black; margin-botton:0!important;">Food Item : {{$details->item}}</label>
            <label style="font-size: 1.2rem; color: black; margin-botton:0!important;">Quantity : {{$details->quantity}}</label>
            <label style="font-size: 1.2rem; color: black; margin-botton:0!important;">Validity Period : {{$details->expiry}}</label>
              <label style="font-size: 1.2rem; color: black; margin-botton:0!important;">Address : {{$details->address}}</label>
            </div>
            <div class="col-md-6"> 
           <label style="font-size: 1.2rem; color: black; margin-botton:0!important;">Donated By : {{$details->name}}</label>
           <label style="font-size: 1.2rem; color: black; margin-botton:0!important;">Email Id : {{$details->email}}</label>
            <label style="font-size: 1.2rem; color: black; margin-botton:0!important;">Contact no : {{$details->contact}}</label>

            </div>
           </div>



              <!-- 2 Columns -->  
                  <div class="col col2">
                  <form action="{{route('order.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" value="{{$details->id}}" name="donation_id">
                        <!-- Name -->
                        <div class="form-group">
                        <label for="orgname">Organization Name:</label>
                        <input type="text"
                                value="{{old('orgname')}}"
                                class="form-control @error('orgname') is-invalid @enderror"
                                name="orgname" id="orgname">
                        @error('orgname')
                            <p class="text-danger" style="color:red;">{{$message}}</p>
                        @enderror
                        </div>
                         <div style="padding: 10px;"></div>
                        <!-- Email -->
                        <div class="form-group">
                        <label for="orgemail">Organization Email:</label>
                        <input type="email"
                                value="{{old('orgemail')}}"
                                class="form-control @error('orgemail') is-invalid @enderror"
                                name="orgemail" id="orgemail">
                        @error('orgemail')
                            <p class="text-danger" style="color:red;">{{$message}}</p>
                        @enderror
                        </div>
                         <div style="padding: 10px;"></div>
                        <!-- contact -->
                        <div class="form-group">
                        <label for="orgcontact">Organization Contact:</label>
                        <input type="text"
                                value="{{old('orgcontact')}}"
                                class="form-control @error('orgcontact') is-invalid @enderror"
                                name="orgcontact" id="orgcontact">
                        @error('orgcontact')
                            <p class="text-danger" style="color:red;">{{$message}}</p>
                        @enderror
                        </div>

                        <div style="padding: 10px;"></div>
                        <div class="form-group">
                        <label for="quantity">Quantity:</label>
                        <input type="text"
                                value="{{old('quantity')}}"
                                class="form-control @error('quantity') is-invalid @enderror"
                                name="quantity" id="quantity">
                        @error('quantity')
                            <p class="text-danger" style="color:red;">{{$message}}</p>
                        @enderror
                        </div>

                        <div style="padding: 10px;"></div>
                        <h3 style="margin-bottom: 0px;">Terms and Conditions</h3>
                          <p style="padding: 0px; margin: 0px;">*Order has to be picked up from the address mentioned.</p>
                          <p style="padding: 0px; margin: 0px;">*Order has to be placed only by NGOs.</p>
                          <p style="padding: 0px; margin: 0px;">*The food collected is to be strictly distributed to the needy and should not be used for personal use.</p>
                          <p style="padding: 0px; margin: 0px;">*No money should be involved. It should be solely for donation purpose.</p>
                          <p style="padding: 0px; margin: 0px;">*No inner transaction should be conducted between the two parties.</p>
                          <p style="padding: 0px; margin: 0px;">*The food should be given to the needy within the expiry time.</p>
                    <div class="form-group" style="padding-top:10px;">
                        <button class="btn btn-secondary" type="submit" style="background: black;">Order</button>
                    </div>
                        </form>
                  </div>
            </div>
</section>
 <div style="padding: 10px;"></div>

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
      <script src="../assets/js/jquery.min.js"></script>
      <script src="../assets/js/jquery.scrolly.min.js"></script>
      <script src="../assets/js/jquery.scrollex.min.js"></script>
      <script src="../assets/js/skel.min.js"></script>
      <script src="../assets/js/util.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
      <script src="../assets/js/main.js"></script>
      <script>
        flatpickr("#expiry", {
            enableTime: true
        });
        $(document).ready(function(){
            $('.select2').select2();
        });
    </script>
  </body>
</html>








<!-- <form action="{{route('order.store')}}" method="POST" > -->
                       
                        <!-- <input type="hidden" value="{{$details->id}}"> -->
                        <!-- Name -->
                        <!-- <div class="form-group">
                        <label for="orgname">Organization Name:</label>
                        <input type="text"
                                value="{{old('orgname')}}"
                                class="form-control @error('orgname') is-invalid @enderror"
                                name="orgname" id="orgname">
                        @error('orgname')
                            <p class="text-danger" style="color:red;">{{$message}}</p>
                        @enderror
                        </div> -->

                         <!-- Email -->
                         <!-- <div class="form-group">
                        <label for="orgemail">Organization Email:</label>
                        <input type="email"
                                value="{{old('orgemail')}}"
                                class="form-control @error('orgemail') is-invalid @enderror"
                                name="orgemail" id="orgemail">
                        @error('orgemail')
                            <p class="text-danger" style="color:red;">{{$message}}</p>
                        @enderror
                        </div> -->

                        <!-- contact -->
                        <!-- <div class="form-group">
                        <label for="orgcontact">Organization Contact:</label>
                        <input type="text"
                                value="{{old('orgcontact')}}"
                                class="form-control @error('orgcontact') is-invalid @enderror"
                                name="orgcontact" id="orgcontact">
                        @error('orgcontact')
                            <p class="text-danger" style="color:red;">{{$message}}</p>
                        @enderror
                        </div> -->

                        <!-- <div class="form-group" style="padding-top:30px;">
                        <button type="submit" class="btn btn-primary"> Submit </button>
                         </div>
                    </form> -->