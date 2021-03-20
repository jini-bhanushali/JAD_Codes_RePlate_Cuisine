<!DOCTYPE HTML>
<html>
  <head>
    <title>Re-Plate Cuisine</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
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
      <section id="banner3">
        <div class="inner">
          <header>
            <h1>Donate</h1>
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
                    <h3 style="text-align: center;">Food Details</h3>
                  </div>
                </div>
           
            <div class="inner">
              <!-- 2 Columns -->  
                  <div class="col col2">
                        <form action="{{route('donation.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Name -->
                        <div class="form-group">
                        <label for="name">Your Name:</label>
                        <input type="text"
                                value="{{old('name')}}"
                                class="form-control @error('name') is-invalid @enderror"
                                name="name" id="name">
                        @error('name')
                            <p class="text-danger" style="color:red;">{{$message}}</p>
                        @enderror
                        </div>
                        <div style="padding: 10px;"></div>
                        <!-- Email -->
                        <div class="form-group">
                        <label for="email">Your Email:</label>
                        <input type="email"
                                value="{{old('email')}}"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email" id="email">
                        @error('email')
                            <p class="text-danger" style="color:red;">{{$message}}</p>
                        @enderror
                        </div>
                         <div style="padding: 10px;"></div>
                        <!-- contact -->
                        <div class="form-group">
                        <label for="contact">Contact:</label>
                        <input type="text"
                                value="{{old('contact')}}"
                                class="form-control @error('contact') is-invalid @enderror"
                                name="contact" id="contact">
                        @error('contact')
                            <p class="text-danger" style="color:red;">{{$message}}</p>
                        @enderror
                        </div>
                         <div style="padding: 10px;"></div>
                        <!-- city -->
                        <div class="form-group">
                        <label for="city">City:</label>
                        <input type="text"
                                value="{{old('city')}}"
                                class="form-control @error('city') is-invalid @enderror"
                                name="city" id="city">
                        @error('city')
                            <p class="text-danger" style="color:red;">{{$message}}</p>
                        @enderror
                        </div>
                         <div style="padding: 10px;"></div>
                        <!-- Address -->
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <!-- <input id="address" type="hidden" name="content"> -->
                            <!-- <trix-editor input="content"></trix-editor> -->
                            <textarea class="form-control @error('address') is-invalid @enderror"
                                    name="address" id="address" rows="4">{{old('address')}}</textarea> 
                            @error('address')
                                <p class="text-danger" style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                         <div style="padding: 10px;"></div>
                         <!-- Item Name -->
                         <div class="form-group">
                        <label for="item">Item Name:</label>
                        <input type="text"
                                value="{{old('item')}}"
                                class="form-control @error('item') is-invalid @enderror"
                                name="item" id="item">
                        @error('item')
                            <p class="text-danger" style="color:red;">{{$message}}</p>
                        @enderror
                        </div>
                         <div style="padding: 10px;"></div>
                        <!--Category -->
                        <div class="form-group">
                            <label for="category[]">Category:</label>
                            <select name="category[]" id="category" class="form-control select2">
                                    <option value="basic">Basic</option>
                                    <option value="advance">Advance</option>
                                    <option value="special">Special</option>
                            </select>
                            @error('category')
                                <p class="text-danger" style="color:red;">{{$errors->first('tags')}}</p>
                            @enderror    
                        </div>
                         <div style="padding: 10px;"></div>
                        <!-- quantity -->
                        <div class="form-group">
                        <label for="quantity">Quantity(In terms of Plates Eg:2):</label>
                        <input type="text"
                                value="{{old('quantity')}}"
                                class="form-control @error('quantity') is-invalid @enderror"
                                name="quantity" id="quantity">
                        @error('quantity')
                            <p class="text-danger" style="color:red;">{{$message}}</p>
                        @enderror
                        </div>
                         <div style="padding: 10px;"></div>
                    <!-- Expiry Date -->
                    <div class="form-group">
                        <label for="expiry">Expiry Date:</label>
                        <input type="date"
                                value="{{old('expiry')}}"
                                class="form-control"
                                name="expiry" id="expiry" style="border-color: black; border-radius: 5px;">
                                @error('expiry')
                            <p class="text-danger" style="color:red;">{{$message}}</p>
                        @enderror
                    </div>
                     <div style="padding: 10px;"></div>
                    <!-- comment -->
                      <div class="form-group">
                              <label for="comment">Comment:</label>
                            <!-- <input id="address" type="hidden" name="content"> -->
                            <!-- <trix-editor input="content"></trix-editor> -->
                            <textarea class="form-control @error('comment') is-invalid @enderror"
                                    name="comment" id="comment" rows="4">{{old('comment')}}</textarea> 
                            @error('comment')
                                <p class="text-danger" style="color:red;">{{$message}}</p>
                            @enderror
                    </div>
                     <div style="padding: 10px;"></div>
                    <!-- image -->
                    <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file"
                            value="{{old('image')}}"
                            class="form-control @error('image') is-invalid @enderror"
                            name="image" id="image">
                    @error('image')
                        <p class="text-danger" style="color:red;">{{$message}}</p>
                    @enderror
                    </div>
                     <div style="padding: 10px;"></div>
                    <h3 style="margin-bottom: 0px;">Terms and Conditions</h3>
                          <p style="padding: 0px; margin: 0px;">*The food should be untouched.</p>
                          <p style="padding: 0px; margin: 0px;">*Condition of the food should be proper.</p>
                          <p style="padding: 0px; margin: 0px;">*Expiry date should be mentioned.</p>
                          <p style="padding: 0px; margin: 0px;">*No inner transaction should be conducted between the two parties.</p>
                          <p style="padding: 0px; margin: 0px;">*No money should be involved. It should be solely for donation purpose.</p>

                    <div class="form-group" style="padding-top:30px;">
                        <button class="btn btn-secondary" type="submit" style="background: black;">Donate</button>
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
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
      <script src="assets/js/main.js"></script>
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