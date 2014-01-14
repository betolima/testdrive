<?php
/* @var $this UserController */
/* @var $model USER */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List USER', 'url'=>array('index')),
	array('label'=>'Create USER', 'url'=>array('create')),
	array('label'=>'Update USER', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete USER', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage USER', 'url'=>array('admin')),
);
?>

<h1>View USER #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'NOME',
		'LOGIN',
		'SENHA',
		'PAPELID'
	),
)); ?>
