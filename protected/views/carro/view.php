<?php
/* @var $this CarroController */
/* @var $model CARRO */

$this->breadcrumbs=array(
	'Carros'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List CARRO', 'url'=>array('index')),
	array('label'=>'Create CARRO', 'url'=>array('create')),
	array('label'=>'Update CARRO', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete CARRO', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CARRO', 'url'=>array('admin')),
);
?>

<h1>View CARRO #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'ANO',
		'MODELOID',
		'FOTO',
		'VALOR',
		'PARCELASID',
		'VALORTOTAL',
		'DATA',
		'USERID',
	),
)); ?>
