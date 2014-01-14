<?php
/* @var $this UserController */
/* @var $model USER */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NOME'); ?>
		<?php echo $form->textField($model,'NOME',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'NOME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php 
		  /*
		  echo $form->labelEx($model,'PAPELID'); 
		
	      $itens = array('1' => 'Administradores', '2' => 'Funcionarios');
          echo $form->radioButtonList($model,'PAPELID',$itens,
          array('separator' => ' ', 'labelOptions' => array('style' => 'display:inline')
          )); 
		  */
		?>
		
		<?php echo CHtml::activeLabelEx($model,'PAPELID');

        echo CHtml::activeDropDownList($model,'PAPELID',
            CHtml::listData(PAPEIS::model()->findAll(), 'ID', 'NOME'),
            array('empty'=>'Escolha um Perfil'));
        ?>
        
        
		<?php echo $form->error($model,'PAPELID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->