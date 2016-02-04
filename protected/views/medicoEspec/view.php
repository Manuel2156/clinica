<?php
/* @var $this MedicoEspecController */
/* @var $model MedicoEspec */

$this->breadcrumbs=array(
	'Medico Especs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MedicoEspec', 'url'=>array('index')),
	array('label'=>'Create MedicoEspec', 'url'=>array('create')),
	array('label'=>'Update MedicoEspec', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MedicoEspec', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MedicoEspec', 'url'=>array('admin')),
);
?>

<h1>View MedicoEspec #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_medico',
		'id_espec',
	),
)); ?>
