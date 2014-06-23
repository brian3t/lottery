<?php
/* @var $this ProjectHistoryController */
/* @var $model ProjectHistory */
?>

<?php
$this->breadcrumbs=array(
	'Project Histories'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List ProjectHistory', 'url'=>array('index')),
array('label'=>'Manage ProjectHistory', 'url'=>array('admin')),
);
?>

<h1>Create ProjectHistory</h1>
<div class="col-md-9">

	<?php $this->renderPartial('_form', array('model'=>$model)); ?></div>
<div class="col-md-3">
	<div class="widget">
		<h3>
			Operations
		</h3>
		<ul class="list-group">
			<li class="list-group-item"><a href="/<?=get_class($model)?>">List <?=get_class($model)?></a></li>
			<li class="list-group-item"><a href="/<?=get_class($model)?>/create">Create <?=get_class($model)?></a></li>
			<li class="list-group-item"><a href="/<?=get_class($model)?>/admin">Manage <?=get_class($model)?>s</a></li>
		</ul>
	</div>
</div>