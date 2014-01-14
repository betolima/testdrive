<?php
/* @var $this CarroController */
/* @var $model CARRO */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ANO'); ?>
		<?php echo $form->textField($model,'ANO',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MODELOID'); ?>
		<?php echo $form->textField($model,'MODELOID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FOTO'); ?>
		<?php echo $form->textField($model,'FOTO',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VALOR'); ?>
		<?php echo $form->textField($model,'VALOR',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PARCELASID'); ?>
		<?php echo $form->textField($model,'PARCELASID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VALORTOTAL'); ?>
		<?php echo $form->textField($model,'VALORTOTAL',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USERID'); ?>
		<?php echo $form->textField($model,'USERID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->