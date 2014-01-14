<?php
/* @var $this UserController */
/* @var $model USER */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List USER', 'url'=>array('index')),
	array('label'=>'Create USER', 'url'=>array('create')),
	array('label'=>'View USER', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage USER', 'url'=>array('admin')),
);
?>

<h1>Update USER <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>