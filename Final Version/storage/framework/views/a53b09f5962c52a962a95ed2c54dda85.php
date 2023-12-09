<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FootBall</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
   <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
<body>
<section id="header_main" class="clearfix">
 <div class="container">
  <div class="row">
   <div class="col-sm-12 space_all">
    <div class="col-sm-6 space_all">
     <div class="header_main_1">
       <ul>
	        <li><i class="fa fa-phone"></i><a href="#">01851527085</a></li>
			<li><i class="fa fa-envelope"></i><a href="#">asiburmarin399@gmail.com</a></li>
	   </ul>
     </div>
    </div>
    <div class="col-sm-6 space_all">
     <div class="header_main_3">
      <ul>
           <li><a href="#"><i class="fa fa-facbook"></i></a></li>
		   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		   <li><a href="#"><i class="fa fa-instagram"></i></a></li>
		   <li><a href="#"><i class="fa fa-youtube"></i></a></li>
		   <li><a href="#"><i class="fa fa-google"></i></a></li>
      </ul>
     </div>
    </div>
   </div>
  </div>
 </div>
</section>
<section id="header" class="cd-secondary-nav">
 <div class="container">
  <div class="row">
   <nav class="navbar navbar-default">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dropdown-thumbnail-preview">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <a class="navbar-brand" href="index.html"><span class="well_2">FOOT</span>BALL <span class="well_1"><i class="fa fa-dribbble"></i></span></a>
    </div>
    <div class="collapse navbar-collapse" id="dropdown-thumbnail-preview">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/home" class="hvr-underline-from-center">HOME</a></li>
		<li><a href="/live" class="hvr-underline-from-center">LIVE</a></li>
		<li><a href="" class="hvr-underline-from-center">MATCHES</a></li>
		<li><a href="" class="hvr-underline-from-center">SUBSCRIPTION</a></li>
		<li><a href="/profile" class="hvr-underline-from-center">PROFILE</a></li>
        <li><a href="/logout" class="hvr-underline-from-center">LOGOUT</a></li>



      </ul>
    </div>
</nav>
  </div>
 </div>
</section>
   <center><h1>Live Match</h1>
    <video width="1080" height="640" controls>
        <source src="<?php echo e(asset('videos/Chelsea 4-4 Man City _ HIGHLIGHTS _ Premier League 2023_24.mp4')); ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</center>

</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/football/resources/views/live.blade.php ENDPATH**/ ?>