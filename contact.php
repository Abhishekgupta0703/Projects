<?php
if(isset($_POST['contact_btn'])){
    $name="Contact Us";
    $email="dd@theleadingnavigators.com";
    $phone=$_POST['user_phone'];
    $msg=$_POST['user_msg'];
    $data = "Name = ".$_POST['user_name'] ."\nEmail = ". $_POST['user_email'] ."\nPhone = ". $_POST['user_phone'] ."\nMessage = ". $_POST['user_msg'];
    $to="dd.theleadingnavigators@gmail.com";
    $header="from:$email";
    if(mail($to,$name,$data,$header)){
        $msg1 = "Message Send Succesfully";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>TLN | Contacts</title>
</head>
<body>
    <header>
        <a href="index.html" class="logo"><img src="ascets\Logo.png" alt="TLN"></a>
        <div id="menu" class="fas fa-bars" onclick="fun()"></div>
        <nav class="navbar" id="navbar">
            <ul class="ul">
                <li><a class="not_active" id="d1" href="index.html" onclick="func1()">Home</a></li>
                <li><a class="not_active" id="d2" href="index.html" onclick="func1()">About</a></li>
                <li><a class="not_active" id="d3" href="index.html" onclick="func1()">Service</a></li>
                <li><a class="not_active" id="d5" href="index.html" onclick="func1()">Leaders</a></li>
                <li><a class="not_active" id="d4" href="index.html" onclick="func1()">Gallery</a></li>
                <li><a class="active" id="d6" href="contact.php" onclick="func1()">Contact Us</a></li>

            </ul>
        </nav>
    </header>
    <div class="contact">
        <form method="POST">
            <h2 class="touch">Get in Touch</h2>
            <input type="text" id="Name" placeholder="Your Name"  name ="user_name" required>
            <input type="email" id="Email" placeholder="Email id"  name ="user_email" required>
            <input type="number" id="Phone" placeholder="Phone no."  name ="user_phone" required>
            <textarea id="message" rows="4" placeholder="How we can help you?" name="user_msg" required></textarea>
            <button type="submit" name="contact_btn">Send</button>
            <strong>
                <?php if(!empty($msg1)){
                    echo $msg1;
                }?>
                </strong>

        </form>
    </div>
        <section class="footer" id="contact">

        <div class="box-container">

            <div class="box">
                <h3>The Leading Navigators</h3>
                <p>We help corporate houses fill the gap among their team members & various teams. All this is
                    achieved
                    by pragmatic learning through workshops.</p>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#demo"><i class="fas fa-chevron-circle-right"></i> Home</a>
                <a href="#about"><i class="fas fa-chevron-circle-right"></i> About</a>
                <a href="#Service"><i class="fas fa-chevron-circle-right"></i> Service</a>
                <a href="#Leader"><i class="fas fa-chevron-circle-right"></i> Leader</a>
                <a href="#gallery"><i class="fas fa-chevron-circle-right"></i> Gallery</a>
                <a href="contact.php"><i class="fas fa-chevron-circle-right"></i> Contact Us</a>

            </div>

            <div class="box">
                <h3>contact info</h3>
                <p> <i class="fas fa-phone"></i>+91 7272049000</p>
                <p> <i class="fas fa-envelope"></i>dd@theleadingnavigators.com</p>
                <p> <i class="fas fa-map-marked-alt"></i>New-Delhi, India - 110070</p>
                <div class="share">

                    <a href="https://www.linkedin.com/company/the-leading-navigators/" class="fab fa-linkedin"
                        aria-label="LinkedIn" target="_blank"></a>
                    <a href="https://youtube.com/@theleadingnavigators" class="fab fa-youtube" aria-label="Youtube"
                        target="_blank"></a>
                    <a href="mailto:dd@theleadingnavigators.com" class="fas fa-envelope" aria-label="Mail"
                        target="_blank"></a>
                    <a href="https://www.facebook.com/theleadingnavigators?mibextid=ZbWKwL" class="fab fa-facebook" aria-label="Facebook"
                        target="_blank"></a>
                    <a href="https://instagram.com/theleadingnavigators?igshid=Yzg5MTU1MDY=" class="fab fa-instagram" aria-label="Instagram"
                        target="_blank"></a>
                </div>
            </div>
        </div>
        <h1 class="credit">Designed with <i class="fa fa-heart pulse"></i> by <a
                href="https://www.linkedin.com/in/abhishek-g-996b40217/"> Abhishek Gupta <span class="fab fa-linkedin"
                    aria="LinkedIn"></a> & <a href="https://www.linkedin.com/in/pranjal-bajpai-619067218"> Pranjal <span
                    class="fab fa-linkedin" aria="LinkedIn"></span> </a></h1>

    </section>

 <script src="script.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>

</html>