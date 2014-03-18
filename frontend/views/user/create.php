<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<div class="col-md-12">
    <h1>Skapa Konto</h1>
    <p>Dina bevakningar och annonser på ett ställe är gratis!</p>
    <?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>