<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light ">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <a class="navbar-brand" href="#"><img src="images/logo.png" alt="img" class="mobile_logo_width"/></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('frontsite.home')}}">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item blog">
                        <a class="nav-link" href="{{route('frontsite.product')}}">Our Products
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item single">
                        <a class="nav-link" href="{{route('frontsite.about')}}">About Us <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item contact">
                        <a class="nav-link" href="{{route('frontsite.contact')}}">Contact Us <span class="sr-only">(current)</span></a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Login <span
                                    class="sr-only">(current)</span></a>
                        </li>
                    @endguest
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('dashboard.home')}}">Dashboard <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('logout')}}">Logout <span class="sr-only">(current)</span></a>
                        </li>
                    @endauth
                    {{-- <li class="nav-item dropdown">--}}
                    {{-- <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"--}}
                    {{-- aria-haspopup="true" aria-expanded="false">World <span class="sr-only">(current)</span></a>--}}
                    {{-- <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">--}}
                    {{-- <a class="dropdown-item" href="#">Action in</a>--}}
                    {{-- <a class="dropdown-item" href="#">Another action</a>--}}
                    {{-- <a class="dropdown-item" href="#">Something else here</a>--}}
                    {{-- </div>--}}
                    {{-- </li>--}}
                    {{-- <li class="nav-item dropdown">--}}
                    {{-- <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton3" data-toggle="dropdown"--}}
                    {{-- aria-haspopup="true" aria-expanded="false">Community<span class="sr-only">(current)</span></a>--}}
                    {{-- <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">--}}
                    {{-- <a class="dropdown-item" href="#">Action in</a>--}}
                    {{-- <a class="dropdown-item" href="#">Another action</a>--}}
                    {{-- <a class="dropdown-item" href="#">Something else here</a>--}}
                    {{-- </div>--}}
                    {{-- </li>--}}
                </ul>
            </div>
        </nav>
    </div>
</div>
