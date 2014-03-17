<!DOCTYPE html>
<html>
    <head>
        <title>Mobilz - Frontend Template </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/bootstrap.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/main.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/index.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/sb-admin.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/font-awesome.css" rel="stylesheet">
        
    </head>
    <body>
        
        <!-- wrapper 
        ============= -->
        <div id="page-wrapper">
            <!-- header-bar
            ================================== -->
            <div class="container header-bar">
                <div class="row">
                    <div class="col-md-12" style="line-height: 50px; padding: 5px 0px 0px;">
                        <div class="col-md-2">
                            <img alt="Home" src="<?php echo Yii::app()->baseUrl; ?>/img/logo.png"> 
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 pull-right">
                            <div class="col-md-8 col-xs-8">
                                <form action="" class="navbar-form no-pad">
                                    <div class="input-group">
                                        <input type="Search" placeholder="Search..." class="form-control" />
                                        <div class="input-group-btn">
                                            <button class="btn btn-info">
                                                <span style="margin: 0;" class="glyphicon glyphicon-search"></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-4 col-xs-4 no-pad">
                                <form action="" class="navbar-form no-pad">
                                <div class="input-group pull-right">
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
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" style="background-color: #3373A5;">
                              <span class="sr-only">Menu</span>
                              <span class="icon-bar" style="background-color: #FFF;"></span>
                              <span class="icon-bar" style="background-color: #FFF;"></span>
                              <span class="icon-bar" style="background-color: #FFF;"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo $this->createUrl('ad/index');?>"><?php echo Yii::t('app','Home') ; ?></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav" id="main-menu">
                                  <li><a href="<?php echo $this->createUrl('site/product');?>"><?php echo Yii::t('app','Product'); ?></a></li>
                                  <li><a href="<?php echo $this->createUrl('site/contact');?>"><?php echo Yii::t('app','Contact'); ?></a></li>
                                  <li><a href="<?php echo $this->createUrl('site/contact');?>"><?php echo Yii::t('app','Login'); ?></a></li>
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
                        
                        <div class="list-group">
                            <div class="input-group custom-search-form">
                                <input type="text" placeholder="Search..." class="form-control">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                        
                        <div class="list-group">
                            <?php echo County::model()->getCountyCityList($this->county) ;?>
                        </div>
                        
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Carousel 
                                ============================================= -->
                                <?php echo Carousel::model()->getCarousel() ;?>
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
                        <div class="cc">
                           <div class="col-md-3 col-sm-4 col-xs-4 no-pad">
                                  <div class="col-md-8 col-sm-8 col-xs-8 no-pad cc-left" style="background-color: #FFF;">
                                      <div class="">
                                          <img class="cimg img-responsive" src="img/visa.png" />
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-4 col-xs-4 no-pad cc-right">
                                      <i class="fa fa-check"></i>
                                  </div>
                          </div>
                           <div class="col-md-3 col-sm-4 col-xs-4 no-pad">
                                  <div class="col-md-8 col-sm-8 col-xs-8 no-pad cc-left" style="background-color: #FFF;">
                                      <div class="">
                                          <img class="cimg img-responsive" src="img/master.png" />
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-4 col-xs-4 no-pad cc-right">
                                      <i class="fa fa-check"></i>
                                  </div>
                          </div>
                           <div class="col-md-3 col-sm-4 col-xs-4 no-pad">
                                  <div class="col-md-8 col-sm-8 col-xs-8 no-pad cc-left" style="background-color: #FFF;">
                                      <div class="">
                                          <img class="cimg img-responsive" src="img/discover.png" />
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-4 col-xs-4 no-pad cc-right">
                                      <i class="fa fa-check"></i>
                                  </div>
                          </div>
                           <div class="col-md-3 col-sm-4 col-xs-4 no-pad">
                                  <div class="col-md-8 col-sm-8 col-xs-8 no-pad cc-left" style="background-color: #FFF;">
                                      <div class="">
                                          <img class="cimg img-responsive" src="img/maestro.png" />
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-sm-4 col-xs-4 no-pad cc-right">
                                      <i class="fa fa-check"></i>
                                  </div>
                          </div>
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
                        <div class="social">
                            <div class="col-social">
                                <div class="twitter" style="padding: 12px 0;">
                                    <a href="#"><i class="fa fa-twitter fa-lg"></i> </a>
                                </div>
                            </div>
                            <div class="col-social">
                                <div class="facebook" style="padding: 12px 0;">
                                    <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                </div>
                            </div>
                            <div class="col-social">
                                <div class="google-plus" style="padding: 12px 0;">
                                    <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                </div>
                            </div>
                            <div class="col-social">
                                <div class="rss" style="padding: 12px 0;">
                                    <a href="#"><i class="fa fa-rss fa-lg"></i> </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <div class="col-md-4">
                        
                        <div class="tricolumn">
                            <ul class="menulist">
                               <li><a href="#">Product Updates</a></li>
                               <li><a href="#">Downloads Center</a></li>
                               <li><a href="#">Support &amp; Contact Info</a></li>
                             </ul>
                            <div class="cc">
                                 <div class="col-md-3 col-sm-4 col-xs-4 no-pad">
                                        <div class="col-md-8 col-sm-8 col-xs-8 no-pad cc-left" style="background-color: #FFF;">
                                            <div class="">
                                                <img class="cimg img-responsive" src="img/nordea.png" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 no-pad cc-right">
                                            <i class="fa fa-check"></i>
                                        </div>
                                </div>
                                 <div class="col-md-3 col-sm-4 col-xs-4 no-pad">
                                        <div class="col-md-8 col-sm-8 col-xs-8 no-pad cc-left" style="background-color: #FFF;">
                                            <div class="">
                                                <img class="cimg img-responsive" src="img/handels.png" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 no-pad cc-right">
                                            <i class="fa fa-check"></i>
                                        </div>
                                </div>
                                 <div class="col-md-3 col-sm-4 col-xs-4 no-pad">
                                        <div class="col-md-8 col-sm-8 col-xs-8 no-pad cc-left" style="background-color: #FFF;">
                                            <div class="">
                                                <img class="cimg img-responsive" src="img/swed.png" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 no-pad cc-right">
                                            <i class="fa fa-check"></i>
                                        </div>
                                </div>
                                 <div class="col-md-3 col-sm-4 col-xs-4 no-pad">
                                        <div class="col-md-8 col-sm-8 col-xs-8 no-pad cc-left" style="background-color: #FFF;">
                                            <div class="">
                                                <img class="cimg img-responsive" src="img/seb.png" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 no-pad cc-right">
                                            <i class="fa fa-check"></i>
                                        </div>
                                </div>


                            </div>
                       </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="footer-bot">
                <p>Copyright &COPY; SoftHem.
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
        <script src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.js"></script>
        <script src="<?php echo Yii::app()->baseUrl; ?>/js/bootstrap.js"></script>
        <script src="<?php echo Yii::app()->baseUrl; ?>/js/sb-admin.js"></script>
    </body>
    
</html>