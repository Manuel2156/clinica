<?php
/* @var $this MedicoController */
/* @var $model Medico */

$this->breadcrumbs=array(
	'Medicos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Medico', 'url'=>array('index')),
	array('label'=>'Manage Medico', 'url'=>array('admin')),
);
?>

<h1>Create Medico</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>