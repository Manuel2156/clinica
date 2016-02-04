<?php
/* @var $this MedicoEspecController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Medico Especs',
);

$this->menu=array(
	array('label'=>'Create MedicoEspec', 'url'=>array('create')),
	array('label'=>'Manage MedicoEspec', 'url'=>array('admin')),
);
?>

<h1>Medico Especs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
