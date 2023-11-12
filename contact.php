<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">

    <title>Interiorx - Contact</title>
</head>

<body>
    <div class="topbar container-fluid d-flex flex-wrap justify-content-center justify-content-lg-between">
        <div class="info-topbar mt-2 d-flex flex-wrap justify-content-center justify-content-lg-between">
            <div class="info-content d-inline-flex">
                <div class="mt-1"><span class="icon-phone-alt"></span></div>
                <p class="phone ms-2">+212 661523815, +212 535751357</p>
            </div>

            <div class="info-content ms-4 d-inline-flex">
                <div class="mt-1"><span class="icon-envelope"></span></div>
                <p class="email ms-2">xdesign4@gmail.com</p>
            </div>
        </div>

        <div class="location-topbar ms-3 mt-2 d-flex align-items-center">
            <p>354 hay Riad (3rd floor), Fès, Morocco</p>
        </div>
    </div>
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="nav-content container-fluid">
                <a class="navbar-brand" href="#">
                    <img class="d-inline-block align-top" src="img/interiorx.png" alt="brand-logo">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="main-menu collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.html">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                id="navbarDropdownMenuLink" role="button" aria-expanded="false">
                                Our Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="interior.html">Interior</a></li>
                                <li><a class="dropdown-item" href="construction.html">Construction</a></li>
                                <li><a class="dropdown-item" href="paint.html">paint</a></li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>

                
            </div>
        </nav>
    </div>
    <div class="container-fluid breadcrumb-area">
        <div class="container-lg">
            <div class="title">
                <h2>Contact us</h2>
            </div>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container contact">
        <div class="contact-wrap">
            <div class="contact-address">
                <div class="contact-title">
                    <h1>Let's Connect!</h1>
                    <p>Any questions or remarks? Just write us a message!</p>
                </div>
                <div class="contact-info">
                    <div class="office-address">
                        <h3><span class="icon-map-marked-alt"></span><strong>Address:</strong></h3>
                        <p>354 hay Riad (3rd floor), Fès, Morocco</p>
                    </div>

                    <div class="contact-mail">
                        <h3><span class="icon-envelope"></span><strong>Mail:</strong></h3>
                        <p>design.xos@gmail.com</p>
                    </div>

                    <div class="contact-phone">
                        <h3><span class="icon-phone-alt"></span><strong>Phone:</strong></h3>
                        <p>+212 661523815, +212 535751357</p>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <form action="insert.php" method="POST" enctype="multipart/form-data">
                    <p>Have an inquiry or some feedbak for us? Fill out the form below to contact our team.</p>
                    <div class="input-field">
                        <input type="text" placeholder="Your name" autocomplete="off" name="name" required>
                    </div>

                    <div class="input-field">
                        <input type="email" placeholder="Your email" autocomplete="off" required  name="email">
                    </div>

                    <div class="input-field">
                        <input type="text" placeholder="Phone number" autocomplete="off" required name=" number">
                    </div>

                    <div class="input-field">
                    <input type="password" placeholder="Password" autocomplete="off" name="pword" required >
                        
                    </div>

                    <div class="input-field">
                    
                    <input type="file" autocomplete="off" required  name=" image">
                    </div>

                    <div class="button-field">
                        <button  name="upload">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-content container-xxl">
            <div class="footer-col footer-col1">
                <p class="interiorx"><strong><span>X</span>design</strong></p>
                <p>Welcome to our website showcasing the best in interior and exterior design! We are dedicated to providing our clients with exceptional designs that exceed their expectations. Whether you are looking to spruce up your home's interior or enhance its outdoor space, we have the expertise and creativity to transform your vision into a stunning reality. </p>
                <div class="social-links">
                    <div class="social-link">
                        <span class="icon-facebook-f"></span>
                    </div>

                    <div class="social-link">
                        <span class="icon-twitter"></span>
                    </div>

                    <div class="social-link">
                        <span class="icon-linkedin-in"></span>
                    </div>

                    <div class="social-link">
                        <span class="icon-telegram-plane"></span>
                    </div>
                </div>
            </div>

            <div class="footer-col news">
                <p class="footer-col-title"><strong>Links</strong></p>
                <div class="news-links">
                    <p class="news-link"><a href="index.html">Home</a></p>
                    <p class="news-link"><a href="about.html">About us</a></p>
                    <p class="news-link"><a href="interior.html">Our Services-Interior</a></p>
                    <p class="news-link"><a href="construction.html">Our Services-Construction </a></p>
                    <p class="news-link"><a href="paint.html">Paint</a></p>
                    <p class="news-link"><a href="contact.php">Contact us</a></p>
                </div>
            </div>

            <div class="footer-col location">
                <p class="footer-col-title"><strong>Contact Us</strong></p>
                <p>354 hay Riad (3rd floor), Fès, Morocco</p>
                <div class="address">
                    <p><strong>Phone: </strong><span>+212 661523815, +212 535751357</span></p>
                    <p><strong>Email: </strong><span>xdesign4@gmail.com</span></p>
                    <p><strong>Web: </strong><a href="#">www.xdesign.com</a></p>
                </div>
            </div>
        </div>   
    </div>
    







    <!-- bootstrap cdn link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- aos cdn link -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- custom js link -->
    <script src="script.js"></script>
</body>

</html>