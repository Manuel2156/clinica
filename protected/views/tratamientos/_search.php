<?php
/* @var $this TratamientosController */
/* @var $model Tratamientos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_consulta'); ?>
		<?php echo $form->textField($model,'id_consulta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_medicamento'); ?>
		<?php echo $form->textField($model,'id_medicamento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->