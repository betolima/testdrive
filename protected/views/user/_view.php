<?php
/* @var $this UserController */
/* @var $data USER */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOME')); ?>:</b>
	<?php echo CHtml::encode($data->NOME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LOGIN')); ?>:</b>
	<?php echo CHtml::encode($data->LOGIN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAPELID')); ?>:</b>
	<?php $papel = PAPEIS::model()->findByPk($data->PAPELID); 
	      echo CHtml::encode($papel->NOME);
	?>
	<br />


</div>