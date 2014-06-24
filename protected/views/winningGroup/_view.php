<?php
/* @var $this WinningGroupController */
/* @var $data WinningGroup */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_tier')); ?>:</b>
	<?php echo CHtml::encode($data->group_tier); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_of_winning_shares')); ?>:</b>
	<?php echo CHtml::encode($data->num_of_winning_shares); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('toto_result_id')); ?>:</b>
	<?php echo CHtml::encode($data->toto_result_id); ?>
	<br />


</div>