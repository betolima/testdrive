<?php
/* @var $this CarrosController */
/* @var $data Carros */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ano')); ?>:</b>
	<?php echo CHtml::encode($data->ano); ?>
	<br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('marca_id')); ?>:</b>
    <?php $marca = Marcas::model()->findByPk($data->marca_id); 
          echo CHtml::encode($marca->nome);
    ?>
    <br />	

	<b><?php echo CHtml::encode($data->getAttributeLabel('modelo_id')); ?>:</b>
	<?php $modelo = Modelos::model()->findByPk($data->modelo_id); 
          echo CHtml::encode($modelo->nome);
	?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto')); ?>:</b>
	<?php 
	if($data->foto!='' && strlen($data->foto) > 2)
	   echo '<br/>'.CHtml::image('images/'.$data->foto, 'imagem', array('width' => 100, 'height' => 75));
	?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo 'R$'.CHtml::encode($data->valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parcelas_id')); ?>:</b>
	<?php $parcela = Parcelas::model()->findByPk($data->parcelas_id); 
          echo CHtml::encode($parcela->maximo);
	?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_total')); ?>:</b>
	<?php echo 'R$'.CHtml::encode($data->valor_total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo $data->data = date("d/m/Y",strtotime($data->data));
	?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php $user = Users::model()->findByPk($data->user_id); 
          echo CHtml::encode($user->username);
    ?>
	<br />


</div>