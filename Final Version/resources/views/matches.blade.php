<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Matches - FootBall</title>
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
                            <li class="active"><a href="/matches" class="hvr-underline-from-center">MATCHES</a></li>
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

    <section id="matches">
        <div class="container">
            <div class="row">
                <div class="matches_table">
                    <h2>Upcoming Matches</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Teams</th>
                                <th>Location</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2023-12-15</td>
                                <td>Manchester City vs Arsenal</td>
                                <td>Green Park</td>
                                <td>3:00 pm</td>
                            </tr>
                            <tr>
                                <td>2023-12-24</td>
                                <td>Crocodiles vs Stream Sharks</td>
                                <td>Big Stadium</td>
                                <td>4:00 pm</td>
                            </tr>
                            <tr>
                                <td>2023-12-21</td>
                                <td>Paris Saint-Germain vs Real Madrid</td>
                                <td>Parc des Princes</td>
                                <td>8:45 pm</td>
                            </tr>
                            <tr>
                                <td>2023-12-23</td>
                                <td>Real Madrid vs Barcelona</td>
                                <td>Etihad Stadium</td>
                                <td>9:00 pm</td>
                            </tr>
                            <tr>
                                <td>2023-12-21</td>
                                <td>Manchester City vs Real Madrid</td>
                                <td>Parc des Princes</td>
                                <td>8:45 pm</td>
                            </tr>
                            <tr>
                                <td>2023-12-23</td>
                                <td>Manchester City vs Barcelona</td>
                                <td>Etihad Stadium</td>
                                <td>9:00 pm</td>
                            </tr>
                            <tr>
                                <td>2023-12-21</td>
                                <td>Paris Saint-Germain vs Real Madrid</td>
                                <td>Parc des Princes</td>
                                <td>8:45 pm</td>
                            </tr>
                            <tr>
                                <td>2023-12-23</td>
                                <td>Manchester City vs Barcelona</td>
                                <td>Etihad Stadium</td>
                                <td>9:00 pm</td>
                            </tr>
                            <tr>
                                <td>2023-12-20</td>
                                <td>Liverpool vs Juventus</td>
                                <td>Anfield</td>
                                <td>7:30 pm</td>
                            </tr>
                            <tr>
                                <td>2023-12-22</td>
                                <td>Chelsea vs Bayern Munich</td>
                                <td>Stamford Bridge</td>
                                <td>8:00 pm</td>
                            </tr>

                            <!-- Add more rows for additional matches -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section id="live">
        <div class="container">
            <div class="row">
                <div class="live_scores text-center"> <!-- Updated to center the live scores -->
                    <h2>Live Matches</h2>

                    <!-- Leagues Buttons -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary" onclick="showLeague('laliga')">La Liga</button>
                        <button type="button" class="btn btn-primary" onclick="showLeague('epl')">EPL</button>
                        <button type="button" class="btn btn-primary" onclick="showLeague('ucl')">UEFA Champions League</button>
                    </div>

                    <!-- Scores Sections -->
                    <div id="laliga" style="display: none;">
                        <div class="score">
                            <h3>Barcelona 2 - 0 Real Madrid</h3>
                            <h3>Real Betis 1 - 1 Atletico Madrid</h3>
                            <!-- Add more scores as needed -->
                        </div>
                    </div>

                    <div id="epl" style="display: none;">
                        <div class="score">
                            <h3>Manchester United 1 - 1 Liverpool</h3>
                            <h3>Chelsea 3 - 2 Manchester City</h3>
                            <!-- Add more scores as needed -->
                        </div>
                    </div>

                    <div id="ucl" style="display: none;">
                        <div class="score">
                            <h3>Paris Saint-Germain 3 - 2 Bayern Munich</h3>
                            <h3>Real Madrid 2 - 1 Juventus</h3>
                            <!-- Add more scores as needed -->
                        </div>
                    </div>
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
        function showLeague(league) {
            // Hide all leagues
            document.getElementById('laliga').style.display = 'none';
            document.getElementById('epl').style.display = 'none';
            document.getElementById('ucl').style.display = 'none';

            // Show the selected league
            document.getElementById(league).style.display = 'block';
        }
    </script>
</body>

</html>
