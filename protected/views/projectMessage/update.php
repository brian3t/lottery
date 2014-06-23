<?php
/* @var $this ProjectMessageController */
/* @var $model ProjectMessage */
?>

<?php
$this->breadcrumbs=array(
	'Project Messages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProjectMessage', 'url'=>array('index')),
	array('label'=>'Create ProjectMessage', 'url'=>array('create')),
	array('label'=>'View ProjectMessage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProjectMessage', 'url'=>array('admin')),
);
?>

    <h1>Update ProjectMessage <?php echo $model->id; ?></h1>
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