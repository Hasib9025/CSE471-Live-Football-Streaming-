<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Page</title>

    <!-- Add your stylesheets and scripts here -->
    <!-- Example: -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/subscription.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body style="background-image: url('path/to/background-image.jpg'); background-size: cover;">

    <!-- Navigation Bar from Matches Page -->
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
                        <a class="navbar-brand" href="/home"><span class="well_2">FOOT</span>BALL <span
                                class="well_1"><i class="fa fa-dribbble"></i></span></a>
                    </div>
                    <div class="collapse navbar-collapse" id="dropdown-thumbnail-preview">
                    <ul class="nav navbar-nav">
                            <li><a href="/home" class="hvr-underline-from-center">HOME</a></li>
                            <li ><a href="/live" class="hvr-underline-from-center">LIVE</a></li>
                            <li><a href="/livescore" class="hvr-underline-from-center">LIVE SCORE</a></li>
                            <li ><a href="/matches" class="hvr-underline-from-center">MATCHES</a></li>
                            <li class="active"><a href="/subscription" class="hvr-underline-from-center">SUBSCRIPTION</a></li>
                            <li><a href="/highlight" class="hvr-underline-from-center">HIGHLIGHT</a></li>
                            <li><a href="/profile" class="hvr-underline-from-center">PROFILE</a></li>
                            <li><a href="/logout" class="hvr-underline-from-center">LOGOUT</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </section>

    <!-- Subscription Packages Section -->
    <section class="subscription-packages">
        <div class="container">
            <h2 style="color: #fff;">Choose Your Subscription Plan</h2>

            <div class="package">
                <h3>1 Year Subscription</h3>
                <p>Access to premium football streaming for 1 year.</p>
                <p class="price">999 BDT</p>
                <a href="/subscribe" class="subscribe-btn" data-package="1year">Subscribe</a>
            </div>

            <div class="package">
                <h3>6 Month Subscription</h3>
                <p>Access to premium football streaming for 6 months.</p>
                <p class="price">600 BDT</p>
                <a href="/subscribe" class="subscribe-btn" data-package="6months">Subscribe</a>
            </div>

            <div class="package">
                <h3>1 Month Subscription</h3>
                <p>Access to premium football streaming for 1 month.</p>
                <p class="price">150 BDT</p>
                <a href="/subscribe" class="subscribe-btn" data-package="1month">Subscribe</a>
            </div>
        </div>
    </section>

    <!-- Payment Options Section -->
    <section class="payment-options" style="background-color: #f5f5f5;">
        <div class="container">
            <h2 style="color: #333;">Choose Your Payment Method</h2>

            <div class="row">
                <div class="col-md-4">
                    <div class="payment-method">
                        <img src="path/to/bkash.png" alt="bKash" class="img-responsive payment-img">
                        <p>Pay with bKash</p>
                        <a href="#" class="btn btn-success payment-btn" data-method="bkash">Pay Now</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="payment-method">
                        <img src="path/to/nagad.png" alt="Nagad" class="img-responsive payment-img">
                        <p>Pay with Nagad</p>
                        <a href="#" class="btn btn-success payment-btn" data-method="nagad">Pay Now</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="payment-method">
                        <img src="path/to/dbbl.png" alt="DBBL" class="img-responsive payment-img">
                        <p>Pay with Dutch-Bangla Bank</p>
                        <a href="#" class="btn btn-success payment-btn" data-method="dbbl">Pay Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add your custom styles -->
    <style>
        /* Add your custom styles for the subscription page */
        /* Example: */
        .subscription-packages {
            padding: 50px 0;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
        }

        .package {
            border: 1px solid #ddd;
            padding: 20px;
            margin: 20px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.9);
        }

        .package h3 {
            color: #333;
        }

        .price {
            font-size: 18px;
            font-weight: bold;
            color: #007bff;
        }

        .subscribe-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }

        .payment-options {
            padding: 50px 0;
            background-color: #f5f5f5;
        }

        .payment-method {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            text-align: center;
            transition: transform 0.3s;
        }

        .payment-method:hover {
            transform: scale(1.05);
        }

        .payment-img {
            max-width: 100px;
            margin-bottom: 10px;
        }

        .payment-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</body>

</html>
