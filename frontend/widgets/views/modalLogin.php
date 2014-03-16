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
<div class="clear33"></div>