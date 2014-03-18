<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'user-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<div class="col-md-6">
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    <fieldset>
        <div class="form-group">
            <?php echo $form->labelEx($model,'name'); ?>
            <?php $placeholder= $model->getAttributeLabel('name'); ?>
            <?php echo $form->textField($model,'name', array('class'=>'form-control','placeholder'=>"$placeholder")); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model,'password'); ?>
            <?php $placeholder= $model->getAttributeLabel('password'); ?>
            <?php echo $form->textField($model,'password', array('class'=>'form-control','placeholder'=>"$placeholder")); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model,'confirm_password'); ?>
            <?php $placeholder= $model->getAttributeLabel('confirm_password'); ?>
            <?php echo $form->textField($model,'confirm_password', array('class'=>'form-control','placeholder'=>"$placeholder")); ?>
        </div>
        
        <div class="form-group">
            <?php echo $form->labelEx($model,'email'); ?>
            <?php $placeholder= $model->getAttributeLabel('email'); ?>
            <?php echo $form->textField($model,'email', array('class'=>'form-control','placeholder'=>"$placeholder")); ?>
        </div>
        
        <div class="form-group">
            <div class="col-md-6 no-pad">
                <?php echo $form->labelEx($model,'mobile'); ?>
                <?php $placeholder= $model->getAttributeLabel('mobile'); ?>
                <?php echo $form->telField($model,'mobile', array('class'=>'form-control','placeholder'=>"$placeholder")); ?>
            </div>
            <div class="col-md-6 no-pad">
                <?php echo $form->labelEx($model,'phone'); ?>
                <?php $placeholder= $model->getAttributeLabel('phone'); ?>
                <?php echo $form->telField($model,'phone', array('class'=>'form-control','placeholder'=>"$placeholder")); ?>
            </div>
        </div>
        
        <div class="form-group">
            <?php echo $form->labelEx($model,'address'); ?>
            <?php $placeholder= $model->getAttributeLabel('address'); ?>
            <?php echo $form->textField($model,'address', array('class'=>'form-control','placeholder'=>"$placeholder")); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model,'postnr'); ?>
            <?php $placeholder= $model->getAttributeLabel('postnr'); ?>
            <?php echo $form->telField($model,'postnr', array('class'=>'form-control','placeholder'=>"$placeholder")); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model,'county_id'); ?>
            <?php $placeholder= $model->getAttributeLabel('county_id'); ?>
            <?php echo $form->textField($model,'county_id', array('class'=>'form-control','placeholder'=>"$placeholder")); ?>
        </div>
        
        <div class="form-group">
            <?php echo $form->labelEx($model,'city_id'); ?>
            <?php $placeholder= $model->getAttributeLabel('city_id'); ?>
            <?php echo $form->textField($model,'city_id', array('class'=>'form-control','placeholder'=>"$placeholder")); ?>
        </div>
        
        <div class="form-group">
            <?php echo CHtml::submitButton('Register', array('class'=>'btn btn-lg btn-success')); ?>
        </div>
    </fieldset>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->