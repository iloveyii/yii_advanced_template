<!DOCTYPE html>
<html>
    <head>
        <title>Twitter Bootstrap 3 - Frontend Template </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
        <link type="text/css" rel="stylesheet" href="css/main.css" />
        <link type="text/css" rel="stylesheet" href="css/index.css" />
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
                        <div class="social">
                            <div class="social twitter">
                                <i class="fa fa-twitter fa-lg"></i><a href="#"> twitter</a>
                            </div>
                            <div class="social facebook">
                                <i class="fa fa-facebook fa-lg"></i><a href="#">facebook</a>
                            </div>
                            <div class="social google-plus">
                                <i class="fa fa-google-plus fa-lg"></i><a href="#">Google</a>
                            </div>
                            <div class="social rss">
                                <i class="fa fa-rss fa-lg"></i><a href="#"> rss</a>
                            </div>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-top">
                      Sign up today <a class="btn btn-info btn-sm">sign up</a>  
                    </div>
                </div>
            </div>
            <!-- Font Awesome 
            =================================== -->
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-middle">
                    <div class="col-md-4">
                        <div class="tricolumn">
                            <ul class="menulist">
                              <li><a href="#">Home</a></li>
                              <li><a href="#">Products List</a></li>
                              <li><a href="#">Tutorials</a></li>
                            </ul>
                      </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="tricolumn">
                            <ul class="menulist">
                              <li><a href="#">Menu Systems</a></li>
                              <li><a href="#">Web Widgets</a></li>
                              <li><a href="#">Slide Shows/Galleries</a></li>
                              <li><a href="#">CSS Templates</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        
                        <div class="tricolumn">
                            <ul class="menulist">
                               <li><a href="#">Product Updates</a></li>
                               <li><a href="#">Downloads Center</a></li>
                               <li><a href="#">Support &amp; Contact Info</a></li>
                               <li><a href="#">Knowledge Base</a></li>
                             </ul>
                       </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="footer-bot">
                <p>Copyright &COPY; SoftHem Tuts.
                    <a id="login-modal" data-toggle="modal"  href="#terms">Terms & Conditions</a>
                </p>
                <!-- Modal -->
                <div class="modal fade" id="terms" role="dialog" aria-hidden="true" tabindex="-1">
                    <div class="modal-dialog dg">
                        <div class="modal-content" style="border: 10px solid #7A7A7A;">
                            <i id="pty_close" data-dismiss="modal" class="fa fa-times-circle-o icon-md pull-right"></i>
                            <div class="modal-header" style="padding: 10px;">
                                <img class="col-xs-3 col-sm-2 col-md-2 img-circle img-responsive" src="<?php echo Yii::app()->baseUrl . '/img/login-icon.png'; ?>" alt="Login here">
                                <h3>You need to login</h3>
                            </div>
                            <div class="modal-body" style="padding: 20px 0 0;">
                                <?php $this->widget('Modallogin'); ?>
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
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/sb-admin.js"></script>
    </body>
    
</html>