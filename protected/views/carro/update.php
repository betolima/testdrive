<?php
/* @var $this CarroController */
/* @var $model CARRO */

$this->breadcrumbs=array(
	'Carros'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List CARRO', 'url'=>array('index')),
	array('label'=>'Create CARRO', 'url'=>array('create')),
	array('label'=>'View CARRO', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage CARRO', 'url'=>array('admin')),
);
?>

<h1>Update CARRO <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>