<?php
require_once("../../../vendor/autoload.php");
use App\Message\Message;
if(!isset($_SESSION)) session_start();




?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Login Form Template</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="../../../resources/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../resources/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../resources/assets/css/form-elements.css">
    <link rel="stylesheet" href="../../../resources/assets/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="../../../resources/assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../../resources/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../../resources/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../../resources/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../../../resources/assets/ico/apple-touch-icon-57-precomposed.png">
   
</head>
<body>
<!-- Top content -->
<div class="top-content">
     <div class="container">
        <div class="row">
           <div id="almessage"> <?php echo Message::getMessage(); ?></div>
            <div class="col-sm-6 col-sm-offset-3">
                <div class="form-top">
                    <div class="form-top-left">
                        <h3>Enter Your Gender</h3>
                        <p>Enter your Your Name and Gender :</p>
                    </div>
                    <div class="form-top-right">
                        <i class="fa fa-genderless"></i>
                    </div>
                </div>
                <div class="form-bottom">
                    <form role="form" action="store.php" method="post" class="login-form">
                        <div class="form-group">
                            <label class="sr-only" for="form-booktitle">Enter Your Name</label>
                            <input type="text" name="your_name" placeholder="Enter Your Name..." class="form-booktitle form-control" id="form-booktitle">
                        </div>
                        <div class="form-group">
                            <label for="your-gender">Your Gender</label>
                            <input type="radio" name="gender" value="male" id="your-gender" checked> Male
                            <input type="radio" name="gender" value="female" id="your-gender"> Female
                            <input type="radio" name="gender" value="other" id="your-gender"> Other<br><br>
                        </div>
                        <button type="submit" class="btn">Create!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Javascript -->
<script src="../../../resources/assets/js/jquery-1.11.1.min.js"></script>
<script src="../../../resources/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../../../resources/assets/js/jquery.backstretch.min.js"></script>
<script src="../../../resources/assets/js/scripts.js"></script>
 <script type="text/javascript">

            $(function(){
				setTimeout(function(){
					$("#almessage").fadeOut('Slow')
				}, 5000);
			});

    </script>

<!--[if lt IE 10]>
<script src="../../../resources/assetsjs/placeholder.js"></script>
<![endif]-->

</body>

</html>