<?php
/* @var $this MedicamentosController */
/* @var $model Medicamentos */

$this->breadcrumbs=array(
	'Medicamentoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Medicamentos', 'url'=>array('index')),
	array('label'=>'Manage Medicamentos', 'url'=>array('admin')),
);
?>

<h1>Create Medicamentos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>