<?php
/* @var $this MarcasController */
/* @var $model Marcas */

$this->breadcrumbs=array(
	'Marcas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Marcas', 'url'=>array('index')),
	array('label'=>'Create Marcas', 'url'=>array('create')),
	array('label'=>'Update Marcas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Marcas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Marcas', 'url'=>array('admin')),
);
?>

<h1>View Marcas #<?php echo $model->id; ?></h1>

<?php 
    $user    = Users::model()->findByPk($model->user_id);
    
    $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		array(               
            'label'=>'Data',
            'value'=> CHtml::encode(date("d/m/Y",strtotime($model->data)))
        ),
		array(               
            'label'=>'User',
            'value'=>CHtml::encode($user->username)
        ),
	),
)); ?>
