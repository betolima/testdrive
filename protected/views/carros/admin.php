<?php
/* @var $this CarrosController */
/* @var $model Carros */

$this->breadcrumbs=array(
	'Carros'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CARRO', 'url'=>array('index')),
	array('label'=>'Create CARRO', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#carro-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Carros</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'carros-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'ano',
	     array('header'=>'Marca',
             'name'=>'marca.nome'),
         array('header'=>'Modelo',
             'name'=>'modelo.nome'),
		//'foto',
		'valor',
         array('header'=>'Parcela',
             'name'=>'parcelas.maximo'),
		'valor_total',
        'data',
	     array('header'=>'User',
             'name'=>'user.username'),
		 array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
