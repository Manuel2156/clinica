<?php
/* @var $this MedicoEspecController */
/* @var $data MedicoEspec */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_medico')); ?>:</b>
	<?php echo CHtml::encode($data->id_medico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_espec')); ?>:</b>
	<?php echo CHtml::encode($data->id_espec); ?>
	<br />


</div>