<?php
/* @var $this MedicamentosController */
/* @var $model Medicamentos */

$this->breadcrumbs=array(
	'Medicamentoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Medicamentos', 'url'=>array('index')),
	array('label'=>'Create Medicamentos', 'url'=>array('create')),
	array('label'=>'View Medicamentos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Medicamentos', 'url'=>array('admin')),
);
?>

<h1>Update Medicamentos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>