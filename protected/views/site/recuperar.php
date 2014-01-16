<?php
/* @var $this SiteController */
/* @var $model RecuperarForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Recuperar senha';
$this->breadcrumbs=array(
	'Recuperar',
);
?>

<h1>Recuperar senha</h1>

<?php if(Yii::app()->user->hasFlash('recuperar')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('recuperar'); ?>
</div>

<?php else: ?>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'recuperar-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rg'); ?>
		<?php echo $form->textField($model,'rg'); ?>
		<?php echo $form->error($model,'rg'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>