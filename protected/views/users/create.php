<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List USER', 'url'=>array('index')),
	array('label'=>'Manage USER', 'url'=>array('admin')),
);
?>

<h1>Create USER</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>