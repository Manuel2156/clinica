<?php
/* @var $this CitasController */
/* @var $model Citas */

$this->breadcrumbs=array(
	'Citases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Citas', 'url'=>array('index')),
	array('label'=>'Create Citas', 'url'=>array('create')),
	array('label'=>'Update Citas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Citas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Citas', 'url'=>array('admin')),
);
?>

<h1>View Citas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fecha',
		'id_paciente',
		'id_espec',
		'id_medico',
	),
)); ?>
