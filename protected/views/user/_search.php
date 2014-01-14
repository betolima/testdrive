<?php
/* @var $this UserController */
/* @var $model USER */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'NOME'); ?>
		<?php echo $form->textField($model,'NOME',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LOGIN'); ?>
		<?php echo $form->textField($model,'LOGIN',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
        <?php echo CHtml::activeLabelEx($model,'PAPELID');

        echo CHtml::activeDropDownList($model,'PAPELID',
            CHtml::listData(PAPEIS::model()->findAll(), 'ID', 'NOME'),
            array('empty'=>'Escolha um Perfil'));
        ?>
        
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->