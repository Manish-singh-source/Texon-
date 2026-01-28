<!DOCTYPE html>
<html lang="zxx">


<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    @yield('meta')
    <!-- Page Title -->
    <title>@yield('title', 'Texon - Corporation')</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets1/img/favicon.png') }}">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&amp;display=swap" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets1/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="{{ asset('assets1/css/slicknav.min.css') }}" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('assets1/css/swiper-bundle.min.css') }}">
    <!-- Animated Css -->
    <link href="{{ asset('assets1/css/animate.css') }}" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="{{ asset('assets1/css/magnific-popup.css') }}">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="{{ asset('assets1/css/mousecursor.css') }}">
    <!-- Main Custom Css -->
    <link href="{{ asset('assets1/css/custom.css') }}" rel="stylesheet" media="screen">
    <!-- FontAwesome 5 Free CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.5/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3BV7JS6E3F"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3BV7JS6E3F');
</script>


    <style>
        .search-dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            max-height: 300px;
            overflow-y: auto;
            z-index: 1000;
            display: none;
        }
        .search-item {
            display: flex;
            align-items: center;
            padding: 10px;
            cursor: pointer;
            border-bottom: 1px solid #f0f0f0;
        }
        .search-item:hover {
            background: #f8f9fa;
        }
        .search-thumb {
            width: 40px;
            height: 40px;
            object-fit: cover;
            margin-right: 10px;
            border-radius: 4px;
        }
        .search-item span {
            flex: 1;
        }
        .search-item mark {
            background: #fff3cd;
            padding: 2px 4px;
            border-radius: 2px;
        }
        .search-loader, .no-results {
            padding: 10px;
            text-align: center;
            color: #666;
        }
        .search-loader {
            font-style: italic;
        }
        .no-results {
            color: #999;
        }
        .search-form {
            position: relative;
        }
    </style>




</head>

