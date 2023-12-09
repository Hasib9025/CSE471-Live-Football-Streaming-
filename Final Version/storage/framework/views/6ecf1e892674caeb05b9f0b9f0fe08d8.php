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
        <!-- Header content goes here (similar to the provided UI) -->
    </section>

    <section id="header" class="cd-secondary-nav">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#dropdown-thumbnail-preview">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><span class="well_2">FOOT</span>BALL <span
                                class="well_1"><i class="fa fa-dribbble"></i></span></a>
                    </div>
                    <div class="collapse navbar-collapse" id="dropdown-thumbnail-preview">
                        <ul class="nav navbar-nav">
                            <li><a href="/home" class="hvr-underline-from-center">HOME</a></li>
                            <li ><a href="/live" class="hvr-underline-from-center">LIVE</a></li>
                            <li><a href="/livescore" class="hvr-underline-from-center">LIVE SCORE</a></li>
                            <li><a href="/matches" class="hvr-underline-from-center">MATCHES</a></li>
                            <li class="active"><a href="/highlight" class="hvr-underline-from-center">HIGHLIGHT</a></li>
                            <li><a href="/subscription" class="hvr-underline-from-center">SUBSCRIPTION</a></li>
                            <li><a href="/profile" class="hvr-underline-from-center">PROFILE</a></li>
                            <li><a href="/logout" class="hvr-underline-from-center">LOGOUT</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </section>

    <center>
        <h3>Chelsea vs Man City</h3>
        <video width="720" height="480" controls>
            <source
                src="<?php echo e(asset('videos/Chelsea 4-4 Man City _ HIGHLIGHTS _ Premier League 2023_24.mp4')); ?>"
                type="video/mp4">
            Your browser does not support the video tag.
        </video>


        <h3>Portugal v Spain | 2018 FIFA World Cup | Match Highlights</h3>
        <video width="720" height="480" controls>
            <source
                src="<?php echo e(asset('videos/Portugal v Spain _ 2018 FIFA World Cup _ Match Highlights.mp4')); ?>"
                type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <h3>Man City 1-1 Liverpool | HIGHLIGHTS</h3>
        <video width="720" height="480" controls>
            <source
                src="<?php echo e(asset('videos/Man City 1-1 Liverpool _ HIGHLIGHTS Haaland & Trent Alexander-Arnold Goals.mp4')); ?>"
                type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h3>Newcastle 4-1 Chelsea | HIGHLIGHTS | Premier League 2023/24</h3>
        <video width="720" height="480" controls>
            <source
                src="<?php echo e(asset('videos/Newcastle 4-1 Chelsea _ HIGHLIGHTS _ Premier League 2023_24.mp4')); ?>"
                type="video/mp4">
            Your browser does not support the video tag.
        </video>

    </center>


</body>

</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/brac/football/resources/views/highlight.blade.php ENDPATH**/ ?>