<?php
/* @var $this UserController */
/* @var $data USER */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOME')); ?>:</b>
	<?php echo CHtml::encode($data->NOME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAPELID')); ?>:</b>
	<?php $papel = PAPEIS::model()->findByPk($data->PAPELID); 
	      echo CHtml::encode($papel->NOME);
	?>
	<br />


</div>