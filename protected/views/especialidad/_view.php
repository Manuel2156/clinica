<?php
/* @var $this EspecialidadController */
/* @var $data Especialidad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('espec')); ?>:</b>
	<?php echo CHtml::encode($data->espec); ?>
	<br />


</div>