<?php
/* @var $this MedicoEspecController */
/* @var $model MedicoEspec */

$this->breadcrumbs=array(
	'Medico Especs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MedicoEspec', 'url'=>array('index')),
	array('label'=>'Create MedicoEspec', 'url'=>array('create')),
	array('label'=>'View MedicoEspec', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MedicoEspec', 'url'=>array('admin')),
);
?>

<h1>Update MedicoEspec <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>