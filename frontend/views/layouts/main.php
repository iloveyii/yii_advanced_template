<!DOCTYPE html>
<html>
    <head>
        <title>Twitter Bootstrap 3 - Frontend Template </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
        <link type="text/css" rel="stylesheet" href="css/main.css" />
        <link type="text/css" rel="stylesheet" href="css/sb-admin.css" />
        <link type="text/css" rel="stylesheet" href="css/font-awesome.css" rel="stylesheet">
        
    </head>
    <body>
        
        <!-- wrapper 
        ============= -->
        <div id="page-wrapper">
            <!-- header-bar
            ================================== -->
            <div class="container header-bar">
                <div class="row">
                    <div class="col-md-12">
                        <img alt="Home" src="img/logo.png"> 
                        <div class="pull-right" style="line-height: 70px;">
                                <div class="pull-left">
                                    <form action="" class="navbar-form navbar-right">
                                    <div class="input-group">
                                        <input type="Search" placeholder="Search..." class="form-control" />
                                        <div class="input-group-btn">
                                            <button class="btn btn-info">
                                            <span class="glyphicon glyphicon-search"></span>
                                            </button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                           
                                <div class="pull-right">
                                    <form action="" class="navbar-form navbar-right">
                                    <div class="input-group">
                                        <?php 
                                            $this->widget('LanguageSelector');
                                        ?>
                                    </div>
                                    </form>
                                </div>
                           
                            </div>

                    </div>
                </div>
            </div>
            <!-- / header-bar -->
            
            <div class="container">
                <!-- Navigation bar with drop down box
                ================================================== -->
                <nav class="navbar" role="navigation" style="background: none repeat scroll 0 0 #676767;">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                              <span class="sr-only">Menu</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo $this->createUrl('site/index');?>"><?php echo Yii::t('app','Home') ; ?></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav">
                                  <li><a href="<?php echo $this->createUrl('site/contact');?>"><?php echo Yii::t('app','Contact'); ?></a></li>
                            </ul>

                          </div><!-- /.navbar-collapse -->

                    </div><!-- /.container -->
                </nav>
                <!-- Navigation -->
                
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="list-group">
                            <strong class="list-group-item"> Categories </strong>
                            <a class="list-group-item" href="/mobiles">Mobiles</a>
                            <a class="list-group-item" href="/covers">Covers</a>
                            <a class="list-group-item" href="/headphones">Headphones</a>
                            <a class="list-group-item" href="/chargers">Chargers</a>          
                        </div>
                        
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Carousel 
                                ============================================= -->
                                <div id="carousel-id" class="carousel slide" data-ride="carousel" data-interval="3000">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-id" data-slide-to="1"></li>
                                        <li data-target="#carousel-id" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner" style="height: 200px;">
                                        <div class="item active">
                                            <img style="height: 200px;" alt="image 1" src="img/img1.jpeg" />
                                            <div class="container">
                                                <div class="carousel-caption">
                                                    <h1>My Heading Text</h1>
                                                    <p>This text will appear on the slide</p>
                                                    <p><a href="#" class="btn btn-primary">Learn more</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <img alt="image 1" src="img/img2.jpeg" />
                                            <div class="container">
                                                <div class="carousel-caption">
                                                    <h1>My Heading Text</h1>
                                                    <p>This text will appear on the slide</p>
                                                    <p><a href="#" class="btn btn-primary">Learn more</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <img alt="image 1" src="img/img3.jpeg" />
                                            <div class="container">
                                                <div class="carousel-caption">
                                                    <h1>My Heading Text</h1>
                                                    <p>This text will appear on the slide</p>
                                                    <p><a href="#" class="btn btn-primary">Learn more</a></p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <a href="#carousel-id" class="left carousel-control" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a href="#carousel-id" class="right carousel-control" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div> 
                                <!-- Carousel -->
                            </div>
                        </div>
                        
                        <div class="row">
                            <?php echo $content; ?>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
        <!-- / Wrapper -->

        <!-- Footer and Modal -->
        <div class="container">
            <!-- Font Awesome 
            =================================== -->
            <div class="row">
                <div class="well" style="text-align: center;">
                    <a href="#"> <i class="icon-lg fa fa-linkedin"></i></a>
                    <a href="#"> <i class="icon-lg fa fa-android"></i></a>
                    <a href="#"> <i class="icon-lg fa fa-twitter"></i></a>
                    <a href="#"> <i class="icon-lg icon-lg fa fa-youtube"></i></a>
                    <a href="#"> <i class="icon-lg fa fa-skype"></i></a>
                    <a href="#"> <i class="icon-lg fa fa-google-plus"></i></a>
                    <a href="#"> <i class="icon-lg fa fa-apple"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <br />
                    <p>Copyright &COPY; SoftHem Tuts.
                        <a data-toggle="modal"  href="#terms">Terms & Conditions</a>
                    </p>
                    <!-- Modal -->
                    <div class="modal fade" id="terms" role="dialog" aria-hidden="true" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3>Terms and Conditions</h3>
                                </div>
                                <div class="modal-body">
                                    <p>The text for terms goes here...</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/sb-admin.js"></script>
    </body>
    
</html>