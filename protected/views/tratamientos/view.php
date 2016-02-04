<?php
/* @var $this TratamientosController */
/* @var $model Tratamientos */

$this->breadcrumbs=array(
	'Tratamientoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tratamientos', 'url'=>array('index')),
	array('label'=>'Create Tratamientos', 'url'=>array('create')),
	array('label'=>'Update Tratamientos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tratamientos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tratamientos', 'url'=>array('admin')),
);
?>

<h1>View Tratamientos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_consulta',
		'id_medicamento',
	),
)); ?>
