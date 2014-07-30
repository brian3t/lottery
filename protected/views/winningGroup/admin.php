<?php
/* @var $this WinningGroupController */
/* @var $model WinningGroup */


$this->breadcrumbs=array(
	'Winning Groups'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List WinningGroup', 'url'=>array('index')),
	array('label'=>'Create WinningGroup', 'url'=>array('create')),
);
$b = Yii::app()->request->baseUrl;
$tt = TotoResult::model();

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#winning-group-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Winning Groups</h1>
<div class="col-md-12">
<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
        &lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<!--	--><?php
//	$this->widget('zii.widgets.grid.CGridView', array(
//		'dataProvider'=>$dataProvider,
//		'columns'=>array(
//			'title',          // display the 'title' attribute
//			'category.name',  // display the 'name' attribute of the 'category' relation
//			'content:html',   // display the 'content' attribute as purified HTML
//			array(            // display 'create_time' using an expression
//				'name'=>'create_time',
//				'value'=>'date("M j, Y", $data->create_time)',
//			),
//			array(            // display 'author.username' using an expression
//				'name'=>'authorName',
//				'value'=>'$data->author->username',
//			),
//			array(            // display a column with "view", "update" and "delete" buttons
//				'class'=>'CButtonColumn',
//			),
//		),
//	));
//	?>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'winning-group-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'group_tier',
		'amount',
		'num_of_winning_shares',
		'winning_booths',
		array(
			'name' => 'toto_result_id',
			'value' => 'TotoResult::model()->findByPk($data->toto_result_id)->date'
		),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
</div>
<div class="col-md-12">
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