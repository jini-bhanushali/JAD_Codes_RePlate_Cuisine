<!-- Nav -->
<nav id="menu">
        <ul class="links">

          <li class="dropdown">
          @if (!Auth::guest())
            <a href="/" class="dropbtn">{{ Auth::user()->name }}</a>
           @else
          <a href="/login" class="dropbtn">Login/Sign Up</a>
           @endif 
            <div class="dropdown-content">
              <a class="dropdown-item" href="/home" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a>
                                    <form id="logout-form" style="margin: 0px; padding: 0px;" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
            </div>
          <li><a href="/home">Home</a></li>
          
          <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">About</a>
            <div class="dropdown-content">
             <a href="/vission_mission">Vision & Mission</a>
              <a href="/mob">Members on Board</a>
              <a href="/faq">FAQs</a>
              <!-- <a href="/faq">FAQs</a> -->
            </div>
            <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Services</a>
            <div class="dropdown-content">
              <a href="/cts">Celebrate to Share</a>
              <a href="/places">Places</a>
            </div>
          <li><a href="{{route('donation.index')}}">Donate</a></li>
          <li><a href="{{route('order.index')}}">Order</a></li>
          
          <li><a href="/contact">Contact</a></li>
        </ul>
      </nav>
