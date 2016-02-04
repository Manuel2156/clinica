<?php
/* @var $this TratamientosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tratamientoses',
);

$this->menu=array(
	array('label'=>'Create Tratamientos', 'url'=>array('create')),
	array('label'=>'Manage Tratamientos', 'url'=>array('admin')),
);
?>

<h1>Tratamientoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
