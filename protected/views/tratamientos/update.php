<?php
/* @var $this TratamientosController */
/* @var $model Tratamientos */

$this->breadcrumbs=array(
	'Tratamientoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tratamientos', 'url'=>array('index')),
	array('label'=>'Create Tratamientos', 'url'=>array('create')),
	array('label'=>'View Tratamientos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tratamientos', 'url'=>array('admin')),
);
?>

<h1>Update Tratamientos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>