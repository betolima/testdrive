<?php
/* @var $this CarrosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Carros',
);

$this->menu=array(
	array('label'=>'Create CARRO', 'url'=>array('create')),
	array('label'=>'Manage CARRO', 'url'=>array('admin')),
);
?>

<h1>Carros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
