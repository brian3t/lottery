<?php
/* @var $this ProjectHistoryController */
/* @var $model ProjectHistory */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'description',array('span'=>5,'maxlength'=>255)); ?>

                    <?php echo $form->textFieldControlGroup($model,'dateCreated',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'dateChanged',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'user_id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'old_project_status_id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'new_project_status_id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'project_id',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->