<?php
/* @var $this CarrosController */
/* @var $model Carros */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'carro-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data')
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ano'); ?>
		<?php echo $form->textField($model,'ano',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'ano'); ?>
	</div>
	
    <div class="row">
        <?php echo CHtml::activeLabelEx($model,'modelo_id');
        echo CHtml::activeDropDownList($model,'modelo_id',
            CHtml::listData(Modelos::model()->findAll(), 'id', 'nome'),
            array('empty'=>'Escolha um modelo'));
        
        echo $form->error($model,'modelo_id');
        ?>
    </div>	
    
    <div class="row">
        <?php echo CHtml::activeLabelEx($model,'marca_id');
        echo CHtml::activeDropDownList($model,'marca_id',
            CHtml::listData(Marcas::model()->findAll(), 'id', 'nome'),
            array('empty'=>'Escolha uma marca'));
        
        echo $form->error($model,'marca_id');
        ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'foto'); ?>
		<?php //echo $form->textField($model,'foto',array('size'=>60,'maxlength'=>150)); 
		      echo CHtml::activeFileField($model, 'foto');
		?>
		<?php echo $form->error($model,'foto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valor'); ?>
		<?php 
    		if(Yii::app()->user->isAdmin()){
    		    echo $form->textField($model,'valor',array('size'=>10,'maxlength'=>10)); 
    		} else {
    		    //echo $form->textField($model,'valor',array('size'=>10,'maxlength'=>10, 'readOnly' => true, 'disabled' => true));
    		    echo $model->valor; //mais seguro que usar o da linha acima, pois evita injection no form.
    		}
		?>
		<?php echo $form->error($model,'valor'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'parcelas_id');
        echo CHtml::activeDropDownList($model,'parcelas_id',
            CHtml::listData(Parcelas::model()->findAll(), 'id', 'maximo'),
            array('empty'=>'Escolha uma parcela'));
        
        echo $form->error($model,'parcelas_id');
        ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valor_total'); ?>
		<?php echo $form->textField($model,'valor_total',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'valor_total'); ?>
	</div>
	
    <div class="row">
        <?php echo $form->labelEx($model,'data'); 
        if($model->isNewRecord){
            echo date('d/m/Y');
        } else {
            echo $model->data = date("d/m/Y",strtotime($model->data));
        }
        ?>
    </div>	
	
    <?php 
        if($model->isNewRecord){
    ?>
    <div class="row">
        <?php echo $form->labelEx($model,'user_id');
            echo $form->hiddenField($model,'user_id', array('value'=>Yii::app()->user->getState('idSession')));
            echo $form->hiddenField($model,'user_id_update', array('value'=>Yii::app()->user->getState('idSession')));
            echo Yii::app()->user->getName();
            //echo $form->error($model,'user_id'); 
        ?>
    </div>	
    <?php 
        } else {
    ?>
    <div class="row">
        <?php echo $form->labelEx($model,'criado por');
            $user = Users::model()->findByPk($model->user_id);
            echo CHtml::encode($user->username);
        ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model,'editado por');
              $userEdit = ($model->user_id_update) ? Users::model()->findByPk($model->user_id_update) : Users::model()->findByPk($model->user_id);
              $usu_edicao = ($model->user_id_update ? $userEdit->username : 'registro nao editado');
              echo CHtml::encode($usu_edicao);
        
              echo $form->hiddenField($model,'user_id_update', array('value'=>Yii::app()->user->getState('idSession')));
            //echo $form->error($model,'user_id_update'); 
        ?>
    </div>
    <?php 
        }
    ?>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->