<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<br /><br /><br />
<div class="col-md-12">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
    	
    	<div class="col-md-6 col-md-offset-3">
    		<?php echo $form->errorSummary($model); ?>
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h4 class="panel-title icon-xs"><i class="fa fa-unlock icon-sm"></i>Login</h4>
			 	</div>
			  	<div class="panel-body">
			    	<!-- <form accept-charset="UTF-8" role="form"> -->
                    <fieldset>
			    	  	<div class="form-group">
                            <?php $placeholder= $model->getAttributeLabel('username'); ?>
			    		    <?php echo $form->textField($model,'username', array('class'=>'form-control','placeholder'=>"$placeholder")); ?>
			    		</div>
			    		<div class="form-group">
                            <?php $placeholder= $model->getAttributeLabel('password'); ?>
			    			<?php echo $form->passwordField($model,'password', array('class'=>'form-control','placeholder'=>"$placeholder")); ?>
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<?php echo $form->checkBox($model,'rememberMe'); ?>
			    	    		<?php echo $form->label($model,'rememberMe', array('class'=>'form-control', 'style'=>'border:none;')); ?>
			    	    	</label>
			    	    </div>
                        <div class="form-group">
                            <?php echo GxHtml::link($model->getAttributeLabel('forgotPassword'),array('site/forgotpassword'), array('class'=>'pull-right')); ?>
                            <br />
                        </div>
			    	    <?php echo CHtml::submitButton('Login', array('class'=>'btn btn-lg btn-success btn-block')); ?>
			    		<!--  <input class="btn btn-lg btn-success btn-block" type="submit" value="Login"> -->
			    	</fieldset>
			      	<!-- </form> -->
			      	
                      <hr/>
                    <center><h4>OR</h4></center>
                    <a class="btn btn-lg btn-facebook btn-block" href="?social=facebook" title="Login via facebook">Login via facebook</a>
			    </div>
			</div>
		</div>
<?php $this->endWidget(); ?>
</div>