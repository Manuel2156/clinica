<?php
/* @var $this ConsultaController */
/* @var $model Consulta */

$this->breadcrumbs=array(
	'Consultas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Consulta', 'url'=>array('index')),
	array('label'=>'Manage Consulta', 'url'=>array('admin')),
);
?>

<h1>Create Consulta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>