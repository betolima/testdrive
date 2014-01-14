<?php
/* @var $this CarroController */
/* @var $model CARRO */

$this->breadcrumbs=array(
	'Carros'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CARRO', 'url'=>array('index')),
	array('label'=>'Manage CARRO', 'url'=>array('admin')),
);
?>

<h1>Create CARRO</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>