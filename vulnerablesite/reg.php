<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['Username'])){
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ALL PRODUCT</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <div class="box">
            <div class="navigationbar">
                <div class="logo">
                    <img src="image/logo.png" width="195px" height="95px" style="vertical-align: right">
                </div>
                <nav>
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="product.html">PRODUCT</a></li>
                        <li><a href="about.html">ABOUT</a></li>
                        <li><a href="contact.html">CONTACT</a></li>
                        <li><a href="account.html">ACCOUNT</a></li>
                        <li><a href="cart.html"><img src="image/cart1.png" width="20px" height="20px" style="vertical-align: middle"></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="accoun">
                <div class="row">
                    <div class="col-2">
                        <img src="image/dry fruits.png" width="100%">
                    </div>
                    <div class="col-2">
                        <div class="f-header">
                            <h1>HELLO, <?php echo $_SESSION['Username'];?></h1>
                            <form action="logout.php" method="POST" id="LoginForm">
                                <table>
                                    <tr>
                                        <td><b>NAME:</b></td>
                                        <td><?php echo $_SESSION['FullName']?></td>
                                    </tr>
                                    <tr>
                                        <td><b>USERNAME:</b></td>
                                        <td><?php echo $_SESSION['Username']?></td>
                                    </tr>
                                    <tr>
                                        <td><b>ID:</b></td>
                                        <td><?php echo $_SESSION['id']?></td>
                                    </tr>
                                    <tr>
                                        <td><b>EMAIL:</b></td>
                                        <td><?php echo $_SESSION['Email']?></td>
                                    </tr>
                                </table>
                                <button type="LOGOUT" name="LOGOUT" class="btn" action="logout.php">LOGOUT</button>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!--account-->
    <!--footer-->
    <div class="footer">
        <div class="box">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download our App</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="image/play-store.png" width="50%">
                        <img src="image/app store.png" width="50%">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="image/logo.png">
                    <p>Our purpose to sustainably make the pleasure and Benefits of Heathy products</p>
                </div>
                <div class="footer-col-3">
                    <h3>link</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog post</li>
                        <li>Feedback</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us On</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Twitter</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
        <?php
}
else{
    header("Location:account.html");
    exit();
}
?>