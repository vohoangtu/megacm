<header>
    <div id="header">
        <div class="container">
            <div class="w-100 d-flex flex-wrap justify-content-center justify-content-lg-between align-items-center">
                <div id="logo">
                    <a href="/">
                        <img src="{{asset("images/logo_brighter.png")}}" alt="logo" class="img-fluid" style="width: 100px">
                    </a>
                </div>
                <div id="menu">
                    <ul class="list-unstyled d-flex justify-content-lg-end justify-content-center flex-wrap mb-0">
                        <li>
                            <a href="{{ route("home.index") }}">
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route("home.about") }}">
                                <span>About Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route("home.cleaning.whereWeServe") }}">
                                <span>Where We Serve</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route("home.services.index") }}">
                                <span>Services</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route("home.services.service", 'house-cleaning') }}">
                                        <span>House Cleaning</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route("home.services.service", 'office-cleaning') }}">
                                        Office Cleaning
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route("home.services.service", 'regular-cleaning') }}">
                                        Regular Cleaning
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route("home.services.service", 'end-of-lease-cleaning') }}">
                                        End of Lease Cleaning
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route("home.services.service", 'deep-cleaning') }}">
                                        Deep Cleaning
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route("home.services.service", 'construction-cleaning') }}">
                                        Construction Cleaning
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route("home.services.service", 'ndis-cleaning') }}">
                                        NDIS Cleaning
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route("home.services.service", 'oven-cleaning') }}">
                                        Oven Cleaning
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route("home.services.service", 'pressure-cleaning') }}">
                                        Pressure Cleaning
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route("home.services.service", 'carpet-cleaning') }}">
                                        Carpet Cleaning
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route("home.pricing.index") }}">
                                <span>Pricing</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route("home.faq.index") }}">
                                <span>FAQs</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route("home.blog.index") }}">
                                <span>BLog</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>


@section("header-background")
    <style>
        #header{
            background: url("https://www.maidforyou.com.au/wp-content/uploads/2023/01/rectangle_2.jpg");
            display: block;
            height: 400px;
            background-size: cover;
        }
    </style>
@show