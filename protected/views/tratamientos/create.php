<?php
/* @var $this TratamientosController */
/* @var $model Tratamientos */

$this->breadcrumbs=array(
	'Tratamientoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tratamientos', 'url'=>array('index')),
	array('label'=>'Manage Tratamientos', 'url'=>array('admin')),
);
?>

<h1>Create Tratamientos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>