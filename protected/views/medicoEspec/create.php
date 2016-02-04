<?php
/* @var $this MedicoEspecController */
/* @var $model MedicoEspec */

$this->breadcrumbs=array(
	'Medico Especs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MedicoEspec', 'url'=>array('index')),
	array('label'=>'Manage MedicoEspec', 'url'=>array('admin')),
);
?>

<h1>Create MedicoEspec</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>