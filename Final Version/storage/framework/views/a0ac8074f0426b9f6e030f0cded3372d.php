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
                            <li class="active"><a href="/live" class="hvr-underline-from-center">LIVE</a></li>
                            <li><a href="/livescore" class="hvr-underline-from-center">LIVE SCORE</a></li>
                            <li><a href="/matches" class="hvr-underline-from-center">MATCHES</a></li>
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
        <h1>Chelsea vs Man City</h1>
        <video width="1080" height="640" controls>
            <source
                src="<?php echo e(asset('videos/Chelsea 4-4 Man City _ HIGHLIGHTS _ Premier League 2023_24.mp4')); ?>"
                type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- React Button and Rating Options -->
        <div>
            <h3>React to this video:</h3>
            <button class="btn btn-primary" onclick="reactButtonClick('👍')">👍 Like</button>
            <button class="btn btn-danger" onclick="reactButtonClick('😡')">😡 Angry</button>
            <button class="btn btn-wow" onclick="reactButtonClick('😮')">😮 Wow</button>
            <button class="btn btn-love" onclick="reactButtonClick('❤️')">❤️ Love</button>
        </div>
        <div>
            <h3>Rate this video:</h3>
            <div class="rating">
                <span onclick="rateVideo(1)">⭐</span>
                <span onclick="rateVideo(2)">⭐</span>
                <span onclick="rateVideo(3)">⭐</span>
                <span onclick="rateVideo(4)">⭐</span>
                <span onclick="rateVideo(5)">⭐</span>
            </div>
        </div>
    </center>

    <!-- Live Match Results -->
    <section id="live-results" class="container">
        <h2>Live Match Results</h2>
        <div class="live-result">
            <p>Real Madrid 3 - 1 Barcelona</p>
            <p>Match Time: 75:00</p>
        </div>
        <div class="live-result">
            <p>Manchester United 2 - 0 Liverpool</p>
            <p>Match Time: 60:00</p>
        </div>
    </section>

    <script>
        function reactButtonClick(emoji) {
            alert('Reacted: ' + emoji);
        }

        function rateVideo(rating) {
            alert('Rated: ' + rating + ' stars');
        }
    </script>
</body>

</html>
<?php /**PATH C:\Users\RUHANI\Desktop\main proj\football (3)\football\resources\views/live.blade.php ENDPATH**/ ?>