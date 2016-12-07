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
                
<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form  action="" method="POST" class="w3-container" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    <label><b>First Name</b></label>
    <input name="name" type="text" value="John" size="30"/><br>    
    <label><b>Last Name</b></label>
    <input name="name" type="text" value="Doe" size="30"/><br>
    <input name="email" type="text" value="" size="30"/><br>
    Your message:<br>
    <textarea name="message" rows="7" cols="30"></textarea><br>
    <input type="submit" value="Send email"/>
    </form>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		mail("youremail@yoursite.com", $subject, $message, $from);
		echo "Email sent!";
	    }
    }  
?>
						
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