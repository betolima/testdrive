<?php
/* @var $this CarrosController */
/* @var $model Carros */
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
		<?php echo $form->label($model,'ano'); ?>
		<?php echo $form->textField($model,'ano',array('size'=>4,'maxlength'=>4)); ?>
	</div>
	
    <div class="row">
        <?php echo $form->label($model,'marca_id'); ?>
        <?php echo CHtml::activeDropDownList($model,'marca_id',
            CHtml::listData(Marcas::model()->findAll(), 'id', 'nome'),
            array('empty'=>'Escolha uma marca'));
        ?>
    </div>	

	<div class="row">
		<?php echo $form->label($model,'modelo_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'modelo_id',
            CHtml::listData(Modelos::model()->findAll(), 'id', 'nome'),
            array('empty'=>'Escolha um modelo'));
     ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'foto'); ?>
		<?php echo $form->textField($model,'foto',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor'); ?>
		<?php echo $form->textField($model,'valor',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parcelas_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'parcelas_id',
            CHtml::listData(Parcelas::model()->findAll(), 'id', 'maximo'),
            array('empty'=>'Escolha uma parcela')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_total'); ?>
		<?php echo $form->textField($model,'valor_total',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo CHtml::activeDropDownList($model,'user_id',
            CHtml::listData(Users::model()->findAll(), 'id', 'username'),
            array('empty'=>'Escolha um usuario')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->