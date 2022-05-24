<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1cfb698203.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./CSS/contact.css">
    <title>FRADS MOOTIZ | CONTACT US</title>
</head>
<body>
    <div class="logo"><img src="./IMAGES/muks.png" alt="logo image" width="90px" height="50px"></div>
    
    <div class="navbar">
        <nav>
            <ul>
                <li><a href="index.html"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="about.html"><i class="fas fa-address-card"></i>About</a></li>
                <li><a href="rent.html"><i class="fas fa-truck-moving"></i>Rent</a></li>
                <li><a href="showroom.html"><i class="fas fa-car"></i>Show room</a></li>
                <li><a href="contact.php"><i class="fas fa-phone-volume"></i>Contact us</a></li>
            </ul>
        </nav>
    </div> <br> <br> <br>

    <div class="container">
        <section class="mb-4">
        
            <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                a matter of hours to help you.</p>
        
            <div class="row">
        
                
                <div class="col-md-9 mb-md-0 mb-5">
                <?php include_once 'feedback.php';?>
                    <form id="contact-form" name="contact-form" action="save.php" method="POST">
        
                        
                        <div class="row">
        
                            
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control" required>
                                    <label for="name" class="">Your name</label>
                                </div>
                            </div>
                            
        
                            
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control" required>
                                    <label for="email" class="">Your email</label>
                                </div>
                            </div>
        
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control" required>
                                    <label for="subject" class="">Subject</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
        
                            <div class="col-md-12">
        
                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
                                    <label for="message">Your message</label>
                                </div>
        
                            </div>
                        </div>
        
                    </form>
        
                    <div class="text-center text-md-left">
                        <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                    </div>
                    <div class="status"></div>
                </div>
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>Utawala, mihang'o </p>
                        </li>
        
                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>(+254) 790 509 998</p>
                        </li>
        
                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>fradsmootiz@gmail.com</p>
                        </li>
                    </ul>
                </div>
            </div>
        
        </section>
        </div> <br> <br> <br> <br> <br> <br> <br>

        <div class="content-card">
            <footer>
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                    <a href="https://facebook.com/"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.snapchat.com/"><i class="fab fa-snapchat"></i></a> 
    
                    <p>All rights reserved &copy; 2022, Daniel Mukenya &trade;</p>
            </footer>
        </div>
</body>
</html>