<?php
/* @var $this ListingController */
/* @var $model Listing */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'listing_type_id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'unit_price',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'asking_price',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'unit_id',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->