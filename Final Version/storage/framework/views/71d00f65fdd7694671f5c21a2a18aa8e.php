<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
   <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>
    <div class="navbar-top">
        <section id="header_main" class="clearfix">
            <div class="container">
             <div class="row">
              <div class="col-sm-12 space_all">
               <div class="col-sm-6 space_all">
                <div class="header_main_1">
                  <ul>
                       <li><i class="fa fa-phone"></i><a href="#">+8801733714958</a></li>
                       <li><i class="fa fa-envelope"></i><a href="#">Bracufootball@gmail.com</a></li>
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
                   <li ><a href="/home" class="hvr-underline-from-center">HOME</a></li>
                   <li><a href="/live" class="hvr-underline-from-center">LIVE</a></li>
                   <li><a href="/livescore" class="hvr-underline-from-center">LIVE SCORE</a></li>
                   <li><a href="matches" class="hvr-underline-from-center">MATCHES</a></li>
                   <li><a href="/subscription" class="hvr-underline-from-center">SUBSCRIPTION</a></li>
                   <li class="active"><a href="/profile" class="hvr-underline-from-center">PROFILE</a></li>
                   <li><a href="/logout" class="hvr-underline-from-center">LOGOUT</a></li>



                 </ul>
               </div>
           </nav>
             </div>
            </div>
           </section>

    <!-- Sidenav -->
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $da1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="sidenav">
        <div class="profile">
            <img src="upload/<?php echo e($da1->image); ?>" alt="" width="100" height="100">
            <div>
                <form action="editprofile" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                <input type="file" name="file">
                <button type="submit" class="btn btn-success">Upload</button>
            </form>
            </div>

            <div class="name">
                <?php echo e($da1->name); ?>

            </div>


        </div>

        <div class="sidenav-url">
            <div class="url">

                <hr align="center">
            </div>

        </div>
    </div>
    <!-- End -->

    <!-- Main -->
    <div class="main">
        <h2>IDENTITY</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <table>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><?php echo e($da1->name); ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php echo e($da1->email); ?></td>
                        </tr>
                        <tr>
                            <td>Number</td>
                            <td>:</td>
                            <td><?php echo e($da1->number); ?></td>
                        </tr>




                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <style>

@import url(https://fonts.googleapis.com/css?family=Dancing+Script);

* {
    margin: 0;
}

body {
    background-color: #e8f5ff;
    font-family: Arial;
    overflow: hidden;
}

/* NavbarTop */
.navbar-top {
    background-color: #fff;
    color: #333;
    box-shadow: 0px 4px 8px 0px grey;
    height: 70px;
}

.title {
    font-family: 'Dancing Script', cursive;
    padding-top: 15px;
    position: absolute;
    left: 45%;
}

.navbar-top ul {
    float: right;
    list-style-type: none;
    margin: 0;
    overflow: hidden;
    padding: 18px 50px 0 40px;
}

.navbar-top ul li {
    float: left;
}

.navbar-top ul li a {
    color: #333;
    padding: 14px 16px;
    text-align: center;
    text-decoration: none;
}

.icon-count {
    background-color: #ff0000;
    color: #fff;
    float: right;
    font-size: 11px;
    left: -25px;
    padding: 2px;
    position: relative;
}

/* End */

/* Sidenav */
.sidenav {
    background-color: #fff;
    color: #333;
    border-bottom-right-radius: 25px;
    height: 86%;
    left: 0;
    overflow-x: hidden;
    padding-top: 50px;
    position: absolute;
    top: 145px;
    width: 250px;
}

.profile {
    margin-bottom: 20px;
    margin-top: -12px;
    text-align: center;
}

.profile img {
    border-radius: 50%;
    box-shadow: 0px 0px 5px 1px grey;
}

.name {
    font-size: 20px;
    font-weight: bold;
    padding-top: 20px;
}

.job {
    font-size: 16px;
    font-weight: bold;
    padding-top: 10px;
}

.url, hr {
    text-align: center;
}

.url hr {
    margin-left: 20%;
    width: 60%;
}

.url a {
    color: #818181;
    display: block;
    font-size: 20px;
    margin: 10px 0;
    padding: 6px 8px;
    text-decoration: none;
}

.url a:hover, .url .active {
    background-color: #e8f5ff;
    border-radius: 28px;
    color: #000;
    margin-left: 14%;
    width: 65%;
}

/* End */

/* Main */
.main {
    margin-top: 2%;
    margin-left: 29%;
    font-size: 28px;
    padding: 0 10px;
    width: 58%;
}

.main h2 {
    color: #333;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 24px;
    margin-bottom: 10px;
}

.main .card {
    background-color: #fff;
    border-radius: 18px;
    box-shadow: 1px 1px 8px 0 grey;
    height: auto;
    margin-bottom: 20px;
    padding: 20px 0 20px 50px;
}

.main .card table {
    border: none;
    font-size: 16px;
    height: 270px;
    width: 80%;
}

.edit {
    position: absolute;
    color: #e7e7e8;
    right: 14%;
}

.social-media {
    text-align: center;
    width: 90%;
}

.social-media span {
    margin: 0 10px;
}

.fa-facebook:hover {
    color: #4267b3 !important;
}

.fa-twitter:hover {
    color: #1da1f2 !important;
}

.fa-instagram:hover {
    color: #ce2b94 !important;
}

.fa-invision:hover {
    color: #f83263 !important;
}

.fa-github:hover {
    color: #161414 !important;
}

.fa-whatsapp:hover {
    color: #25d366 !important;
}

.fa-snapchat:hover {
    color: #fffb01 !important;
}

/* End */
    </style>
</body>
</html>
<?php /**PATH C:\Users\RUHANI\Desktop\main proj\football (3)\football\resources\views/profile.blade.php ENDPATH**/ ?>