<body>
    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{ asset('assets1/img/logo.png') }}" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item active"><a class="nav-link" href="{{route('home')}}">Home</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{route('about-us')}}">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('category')}}">Portfolio</a></li>

                                <!-- <li class="nav-item submenu"><a class="nav-link" href="javascript:void(0);">Products</a>
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="category.php">Engineering </a></li>
                                        <li class="nav-item"><a class="nav-link" href="category.php">Life Science </a></li>
                                    </ul>
                                </li> -->
                                <li class="nav-item"><a class="nav-link" href="{{route('contact-us')}}">Contact Us</a>
                                </li>
                                <li class="nav-item mobile-search">
                                    <h5>Search Here</h5>
                                    <form class="search-form">
                                        <input type="text" id="mobile-search-input" placeholder="Search..." class="search-input">
                                        <button type="button" class="search-btn"> <img src="{{asset('assets1/img/search.png')}}"
                                                alt="">
                                        </button>
                                        <div class="search-dropdown" id="mobile-search-dropdown"></div>
                                    </form>
                                </li>
                            </ul>
                        </div>

                        <!-- Header Search Start -->
                        <div class="header-search">
                            <form class="search-form">
                                <input type="text" id="desktop-search-input" placeholder="Search..." autocomplete="off" class="search-input">
                                <button type="button" class="search-btn"> <img src="{{asset('assets1/img/search.png')}}" alt="">
                                </button>
                                <div class="search-dropdown" id="desktop-search-dropdown"></div>
                            </form>
                        </div>
                        <!-- Header Search End -->

                        <!-- Header Btn Start -->
                        <div class="header-btn">
                            <a class="btn-default" href="{{route('request-a-quote')}}">Request a Quote</a>
                        </div>
                        <!-- Header Btn End -->
                    </div>
                    <!-- Main Menu End -->
                    <div class="navbar-toggle"></div>
                </div>
            </nav>
            <div class="responsive-menu"></div>
        </div>
    </header>
    <!-- Header End -->

    @yield('content')

    <!-- Footer Start -->
    <footer class="main-footer">
        <!-- Footer Scrolling Ticker Box Start -->
        <div class="footer-scrolling-ticker-box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Footer Scrolling Ticker Start -->
                        <div class="footer-scrolling-ticker">
                            <!-- Scrolling Ticker Box Start -->
                            <div class="scrolling-ticker-box">
                                <!-- Scrolling Ticker Content Start -->
                                <div class="scrolling-content">
                                    <span><img src="{{ asset('assets1/images/icon-asterisk.svg') }}" alt=""> Let's Work Together</span>
                                    <span><img src="{{ asset('assets1/images/icon-asterisk.svg') }}" alt=""> Let's Work Together</span>
                                    <span><img src="{{ asset('assets1/images/icon-asterisk.svg') }}" alt=""> Let's Work Together</span>
                                    <span><img src="{{ asset('assets1/images/icon-asterisk.svg') }}" alt=""> Let's Work Together</span>
                                </div>
                                <!-- Scrolling Ticker Content End -->

                                <!-- Scrolling Ticker Content Start -->
                                <div class="scrolling-content">
                                    <span><img src="{{ asset('assets1/images/icon-asterisk.svg') }}" alt=""> Let's Work Together</span>
                                    <span><img src="{{ asset('assets1/images/icon-asterisk.svg') }}" alt=""> Let's Work Together</span>
                                    <span><img src="{{ asset('assets1/images/icon-asterisk.svg') }}" alt=""> Let's Work Together</span>
                                    <span><img src="{{ asset('assets1/images/icon-asterisk.svg') }}" alt=""> Let's Work Together</span>
                                </div>
                                <!-- Scrolling Ticker Content End -->
                            </div>
                            <!-- Scrolling Ticker Box End -->

                            <!-- Footer Contact Button Start -->
                            <!-- <div class="footer-contact-btn">
                              <a href="contact-us.php" class="schedule-btn">Contact Us <img src="assets1/images/arrow-white.svg"
                                      alt=""></a>
                          </div> -->
                            <!-- Footer Contact Button End -->
                        </div>
                        <!-- Footer Scrolling Ticker End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Scrolling Ticker Box End -->

        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <img src="{{ asset('assets1/img/footer.png') }}" alt="">
                        </div>
                        <!-- Footer Logo End -->

                        <!-- About Footer Content Start -->
                        <div class="about-footer-content">
                            <p>We "Texon Corporation" are Sole Proprietorship based firm, engaged as the foremost
                                Manufacturer, Trader and service providers of sensors, systems and software</p>
                        </div>
                        <div class="pt-30">
                            <div class="post-social-sharing wow fadeInUp  " data-wow-delay="0.5s">
                                <ul>
                                    <li><a href="https://www.instagram.com/texon_corporation/?hl=en" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="https://in.linkedin.com/company/texoncorporation" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="https://www.youtube.com/@texoncorporation" target="_blank"><i class="fa-brands fa-youtube" ></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- About Footer Content End -->
                    </div>
                    <!-- About Footer End -->
                </div>

                <!-- <div class="col-xl-3 col-md-6">
                  
                  <div class="footer-location footer-links">
                      <h3>Our Location</h3>
                      <p></p>
                  </div>
                  
              </div> -->

                <div class="col-xl-3 col-md-6">
                    <!-- Footer Contact Start -->
                    <div class="footer-contact footer-links no-select">
                        <h3>Contact Information</h3>
                        <ul>
                            <li><a href="tel:+919769606708">+91 9769 60 6708</a></li>
                            <li><a href="mailto:admin@texon-corporation.com">admin@texon-corporation.com</a></li>
                            <li><a href="javascript:void(0)">1st Floor, 107, Building No.1, Heritage Parody, M G Cross
                                    Road 1st, Kandivali West, Mumbai - 400067, Maharashtra, India</a></li>
                        </ul>
                    </div>
                    <!-- Footer Contact End -->
                </div>

                <div class="col-xl-3 col">
                    <!-- Footer Newsletter Form Start -->
                    <div class="footer-newsletter-form footer-links">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('about-us')}}">About Us</a></li>
                            <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                            <li><a href="{{route('news-events')}}">News & Events</a></li>
                            <li><a href="{{route('blogs')}}">Blogs</a></li>
                            <li><a href="{{route('contact-us')}}">Contact Us</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-xl-3 col">
                    <!-- Footer Newsletter Form Start -->
                    <div class="footer-newsletter-form footer-links">
                        <h3>Contact Us</h3>
                        <ul>
                            <li><a href="{{route('refund-policy')}}">Refund Policy</a></li>
                            <li><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
                            <li><a href="{{route('shipping-policy')}}">Shipping Policy</a></li>
                            <li><a href="{{route('terms-conditions')}}">Terms and Conditions</a></li>
                            {{-- <li><a href="javascript:void(0)">Site Map</a></li> --}}
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- WhatsApp Floating Button -->
        <a href="https://wa.me/+919769606708" class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>

        <!-- Footer Copyright Start -->
        <div class="footer-copyright">



            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Footer Copyright Box Start -->
                        <div class="footer-copyright-box">
                            <div class="footer-copyright-text">
                                <p>Copyright © 2025 All Rights Reserved.</p>
                            </div>

                            <!-- Footer Menu Start -->
                            <!-- <div class="footer-menu text-white">
                            Developed by <a href="https://www.technofra.com/" target="_blank" class="text-white">Technofra</a>
                               
                          </div> -->
                            <!-- Footer Menu End -->
                        </div>
                        <!-- Footer Copyright  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Copyright End -->
    </footer>
    <!-- Footer End -->

    <script>
    // Right-click ko disable karna
    document.querySelectorAll('.footer-contact').forEach(elem => {
        elem.addEventListener('contextmenu', e => e.preventDefault());
    });
    </script>

    <!-- Jquery Library File -->
    <script src="{{ asset('assets1/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Circle Progress Js File -->
    <script src="{{ asset('assets1/js/circle-progress.min.js') }}"></script>
    <!-- Bootstrap js file -->
    <script src="{{ asset('assets1/js/bootstrap.min.js') }}"></script>
    <!-- Validator js file -->
    <script src="{{ asset('assets1/js/validator.min.js') }}"></script>
    <!-- SlickNav js file -->
    <script src="{{ asset('assets1/js/jquery.slicknav.js') }}"></script>
    <!-- Swiper js file -->
    <script src="{{ asset('assets1/js/swiper-bundle.min.js') }}"></script>
    <!-- Counter js file -->
    <script src="{{ asset('assets1/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets1/js/jquery.counterup.min.js') }}"></script>
    <!-- Magnific js file -->
    <script src="{{ asset('assets1/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- SmoothScroll -->
    <script src="{{ asset('assets1/js/SmoothScroll.js') }}"></script>
    <!-- Parallax js -->
    <script src="{{ asset('assets1/js/parallaxie.js') }}"></script>
    <!-- MagicCursor js file -->
    <script src="{{ asset('assets1/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets1/js/magiccursor.js') }}"></script>
    <!-- Text Effect js file -->
    <script src="{{ asset('assets1/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('assets1/js/ScrollTrigger.min.js') }}"></script>
    <!-- YTPlayer js File -->
    <script src="{{ asset('assets1/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!-- Wow js file -->
    <script src="{{ asset('assets1/js/wow.min.js') }}"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset('assets1/js/function.js') }}"></script>

    <script>
        $(document).ready(function() {
            let searchTimeout;

            function performSearch(input, dropdown) {
                const query = input.val().trim();
                if (query.length < 2) {
                    dropdown.hide();
                    return;
                }

                dropdown.html('<div class="search-loader">Searching...</div>').show();

                $.get('/api/search-products', { q: query })
                    .done(function(data) {
                        dropdown.empty();
                        if (data.length === 0) {
                            dropdown.html('<div class="no-results">No products found</div>');
                        } else {
                            data.forEach(product => {
                                const highlightedName = product.name.replace(new RegExp(query, 'gi'), match => `<mark>${match}</mark>`);
                                const item = `
                                    <div class="search-item" data-id="${product.id}">
                                        <img src="${product.thumbnail}" alt="${product.name}" class="search-thumb">
                                        <span>${highlightedName}</span>
                                    </div>
                                `;
                                dropdown.append(item);
                            });
                        }
                    })
                    .fail(function() {
                        dropdown.html('<div class="no-results">Error searching products</div>');
                    });
            }

            $('#mobile-search-input, #desktop-search-input').on('input', function() {
                const input = $(this);
                const dropdown = input.siblings('.search-dropdown');
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(() => performSearch(input, dropdown), 300);
            });

            $('.search-btn').on('click', function(e) {
                e.preventDefault();
                const input = $(this).siblings('.search-input');
                const dropdown = $(this).siblings('.search-dropdown');
                performSearch(input, dropdown);
            });

            $(document).on('click', '.search-item', function() {
                const id = $(this).data('id');
                window.location.href = `/product-details/${id}`;
            });

            $('#mobile-search-input, #desktop-search-input').on('blur', function() {
                const dropdown = $(this).siblings('.search-dropdown');
                setTimeout(() => dropdown.hide(), 200);
            });

            $('#mobile-search-input, #desktop-search-input').on('focus', function() {
                const dropdown = $(this).siblings('.search-dropdown');
                if (dropdown.children().length > 0) {
                    dropdown.show();
                }
            });
        });
    </script>
</body>

</html>