<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Meal Kart</title>
    <?php include 'head.php'?>
</head>

<body>
    <!-- Page pre loader -->
    <div id="pre-loader">
        <div class="loader-holder">
            <div class="frame">
                <img src="images/Preloader.gif" alt="Laboom" />
            </div>
        </div>
    </div>
    <div class="wrapper">
        <!-- Start Header -->
        <?php include 'header.php'?>
        <!-- End Header -->
        <!-- Start Main -->
        <main>
            <div class="main-part">
                <section class="contact-map">
                    <div class="map-outer">
                        <div id="map"></div>
                    </div>
                </section>
                <!-- Start Contact Part -->
                <section class="default-section contact-part home-icon">
                    <div class="icon-default">
                        <img src="images/scroll-arrow.png" alt="">
                    </div>
                    <div class="container">
                        <div class="title text-center">
                            <h2 class="text-coffee">Contact Us</h2>
                            <h6 class="heade-xs">We are a second-generation family business established in 1972</h6>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <h5 class="text-coffee">Leave us a Message</h5>
                                <form class="form" method="post" name="contact-form" action="#">
                                    <div class="alert-container"></div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>First Name *</label>
                                            <input name="first_name" type="text" required>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Last Name *</label>
                                            <input name="last_name" type="text" required>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Email *</label>
                                            <input name="email" type="email" required>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Subject *</label>
                                            <input name="subject" type="text" required>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <label>Your Message *</label>
                                            <textarea name="message" required></textarea>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input name="submit" value="SEND MESSAGE" class="btn-black pull-right send_message" type="submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <address>
                                    <span class="text-primary co-title">Our Address</span>
                                    <p>A-176, Sector-83, Ground Floor,<br>Phase-II,201305 Noida, India</p>
                                    <p>Call Us : <a href="tel:8860997111">886 099 7111</a>
                                        <br> Drop a mail : <a href="mailto:hello@themealkart.com">hello@themealkart.com</a></p>
                                </address>
                                <h5 class="text-coffee">Opening Hours</h5>
                                <ul class="time-list">
                                    <li><span class="week-name">Monday</span> <span>10:00 </span></li>
                                    <li><span class="week-name">Tuesday</span> <span>12-6 PM</span></li>
                                    <li><span class="week-name">Wednesday</span> <span>12-6 PM</span></li>
                                    <li><span class="week-name">Thursday</span> <span>12-6 PM</span></li>
                                    <li><span class="week-name">Friday</span> <span>12-6 PM</span></li>
                                    <li><span class="week-name">Saturday</span> <span>12-6 PM</span></li>
                                    <li><span class="week-name">Sunday</span> <span>Closed</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Contact Part -->
            </div>
        </main>
        <!-- End Main -->
        <!-- Start Footer -->
        <?php include 'footer.php'?>
        <!-- End Footer -->
    </div>
    <!-- Back To Top Arrow -->
    <?php include 'footer-script.php'?>
</body>

</html>
