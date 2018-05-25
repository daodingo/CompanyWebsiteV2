<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sheek Media</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/WebsiteV2.js"></script>
        <link rel="stylesheet" style="text/css" href="index.css">
        <link rel="stylesheet" style="text/css" href="css/animate.css">
        <link rel="shortcut icon" href="/favicon-32x32.png" type="image/x-icon">
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
    </head>
    <body class="container-fluid">
       
        <nav class="navbar navbar-expand-custom">
            <a class="navbar-brand" href="index.html"><img id="sheek-logo-top" src="Pictures/finalsheekmedialogov2.png" alt="SheekLogo"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerTarget" aria-controls="navbarTogglerTarget" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerTarget">
                <ul class="navbar-nav mt-2 mt-lg-0" id="nav-options-wrapper">
                    <li class="nav-item"><a class="nav-link" href="index.html">Welcome</a></li>
                    <li class="nav-item"><a class="nav-link" href="OurTeam.html">Our Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="Services.html">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="Gallery.html">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="Blog.html">Blog</a></li>
                    <li class="nav-item current-page"><a class="nav-link" href="ContactUs.html">Contact Us</a></li>
                    <li id="last-dropdown-nav-button" class="nav-item"><a class="nav-link" href="GetStarted.html">Get Started</a></li>
                    <li id="last-nav-button" class="nav-item ignore-underline"><a href="GetStarted.html" class="nav-link btn animated-button victoria-three">GET STARTED</a></li>
                </ul>
            </div>
        </nav>

        <div id="contact-us-screen1">
            <div id="contact-us-top-div">
                <div id="contact-us-centered-text">
                    <h1>Contact Us</h1>
                </div>
            </div>

            <div id="contact-us-left-half" class="card col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="card-body">
                    <h2>Get In Contact With Our Support Team</h2>
                    <p>Ask about any questions or ideas that you might have. We are quick to respond and will never throw you to an automated response. We do our best to take into consideration all of your requests and concerns, so feel free to ask away.</p>

                    <h3>What can we help you with?</h3>                    
                    <ul>
                        <li>Inqueries about your website or ideas - We'll give you a personal consultation on what you want to see, and how we can get there.</li>
                        <li>Eat jello like a boss and never have to return it - These are some random words to take up space, and aren't lorem ipsum.</li>
                        <li>Any other concerns and issues you have about your website - throw any other life questions you may have, and then we'll take a crack at it.</li>
                    </ul>
                </div>
            </div>
            <div id="contact-us-right-half" class="card col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="card-body">

                    <form action="contactform.php" method="post">
                        <div class="form-header">Name: <span class="green-asterisk">*</span></div>
                        <input spellcheck="false" class="input-field" type="text" name="name" placeholder="Full name" required>

                        <div class="form-header">Email: <span class="green-asterisk">*</span></div>
                        <input spellcheck="false" class="input-field" type="email" name="email" placeholder="Your email" required>

                        <div class="form-header">Phone:</div>
                        <input spellcheck="false" class="input-field" type="text" name="phone" placeholder="Phone">
                        
                        <div class="form-header">Subject:</div>
                        <input spellcheck="false" class="input-field" type="text" name="subject" placeholder="Subject">

                        <div class="form-header">Tell us what's up: <span class="green-asterisk">*</span></div>
                        <textarea name="message" id="message-ideas" class="input-field" rows="10" required></textarea>
                        
                        

                        <br><br>

                        <input id="contact-submit-button" type="submit" name="submit" value="SEND MESSAGE">

                        <br><br>

                        <h4><span class="green-asterisk">*</span> Indicates required fields</h4>
                    </form>

                </div>
            </div>

            <hr style="margin-top: 3%; margin-bottom: 3%;">


            <div id="contact-info-header" class="col-12">Contact Information</div>

            <div id="contact-info-container">
                <div id="contact-square1" class="card offset-xl-2 offset-lg-2 col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="card-body">
                        <h3>Location</h3>
                        <br>
                        <div class="info-content">5500 Campanile Drive, San Diego, Ca 92182</div>
                        <br>
                        <div class="info-content">Phone(Toll Free): (858)-263-5352</div>
                        <br>
                        <div class="info-content">SheekMediaSupport@sdsu.edu</div>

                    </div>
                </div>
                <div id="contact-square2" class="card col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="card-body">
                        <h3>Mailing Address</h3>
                        <br>
                        <div class="info-content">South Campus Plaza North Tower</div>
                        <br>
                        <div class="info-content">5140 College Ave</div>
                        <br>
                        <div class="info-content">San Diego, CA 92115</div>
                        <br><br>

                    </div>
                </div>
                <div id="contact-square3" class="card offset-xl-2 offset-lg-2 col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="card-body">
                        <h3>Hours</h3>
                        <br>
                        <p>These are the hours where we more than welcome you to inquire about consultations.</p>
                        <br>
                        <div class="info-content">Monday-Friday: 8am - 6pm</div>
                        <div class="info-content">Saturday-Sunday: 9am - 3pm</div>
                    </div>
                </div>
                <div id="contact-square4" class="card col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="card-body">
                        <h3>Further Support</h3>
                        <br>
                        <p>Our team is available during the provided hours and would be happy to assist you further if any unresolved issues arise. Feel free to call or contact us with the provided phone and email information.</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="footer">
            <span id="sheek-column" class="footer-column col-lg-3 col-md-5">
                <div id="sheek-logo-footer">
                    <img src="Pictures/FinalSheekMediaLogo.png" alt="Sheek-logo">
                </div>
                <div id="footer-media-container">
                    <h2>Follow Us On:</h2>
                    <div class="footer-break-line"></div>
                    <div id="footer-icons">
                        <div class="col-3">
                            <a href="https://www.facebook.com/SheekMedia/" class="fa fa-facebook"></a>
                        </div>
                        <div class="col-3">
                            <a href="https://twitter.com/SheekMedia" class="fa fa-twitter"></a>
                        </div>
                        <div class="col-3">
                            <a href="https://plus.google.com/discover" class="fa fa-google"></a>
                        </div>
                        <div class="col-3">
                            <a href="https://www.instagram.com/sheekmediaofficial/" class="fa fa-instagram"></a>
                        </div>
                        <div class="col-3">
                            <a href="https://www.youtube.com/channel/UC0cQlp_-ng3UK-3ZjrzZ8Ww?view_as=public" class="fa fa-youtube"></a>
                        </div>
                        <div class="col-3">
                            <a href="https://www.linkedin.com/in/sheek-media-588291163/" class="fa fa-linkedin"></a>
                        </div>
                    </div>

                    <h2>Contact Us:</h2>
                    <div class="footer-break-line"></div>
                    <div id="footer-contact">
                        <h3>5500 Campanile Drive, SD, 92128</h3>
                        <h3>Phone(Toll-Free): (858)-263-5352</h3>
                        <h3>SheekMedia@gmail.com</h3>
                    </div>

                </div>
            </span>
            <span class="footer-column col-lg-3 col-md-5">
                <h1>Connect</h1>
                <a href="#">Facebook</a>
                <br>
                <a href="#">Twitter</a>
                <br>
                <a href="#">Google+</a>
                <br>
            </span>
            <span class="footer-column col-lg-3 col-md-5">
                <h1>Company</h1>
                <a href="#">Our Story</a>
                <br>
                <a href="#">Investors</a>
                <br>
                <a href="#">FAQ</a>
                <br>
            </span>
            <span class="footer-column col-lg-3 col-md-5">
                <h1>Other Services</h1>
                <a href="#">Sheek Frames</a>
                <br>
                <a href="#">Sheek Development</a>
                <br>
                <a href="#">Sheek Airlines</a>
                <br>
            </span>
        </div>

        <!-- WhatsHelp.io widget -->
        <script type="text/javascript">
            (function () {
                var options = {
                    facebook: "148212699178985", // Facebook page ID
                    company_logo_url: "//storage.whatshelp.io/widget/d8/d8c6/d8c6e19ce91d8e5983b24e2e0df77a84/29541601_2119852568236195_6349708856184012800_n.jpg", // URL of company logo (png, jpg, gif)
                    greeting_message: "Hello, how may we help you? Just send us a message now to get assistance.", // Text of greeting message
                    call_to_action: "Have any questions?", // Call to action
                    position: "right", // Position may be 'right' or 'left'
                };
                var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
                var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
                s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
                var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
            })();
        </script>
        <!-- /WhatsHelp.io widget -->

    </body>
</html>