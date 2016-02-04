<?php
/* @var $this TratamientosController */
/* @var $model Tratamientos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tratamientos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_consulta'); ?>
		<?php echo $form->textField($model,'id_consulta'); ?>
		<?php echo $form->error($model,'id_consulta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_medicamento'); ?>
		<?php echo $form->textField($model,'id_medicamento'); ?>
		<?php echo $form->error($model,'id_medicamento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->