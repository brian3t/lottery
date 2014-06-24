<?php
/* @var $this TotoResultController */
/* @var $model TotoResult */
?>

<?php
$this->breadcrumbs=array(
	'Toto Results'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
$b = Yii::app()->request->baseUrl;

$this->menu=array(
	array('label'=>'List TotoResult', 'url'=>array('index')),
	array('label'=>'Create TotoResult', 'url'=>array('create')),
	array('label'=>'View TotoResult', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TotoResult', 'url'=>array('admin')),
);
?>

    <h1>Update TotoResult <?php echo $model->id; ?></h1>
<div class="col-md-9">
<?php $this->renderPartial('_form', array('model'=>$model)); ?></div>
<div class="col-md-3">
	<div class="widget">
		<h3>
			Operations
		</h3>
		<ul class="list-group">
			<li class="list-group-item"><a href="<?=Yii::app()->getBaseUrl()?>/<?=get_class($model)?>">List <?=get_class($model)?></a></li>
			<li class="list-group-item"><a href="<?=Yii::app()->getBaseUrl()?>/<?=get_class($model)?>/create">Create <?=get_class($model)?></a></li>
			<li class="list-group-item"><a href="<?=Yii::app()->getBaseUrl()?>/<?=get_class($model)?>/admin">Manage <?=get_class($model)?>s</a></li>
		</ul>
	</div>
</div>