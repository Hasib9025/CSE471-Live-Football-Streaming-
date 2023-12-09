<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Live Match - FootBall</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        /* Add your custom styles here */
        .reactions {
            margin-top: 15px;
        }

        .reactions .btn-emoji {
            font-size: 20px;
            margin-right: 10px;
        }

        .rating span {
            font-size: 24px;
            color: #f39c12;
            cursor: pointer;
        }

        .comments {
            margin-top: 15px;
        }

        .comments input[type="text"] {
            width: 60%;
            padding: 8px;
            margin-right: 10px;
        }

        .comments button {
            padding: 8px 15px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
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
		<li><a href="/live" class="hvr-underline-from-center">LIVE</a></li>
		<li  class="active"><a href="/livescore" class="hvr-underline-from-center">LIVE SCORE</a></li>
		<li><a href="/matches" class="hvr-underline-from-center">MATCHES</a></li>
        <li><a href="/highlight" class="hvr-underline-from-center">HIGHLIGHT</a></li>

		<li><a href="/subscription" class="hvr-underline-from-center">SUBSCRIPTION</a></li>
		<li><a href="/profile" class="hvr-underline-from-center">PROFILE</a></li>
        <li><a href="/logout" class="hvr-underline-from-center">LOGOUT</a></li>



      </ul>
                    </div>
                </nav>
            </div>
        </div>
    </section>

    <section id="live-match">
        <div class="container">
            <div class="row">
                <div class="live_match_info">
                    <h2>Live Match: Manchester United vs Liverpool</h2>
                    <p>Date: 2023-12-15 | Location: Old Trafford | Time: 7:00 pm</p>
                    <div class="reactions">
                        <button class="btn btn-emoji" onclick="react('like')"><i class="fa fa-thumbs-up"></i></button>
                        <button class="btn btn-emoji" onclick="react('love')"><i class="fa fa-heart"></i></button>
                        <button class="btn btn-emoji" onclick="react('wow')"><i class="fa fa-surprise"></i></button>
                    </div>
                    <div class="rating">
                        <span onclick="rate(1)">★</span>
                        <span onclick="rate(2)">★</span>
                        <span onclick="rate(3)">★</span>
                        <span onclick="rate(4)">★</span>
                        <span onclick="rate(5)">★</span>
                    </div>
                    <div class="comments">
                        <input type="text" placeholder="Add your comment...">
                        <button onclick="postComment()">Post</button>
                    </div>
                    <!-- Display comments dynamically -->
                    <div id="comment-section"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer" class="clearfix">
        <!-- Footer content goes here (similar to the provided UI) -->
    </section>

    <section id="footer_main" class="clearfix">
        <!-- Footer content goes here (similar to the provided UI) -->
    </section>

    <script>
        // Function to handle user reactions
        function react(emoji) {
            alert('Reacted with ' + emoji);
            // You can send the reaction to the server for storage
        }

        // Function to handle user ratings
        function rate(rating) {
            alert('Rated with ' + rating + ' stars');
            // You can send the rating to the server for storage
        }

        // Function to handle posting comments
        function postComment() {
            var comment = document.querySelector('.comments input[type="text"]').value;
            alert('Commented: ' + comment);
            // You can send the comment to the server for storage
            // Update the UI to display the new comment
            var commentSection = document.getElementById('comment-section');
            commentSection.innerHTML += '<p>' + comment + '</p>';
        }
    </script>
</body>

</html>
