<?php
/* @var $this CarroController */
/* @var $model CARRO */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'carro-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ANO'); ?>
		<?php echo $form->textField($model,'ANO',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'ANO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FOTO'); ?>
		<?php echo $form->textField($model,'FOTO',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'FOTO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VALOR'); ?>
		<?php echo $form->textField($model,'VALOR',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'VALOR'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'PARCELASID');
        echo CHtml::activeDropDownList($model,'PARCELASID',
            CHtml::listData(PARCELAS::model()->findAll(), 'ID', 'MAXIMO'),
            array('empty'=>'Escolha uma parcela'));
        
        echo $form->error($model,'PARCELASID');
        ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VALORTOTAL'); ?>
		<?php echo $form->textField($model,'VALORTOTAL',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'VALORTOTAL'); ?>
	</div>
	
    <div class="row">
        <?php echo $form->labelEx($model,'USERID'); ?>
        <?php 
        //echo $form->textField($model,'USERID',array('readonly'=>true, 'disabled'=>true)); 
        
        //$user = USER::model()->findByPk($model->USERID); 
          //echo CHtml::encode($user->LOGIN);
          
        ?>
        <?php echo $form->error($model,'USERID'); ?>
    </div>	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->