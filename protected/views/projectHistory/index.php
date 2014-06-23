<?php
/* @var $this ProjectHistoryController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Project Histories',
);

$this->menu=array(
	array('label'=>'Create ProjectHistory','url'=>array('create')),
	array('label'=>'Manage ProjectHistory','url'=>array('admin')),
);
$thisClass = get_class($this);
$modelName = substr($thisClass,0, strlen($thisClass) - strlen("Controller"));
?>

<h1>Project Histories</h1>
<div class="col-md-9">

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>
<div class="col-md-3">
	<div class="widget">
		<h3>
			Operations
		</h3>
		<ul class="list-group">
			<li class="list-group-item"><a href="/<?=$modelName?>">List <?=$modelName?></a></li>
			<li class="list-group-item"><a href="/<?=$modelName?>/create">Create <?=$modelName?></a></li>
			<li class="list-group-item"><a href="/<?=$modelName?>/admin">Manage <?=$modelName?></a></li>
		</ul>
	</div>
</div>