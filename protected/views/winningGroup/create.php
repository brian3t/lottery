<?php
/* @var $this WinningGroupController */
/* @var $model WinningGroup */
?>

<?php
$this->breadcrumbs=array(
	'Winning Groups'=>array('index'),
	'Create',
);
$b = Yii::app()->request->baseUrl;

$this->menu=array(
array('label'=>'List WinningGroup', 'url'=>array('index')),
array('label'=>'Manage WinningGroup', 'url'=>array('admin')),
);

$model->toto_result_id = (!empty($_GET['toto_result_id'])?$_GET['toto_result_id']:null);
?>

<h1>Create WinningGroup</h1>
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