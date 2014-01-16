<?php
/* @var $this MarcasController */
/* @var $model Marcas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'marcas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nome'); ?>
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