<?php
/* @var $this MedicamentosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Medicamentoses',
);

$this->menu=array(
	array('label'=>'Create Medicamentos', 'url'=>array('create')),
	array('label'=>'Manage Medicamentos', 'url'=>array('admin')),
);
?>

<h1>Medicamentoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
