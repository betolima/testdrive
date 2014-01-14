<?php
/* @var $this CarroController */
/* @var $data CARRO */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ANO')); ?>:</b>
	<?php echo CHtml::encode($data->ANO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MODELOID')); ?>:</b>
	<?php echo CHtml::encode($data->MODELOID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FOTO')); ?>:</b>
	<?php echo CHtml::encode($data->FOTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VALOR')); ?>:</b>
	<?php echo CHtml::encode($data->VALOR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PARCELASID')); ?>:</b>
	<?php echo CHtml::encode($data->PARCELASID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VALORTOTAL')); ?>:</b>
	<?php echo CHtml::encode($data->VALORTOTAL); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('DATA')); ?>:</b>
	<?php echo CHtml::encode($data->DATA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USERID')); ?>:</b>
	<?php echo CHtml::encode($data->USERID); ?>
	<br />

	*/ ?>

</div>