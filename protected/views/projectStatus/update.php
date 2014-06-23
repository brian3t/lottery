<?php
/* @var $this ProjectStatusController */
/* @var $model ProjectStatus */
?>

<?php
$this->breadcrumbs=array(
	'Project Statuses'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);
$b = Yii::app()->request->baseUrl;

$this->menu=array(
	array('label'=>'List ProjectStatus', 'url'=>array('index')),
	array('label'=>'Create ProjectStatus', 'url'=>array('create')),
	array('label'=>'View ProjectStatus', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProjectStatus', 'url'=>array('admin')),
);
?>

    <h1>Update ProjectStatus <?php echo $model->id; ?></h1>
<div class="col-md-9">
<?php $this->renderPartial('_form', array('model'=>$model)); ?></div>
<div class="col-md-3">
	<div class="widget">
		<h3>
			Operations
		</h3>
		<ul class="list-group">
			<li class="list-group-item"><a href="<?=$b?>/<?=get_class($model)?>">List <?=get_class($model)?></a></li>
			<li class="list-group-item"><a href="<?=$b?>/<?=get_class($model)?>/create">Create <?=get_class($model)?></a></li>
			<li class="list-group-item"><a href="<?=$b?>/<?=get_class($model)?>/admin">Manage <?=get_class($model)?>s</a></li>
		</ul>
	</div>
</div>