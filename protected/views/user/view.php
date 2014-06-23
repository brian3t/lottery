<?php
/* @var $this UserController */
/* @var \$model User */
?>

<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->name,
);
$b = Yii::app()->request->baseUrl;

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->id; ?></h1>
<div class="col-md-9">
<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table-striped table-condensed table-hover view-box col-xs-12 col-sm-12 col-md-9 col-lg-9',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'team_id',
		'roles',
		'name',
		'cea_number',
		'nric',
		'avatar',
		'email',
		'password',
		'username',
		'status',
		'password_strategy',
		'requires_new_password',
		'reset_token',
		'login_attempts',
		'login_time',
		'login_ip',
		'activation_key',
		'validation_key',
		'create_time',
		'update_time',
		'salt',
		'license_number',
	),
)); ?>
</div>
<div class="col-md-3">
	<div class="widget">
		<h3>
			Operations
		</h3>
		<ul class="list-group">
			<li class="list-group-item"><a href="<?=$b?>/<?=get_class($model)?>/update/<?=$model->id?>">Update This <?=get_class($model)?></a></li>
			<li class="list-group-item"><a href="<?=$b?>/<?=get_class($model)?>/delete/<?=$model->id?>">Delete This <?=get_class($model)?></a></li>
			<li class="list-group-item"><a href="<?=$b?>/<?=get_class($model)?>">List <?=get_class($model)?></a></li>
			<li class="list-group-item"><a href="<?=$b?>/<?=get_class($model)?>/create">Create <?=get_class($model)?></a></li>
			<li class="list-group-item"><a href="<?=$b?>/<?=get_class($model)?>/admin">Manage <?=get_class($model)?>s</a></li>
		</ul>
	</div>
</div>