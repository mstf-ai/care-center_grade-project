<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
    <a href="/" class="navbar-brand p-0 text-decoration-none">
        <i>
            <img class="fa bg-white"
                style="display:inline-block; width:90px; border-radius: 100px; border: #0ad 3px solid;" 
                src="{{ Voyager::image(setting('site.logo')) }}"
                alt="">
        </i>

        <i class="h2"
            style="border-radius: 10px; margin: 0 0 0 25px ; color:#0ac; 10px; border-top:#fa7510 3px solid; border-left:#fa7510 3px solid;">{{setting('site.title_first')}}</i>
        <span class="h2"
            style="color: #fa7510; border-radius: 10px; margin-left: 5px; border-bottom: #0ad 3px solid; border-right: #0ad 3px solid; padding-right:3px;">{{setting('site.title_last')}}</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="/" class="nav-item nav-link ">Home</a>
            <a href="about" class="nav-item nav-link">About</a>
            <a href="service" class="nav-item nav-link">Service</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="price" class="dropdown-item">Pricing Plan</a>
                    <a href="team" class="dropdown-item">Our Nutritionists</a>
                    <a href="report" class="dropdown-item">Feedback</a>
                </div>
            </div>
            <a href="contact" class="nav-item nav-link">Contact</a>
        </div>
        <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i
                class="fa fa-search"></i></button>
        @guest
            <a href="Register" class="btn btn-success py-2 rounded-3">Sign Up</a>
            <a href="login" class="btn btn-warning py-2 px-4 ms-3 rounded-3">login</a>
        @else
            <a href="appointment" class="btn btn-success py-2 rounded-3">Make Appointment</a>

            <div class="action">
                <div class="profile" onclick="menuToggle();">
                    <img src="{{ Voyager::image(Auth::user()->avatar) }}" />
                </div>
                <div class="menu">
                    <h3>{{ Auth::user()->name }}</h3>
                    <ul>
                        <li>
                            <img src="img/user.png" /><a href="profile">My profile</a>
                        </li>
                        <li>
                            <img src="img/edit.png" /><a href="#">Edit profile</a>
                        </li>
                        {{-- <li>
                            <img src="img/envelope.png" /><a href="#">Inbox</a>
                        </li> --}}
                        <li>
                            <img src="img/question.png" /><a href="help">Help</a>
                        </li>
                        <li>
                            <img src="img/log-out.png" /><a href=""
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </div>
            </div>
        @endguest
    </div>
</nav>
<!-- Navbar End -->
