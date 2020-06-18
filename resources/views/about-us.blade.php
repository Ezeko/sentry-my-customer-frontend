<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('/css/about.css')}}" />
    <title>About Us</title>
</head>
<body>
<header>
    <div class="content">
        <div class="container">
            <nav>
                <h2>MyCustomer</h2>
                <ul>
                    <li class="nav-list"><a href="#">About Us</a></li>
                    <li class="nav-list"><a href="#">What We Do</a></li>
                    <li class="nav-list"><a href="#">Features</a></li>
                    <li class="nav-list"><a href="#">Contact Us</a></li>
                    <li><a href="#" class="btn nav_btn btn-white">Register</a></li>
                    <li><a href="#" class="btn nav_btn btn-transparent">Login</a></li>
                </ul>
            </nav>
            <section>
                <h1>About <span class="text-primary">MyCustomer</span></h1>
                <p>Track debts, send messages to your customers, all from <br />MyCustomer.</p>
                <a href="#" class="btn sect_btn btn-primary">Read More</a>
            </section>
        </div>
    </div>
</header>
<main>
    <div class="container">
        <section>
            <div class="our-story">
                <h2 class="text-primary">Our Story</h2>
                <div class="grid-container">
                    <div class="our-story-content">
                        <h3 class="text-gray">MyCustomer is digitalizing your everyday accounts ledger, simply.</h3>
                        <p>
                            Fusce porttitor, dui non semper finibus, magna tortor porttitor ligula ac lacinia lorem sapien sed
                            justo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus at lacus
                            interdum, eu congue quam dignissim. Morbi cursus risus vel risus convallis lacinia.
                        </p>
                        <p>
                            Fusce porttitor, dui non semper finibus, magna tortor porttitor ligula ac lacinia lorem sapien sed
                            justo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus at lacus
                            interdum, eu congue quam dignissim. Morbi cursus risus vel risus convallis lacinia.
                        </p>
                    </div>
                    <div class="our-image">
                        <img class="upground" src="{{asset('/images/customer.png')}}" alt="Customer" />
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<section id="download">
    <div class="bg">
        <div class="container">
            <div class="content">
                <h3>
                    Download the MyCustomer App on your
                </h3>
                <h3>
                    phone to use on the Go.
                </h3>
                <img src="{{asset('/images/google.png')}}" alt="Download on Google play" />
            </div>
        </div>
    </div>
    <img src="{{asset('/images/main.png')}}" alt="Mobile Phone" />
</section>
<footer>
    <div class="container">
        <div class="top">
            <h2 class="text-primary">MyCustomer</h2>
            <ul>
                <li class="nav-list"><a href="#">About Us</a></li>
                <li class="nav-list"><a href="#">What We Do</a></li>
                <li class="nav-list"><a href="#">Features</a></li>
                <li class="nav-list"><a href="#">Contact Us</a></li>
            </ul>
            <div class="newsletter">
                <p>Subscribe to our newsletter</p>
                <input type="text" placeholder="Enter Your Email Address" />
            </div>
        </div>
        <div class="bottom">
            &copy; 2020 MyCustomer. All Rights Reserved. Terms Privacy
            <ul>
                <li class="footer-list">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="footer-list">
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                </li>
                <li class="footer-list">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>
