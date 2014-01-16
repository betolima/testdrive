<?php
/* @var $this CarrosController */
/* @var $model Carros */

$this->breadcrumbs=array(
	'Carros'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CARRO', 'url'=>array('index')),
	array('label'=>'Create CARRO', 'url'=>array('create')),
	array('label'=>'View CARRO', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CARRO', 'url'=>array('admin')),
);
?>

<h1>Update CARRO <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>