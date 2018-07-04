                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="utf-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                
                    <title>BSFokeogun | Welcome</title>

                    <!-- Bootstrap -->
                    <link href="css/bootstrap.min.css" rel="stylesheet">
                <link rel="stylesheet" type="text/css" href="css/style.css">
                    <meta name="keywords" content="Baptist Student Fellowship,Oke-ogun Baptist Conference,Baptist Student Fellowship,Baptist Student,Baptist Fellowship,Student Fellowship,Baptist,Student,Fellowship,BSF" />
                    <meta name="description" content="Baptist Student Fellowship,Oke-ogun Baptist Conference,Baptist Student Fellowship,Baptist Student,Baptist Fellowship,Student Fellowship,Baptist,Student,Fellowship,BSF">
                    <meta http-equiv="refresh" content=" " />
                    <meta name="author" content="Official-bbass">
                <style>
                body{
                    font: 400  20px Lato, Helvetica;
                    line-height: 1.5;
                    background-color:  #d9d9d9;
                    color: black;
                }

                .bbass {
                    margin-top: 70px;
                }


                .navbar {
                    margin-top: 0;
                    background-color:   #003300;
                    z-index: 9999;
                    border: 0;
                    font-size: 12px !important;
                    line-height: 1.42857143 !important;
                    letter-spacing: 3px;
                    border-radius: 0;
                    font-family: Montserrat, sans-serif, Helvetica;
                }
                .navbar li a, .navbar .navbar-brand {
                    color: white  !important;
                }
                .navbar-nav li a:hover, .navbar-nav li.active a {
                    color: black !important;
                    background-color: #fff !important;
                }
                .navbar-default .navbar-toggle {
                    
                    color: #fff !important;
                } 
                .panel-heading {
                    background-color: 
                
                }

                .panel-body{
                    background-color: white;  
                }

                .jumbotron {
                    background:url('img/pu.jpg');
                    color: #fff;
                    }
                footer {
                    background-color:  #003300;
                    color: white;
                }
                    @media screen and (max-width: 768px) {
                    .col-sm-4 {
                    text-align: center;
                    margin: 25px 0;
                    }

                @media screen and (max-width: 480px) {
                    .logo {
                        font-size: 150px;
                    }
                </style>  
                </head>
                <body>
                
                <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#" data-toggle="tooltip" title="BAPTIST STUDENT FELLOWSHIP,OKE-OGUN BAPTIST CONFERENCE"><span style="color: orange;">BSFokeogun</span></a>
                
                <script>
                
                    $(document).ready(function(){
                    $('[data-toggle="tooltip"]').tooltip();
                
                    });
                </script>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php">HOME</a></li>
                    <li><a href="Associations.html">ASSOCIATIONS</a></li>
                    <li><a href="Executives.html">EXECUTIVES</a></li>
                    <li><a href="History.html">HISTORY</a></li>
                    <li><a href="Gallery.html">GALLERY</a></li>
                    <li><a href="Contact.html">CONTACT US</a></li>
                    </ul>
                </div>
                </div>
                </div>
                </nav>


                <div class="container">
                <div class="bbass">
                <?php

                $Bbass = "Motto : By these shall all men know that you are my disciples if you love one another. John 13:35";

                echo "<marquee> <p style='color:red;font-size:20px;font-Family:Bradley Hand ITC;'> $Bbass </p> </marquee>"; 

                ?>
                </div>
                </div>

                <div class="container">
                    <div class="row">
                    <div class="col-md-3">

                        <!--time-->
                        <?php
                        $time=date("G:i:s a l" );

                            echo $time. "<p>";

                        if($time>=0 && $time<12)
                            {
                            echo "<p style='color:red;font-size:25px;font-Family:Helvetica;'> Good Morning </p>";
                            }
                            elseif($time >=12 && $time<=16)
                            {
                            echo "<p style='color:red;font-size:25px;font-Family:Helvetica;'> Good Afternoon </p>";
                            }
                            else
                            {
                            echo "<p style='color:red;font-size:25px;font-Family:Helvetica;'> Good Evening </p>";
                            }

                        ?>

                <br>

                        <div class="panel panel-success">
                        <div class="panel-heading">Programs</div>
                        <div class="panel-body">
                            <ul>
                            <li>Family Gathering</li>
                            <li>Village Outreach</li>
                            <li>Smac Meeting</li>
                            <li>Divine Authority</li>
                            <li>Student Night</li>
                            <li>International Conference</li>
                            <li>Leadership Training Conference</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/az.jpg" alt="BSFOke" >
                        <div class="carousel-caption">
                        
                        <p>Village Outreach at foomu village,Igboho</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="img/bb.jpg" alt="BSFOke" >
                    <div class="carousel-caption">
                    <p>Village Outreach at foomu village,Igboho</p>
                        </div>
                    </div>
                    
                    <div class="item">
                        <img src="img/cc.jpg" alt="BSFOke" >
                    <div class="carousel-caption">
                        
                        <p>Village Outreach at foomu village,Igboho</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="img/dd.jpg" alt="BSFOke" >
                    <div class="carousel-caption">
                        
                    <p>Village Outreach at foomu village,Igboho</p>
                        </div>
                    </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
                </div>

                <div class="col-md-3">
                        <div class="panel panel-success">
                        <div class="panel-heading">Aims & Objectives</div>
                        <div class="panel-body">
                            <ul>
                                <li>To lead students to a commitment to Jesus Christ as Saviour and Lord.
                                </li>To involve them in the study of biblical truth and Christian discipleship.
                                <li>To lead them to relate academics discipline to their Christian faith.
                                </li>To involve them in responsible church membership and denominational understanding and participation.
                                <li>To involve them in the study and pratical participation mission for kingdom expansion.</li>    
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <section>
                <div class="container">
                <div class="jumbotron text-center">
                    <p></span><h1 class="ser"> 2018 <span class="glyphicon glyphicon-calendar"></span> UPCOMING EVENTS</h1></p>
                </div>
                </div>
                </section>

                <div class="container">
                <div class="row">
                    <div class="col-md-3 well">
                    <button type="button" class="btn btn-success"><span class="bagde">20th-22nd<br>JULY</span></button> <p>ANNUAL RETREAT (DIVINE AUTHORITY)
                        <hr>
                    DIVINE AUTHORITY
                    <hr>
                    FIRST BAPT. CHURUH,AGO-ARE</p>

                </div>

                <br>
                
                    <div class="col-md-3 well">
                        <button type="button" class="btn btn-success"><span class="bagde">28th-2nd<br>AUG-SEPT.</span></button> <p>NATIONAL STUDENTS' & YOUTH CONGRESS, 2018
                        <hr>
                        INTERNATIONAL CONF.
                        <hr>
                    BOWEN UNIVERSTY,IWO</p>

                </div>

                <br>
                    <div class="col-md-3 well">
                        <button type="button" class="btn btn-success"><span class="bagde">13<br>OCT</span></button><p>SMAC/EXCO RETREAT
                        <hr>
                        EXCO RETREAT
                        <hr>
                        AGO-ARE</p>

                </div>
                <br>
                    <div class="col-md-3 well">
                        <button type="button" class="btn btn-success"><span class="bagde">27<br>APR</span></button> <p class="font-family:helvetica;">LEADERSHIP TRAINING CONFERENCE
                        <hr>
                    
                        FIRST BAPT. CHURCH,OKEHO</p>
                </div>

                </div>
                </div>

                </body>




                <footer class="container-fluid text-center">
                <p>Powered by OfficialBbass &copy; 2018</p> 
                </footer>

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                    
                    <script src="js/bootstrap.min.js"></script>
                </body>
                </html>