<?php
/* @var $this CountyController */
/* @var $model County */

$this->breadcrumbs=array(
	'Counties'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List County', 'url'=>array('index')),
	array('label'=>'Manage County', 'url'=>array('admin')),
);
?>

<h1>Create County</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>