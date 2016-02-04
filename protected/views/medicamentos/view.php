<?php
/* @var $this MedicamentosController */
/* @var $model Medicamentos */

$this->breadcrumbs=array(
	'Medicamentoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Medicamentos', 'url'=>array('index')),
	array('label'=>'Create Medicamentos', 'url'=>array('create')),
	array('label'=>'Update Medicamentos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Medicamentos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Medicamentos', 'url'=>array('admin')),
);
?>

<h1>View Medicamentos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'presentacion',
		'volumen',
	),
)); ?>
