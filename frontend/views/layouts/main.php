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
        <!-- Navigation bar with drop down box
        ================================================== -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
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
                      <div class="col-md-5 pull-right">
                          <div class="col-md-8">
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
                          <div  id="language-selector" style="float:right; margin:5px;">
                            <?php 
                                $this->widget('LanguageSelector');
                            ?>
                          </div>
                      </div>

                  </div><!-- /.navbar-collapse -->
        
            </div><!-- /.container -->
        </nav>
        <!-- Navigation -->
        
        <!-- wrapper 
        ============= -->
        <div id="page-wrapper">
            
        <?php echo $content; ?>
            
        </div>
        <!-- / Wrapper -->

        <!-- Footer and Modal -->
        <div class="container">
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
        <script src="js/jquery.metisMenu.js"></script>
        <script src="js/dataTables.bootstrap.js"></script>
        <script src="js/jquery.dataTables.js"></script>
    </body>
    
</html>