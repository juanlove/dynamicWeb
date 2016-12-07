<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Introduction to Responsive Web Design</title>
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Lato|Merriweather" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css" media="screen and (max-width: 900px)"> </head>

<body>

   <!--Login-->
   <?php include "login.php" ?>
   <!--/Login-->
   
    <!-- header -->
    <?php include "header.php" ?>
    <!--/header-->
    
    <!-- nav -->
    <?php include "nav.php" ?>
    <!--/nav-->
    
    <!-- body-content -->
    <div class="body-content">
        <div class="section-inner">
            <!-- thirds -->
            <div class="thirds clearfix">
                <!-- one-third -->
                
                <div class="one-third mobile-collapse"> <img src="images/1.jpg" /></div>
                <div class="one-third one-third-second mobile-collapse"> <img src="images/2.jpg"/></div>
                <div class="one-third one-third-last mobile-collapse"> <img src="images/3.jpg"  /> </div>
                                
                <div class="one-third mobile-collapse"> <img src="images/3.jpg" /></div>
                <div class="one-third one-third-second mobile-collapse"> <img src="images/1.jpg"/></div>
                <div class="one-third one-third-last mobile-collapse"> <img src="images/2.jpg"  /> </div>
                                
                <div class="one-third mobile-collapse"> <img src="images/2.jpg" /></div>
                <div class="one-third one-third-second mobile-collapse"> <img src="images/3.jpg"/></div>
                <div class="one-third one-third-last mobile-collapse"> <img src="images/1.jpg"  /> </div>
                                
                <div class="one-third mobile-collapse"> <img src="images/1.jpg" /></div>
                <div class="one-third one-third-second mobile-collapse"> <img src="images/2.jpg"/></div>
                <div class="one-third one-third-last mobile-collapse"> <img src="images/3.jpg"  /> </div>
                
            </div>
            <!--/thirds-->
        </div>
    </div>
    <!--/body-content-->
    <!-- footer -->
    <div class="footer">
        <div class="section-inner">
            <h6>Made with <span style="color: red; font-size: 20px;">♥</span> by juanlove </h6>
        </div>
    </div>
    <!--/footer-->
    <script src="js/mainScript.js"></script>
</body>

</html>