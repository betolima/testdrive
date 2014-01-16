<?php
/* @var $this CarrosController */
/* @var $model Carros */

$this->breadcrumbs=array(
	'Carros'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CARRO', 'url'=>array('index')),
	array('label'=>'Create CARRO', 'url'=>array('create')),
	array('label'=>'Update CARRO', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CARRO', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CARRO', 'url'=>array('admin')),
);
?>

<h1>View CARRO #<?php echo $model->id; ?></h1>

<?php 

    $marca   = Marcas::model()->findByPk($model->marca_id);
    $modelo  = Modelos::model()->findByPk($model->modelo_id);
    $parcela = Parcelas::model()->findByPk($model->parcelas_id);
    $user    = Users::model()->findByPk($model->user_id);

    $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ano',
		array(               
            'label'=>'Marca',
            'value'=>CHtml::encode($marca->nome)
        ),
		array(               
            'label'=>'Nodelo',
            'value'=>CHtml::encode($modelo->nome)
        ),
		array(               
            'label'=>'Foto',
            'type'=>'raw',
            'value'=> ($model->foto!='' && strlen($model->foto) > 2) ? html_entity_decode(CHtml::image('images/'.$model->foto, 'imagem', array('width' => 100, 'height' => 75))) : ''
        ),
		'valor',
		array(               
            'label'=>'Parcela',
            'value'=>CHtml::encode($parcela->maximo)
        ),
		'valor_total',
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
