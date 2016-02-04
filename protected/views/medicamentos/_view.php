<?php
/* @var $this MedicamentosController */
/* @var $data Medicamentos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('presentacion')); ?>:</b>
	<?php echo CHtml::encode($data->presentacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('volumen')); ?>:</b>
	<?php echo CHtml::encode($data->volumen); ?>
	<br />


</div>