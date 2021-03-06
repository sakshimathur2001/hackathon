<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Donate</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <script src="https://kit.fontawesome.com/1e088ac6a1.js" crossorigin="anonymous"></script>

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
		
    </head>
	<header style="text-align: left;">
	<?php 
        require __DIR__.'/includes/navv.php';
      ?>
	  </header>
    <body style="background: url(images/wallpaperGrey.png);">
	
		<!-- Contact Form -->
		<div class="c-form-container section-container section-container-image-bg">
	        <div class="container">

	            <div class="row">
	                <div class="col-sm-8 col-sm-offset-2 c-form section-description wow fadeIn">
	                    <h1>Donation Form</h1>

	                </div>
	            </div>

	            <div class="row">
	            	<div class="col-sm-6 col-sm-offset-3 c-form-box wow fadeInUp">

	                    <div class="c-form-top">
                    		<div class="c-form-top-left">
                    			<h3>Fill in the form below to Donate:</h3>

                    		</div>
                    		<div class="c-form-top-right">

                    		</div>
                        </div>
                        <div class="c-form-bottom">
		                    <form role="form" action="assets/contact.php" method="post">
		                    	<div class="form-group">
		                    		<label for="c-form-name">
		                    			<span class="label-text">Name:</span>
		                    			<span class="contact-error"></span>
		                    		</label>
		                        	<input type="text" name="name" placeholder="Your name..." class="c-form-name form-control" id="c-form-name">
		                        </div>
		                    	<div class="form-group">
		                    		<label for="c-form-email">
		                    			<span class="label-text">Email:</span>
		                    			<span class="contact-error"></span>
		                    		</label>
		                        	<input type="text" name="email" placeholder="Your email address..." class="c-form-email form-control" id="c-form-email">
		                        </div>
		                        <div class="form-group">
		                        	<label for="c-form-subject">
		                    			<span class="label-text">Contact Number:</span>
		                    			<span class="contact-error"></span>
		                    		</label>
		                        	<input type="text" name="subject" placeholder="Contact Number" class="c-form-subject form-control" id="c-form-subject">
		                        </div>
		                        <div class="form-group">
		                        	<label for="c-form-message">
		                    			<span class="label-text">Amount:</span>
		                    			<span class="contact-error"></span>
		                    		</label>
		                        	<textarea name="message" placeholder="Amount" class="c-form-message form-control" id="c-form-message"></textarea>
		                        </div>
		                        <button type="submit" class="but">Donate Now</button>
		                    </form>
	                    </div>

	                </div>
	            </div>

              <div class="row" style="text-align: center; padding-left:30%; padding-right:30%">
                <div class="col-sm-6 c-form-info-box wow fadeInUp">
                  <div class="c-form-info-box-icon" >
                    <a href="https://www.paypal.com/in/home"><i class="fab fa-paypal"></i></a>
                  </div>

                </div>
                <div class="col-sm-6 c-form-info-box wow fadeInDown">
                  <div class="c-form-info-box-icon">
                    <a href="https://pay.google.com/"><i class="fab fa-google-pay"></i></a>
                  </div>

                </div>

				

			  </div>
		</br>
		</br>			 
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>