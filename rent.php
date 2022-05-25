<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1cfb698203.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./CSS/rent.css">
    <title>FRADS MOOTIZ | RENT</title>
</head>
<body>
    <div class="logo"><img src="./IMAGES/muks.png" alt="logo image" width="90px" height="50px"></div>
    
    <div class="navbar">
        <nav>
            <ul>
                <li><a href="index.html"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="about.html"><i class="fas fa-address-card"></i>About</a></li>
                <li><a href="rent.php"><i class="fas fa-truck-moving"></i>Rent</a></li>
                <li><a href="showroom.html"><i class="fas fa-car"></i>Show room</a></li>
                <li><a href="contact.php"><i class="fas fa-phone-volume"></i>Contact us</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </nav>
    </div> <br> <br> <br> <br> <br>

    <div class="container"> 
    <?php include_once 'rfeedback.php';?>
        <form action="rsave.php" method="POST">
            <label for="name">Full Name:</label>
            <input type="text" name="name" id="name" required> <br> <br> <br> <br> 

            <label for="identity">ID NO:</label>
            <input type="text" name="identity" id="identity" required> <br> <br> <br> <br>

            <label for="dtime">Date,Time:</label>
            <input type="datetime-local" name="dtime" id="dtime" required> <br> <br> <br> <br>

            <label for="car">Type of Car:</label>
            <select name="car" id="car">
                <option value=""></option>
                <option value="nissan">Nissan Rogue</option>
                <option value="honda">Honda CRV</option>
                <option value="toyota">Toyota RAV4</option>
                <option value="jeep">Jeep Grand checkee</option>
                <option value="chevrolet">Chevrolet</option>
                <option value="subaru">Subaru</option>
                <option value="volks">Volkswagen</option>
                <option value="dodge">Dodge</option>
                <option value="kia">Kia</option>
                <option value="mazda">Mazda</option>
                <option value="hyundai">Hyundai</option>
                <option value="kia">Kia rio</option>
                <option value="chevy">Chevy Bolt EV</option>
                <option value="honda">Honda Civic</option>
                <option value="hyundai">Hyundai Veloster </option>
                <option value="mazda">Mazda 3</option>
                <option value="volks">Volkswagen GTI</option>
                <option value="volks">Volkswagen golf R</option>
                <option value="kia">Kia stinger</option>
                <option value="pole">Polestar 2</option>
                <option value="audi">Audi A5 Sportback</option>
                <option value="audi">Audi A7</option>
                <option value="audi">Audi RS7</option>
                <option value="benz">Mercedes AMG EOS</option>
            </select> <br> <br> <br> <br>

            <label for="location">Location:</label>
            <input type="text" name="location" id="location" required> <br> <br> <br> <br>

            <button type="submit">RENT NOW</button>
        </form>
    </div> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>

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