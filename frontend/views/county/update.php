<?php
/* @var $this CountyController */
/* @var $model County */

$this->breadcrumbs=array(
	'Counties'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

//$this->menu=array(
//	array('label'=>'List County', 'url'=>array('index')),
//	array('label'=>'Create County', 'url'=>array('create')),
//	array('label'=>'View County', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage County', 'url'=>array('admin')),
//);
?>

<h1>Update County <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>