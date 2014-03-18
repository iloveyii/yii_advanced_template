<div class="modal fade" id="terms" role="dialog" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog dg">
        <div class="modal-content" style="border: 10px solid #7A7A7A;">
            <i id="pty_close" data-dismiss="modal" class="fa fa-times-circle-o icon-md pull-right"></i>
            <div class="modal-header" style="padding: 10px;">
                <img class="col-xs-3 col-sm-2 col-md-2 img-circle img-responsive" src="<?php echo Yii::app()->baseUrl . '/img/login-icon.png'; ?>" alt="Login here">
                <h3>You need to login</h3>
            </div>
            <div class="modal-body" style="padding: 20px 0 0;">


                <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <?php echo CHtml::beginForm(); ?>
                    <fieldset>
                        <div class="form-group">
                            <?php echo CHtml::activeTextField($form,'username', array('class'=>'form-control','placeholder'=>"E-mail")); ?>
                            <?php echo CHtml::error($form,'username'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo CHtml::activePasswordField($form,'password', array('class'=>'form-control','placeholder'=>"Password")); ?>
                            <?php echo CHtml::error($form,'password'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo CHtml::link('Forgot Password?',array('site/forgotpassword'), array('class'=>'pull-right')); ?>
                            <br />
                        </div>
                        <?php echo CHtml::submitButton('Login', array('class'=>'btn btn-lg btn-success btn-block')); ?>
                    </fieldset>
                    
                    <hr/>
                    <a class="btn btn-lg btn-facebook btn-block" href="login?social=facebook" title="Login via facebook">Login via facebook</a>

                    <?php echo CHtml::endForm(); ?>
                </div>
                
            </div>
            <div class="clear33"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>              
                
                
                
