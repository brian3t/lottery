<?php
/* @var $this DeveloperController */
/* @var $data Developer */
?>

<!--<div class="view">-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('id')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
<!--	<br />-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('name')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->name); ?>
<!--	<br />-->
<!---->
<!---->
<!--</div>-->

<div class="col-md-3">
	<div class="widget">
		<h3>
			Operations
		</h3>
		<ul class="list-group">
			<li class="list-group-item"><a href="developer">List <?=get_class($data)?></a></li>
			<li class="list-group-item"><a href="developer/create">Create</a></li>
			<?php if (!empty($data->id)) :?>
				<li class="list-group-item"><a href="developer/update/<?=$data->id?>">Update This</a></li>
				<li class="list-group-item"><a href="developer/delete/<?=$data->id?>">Delete</a></li>
			<?php endif;?>
			<li class="list-group-item"><a href="developer/admin">Manage</a></li>
		</ul>
	</div>
</div>