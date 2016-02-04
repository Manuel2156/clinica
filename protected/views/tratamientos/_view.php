<?php
/* @var $this TratamientosController */
/* @var $data Tratamientos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_consulta')); ?>:</b>
	<?php echo CHtml::encode($data->id_consulta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_medicamento')); ?>:</b>
	<?php echo CHtml::encode($data->id_medicamento); ?>
	<br />


</div>