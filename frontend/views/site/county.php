<?php
/* @var $this CountyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Counties',
);

?>

<h1>Counties</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
