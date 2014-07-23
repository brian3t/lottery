<?php

class TotoResultController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/jumbotron';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','get','getLatestResult','getByDate','getAll', 'getNext', 'getPrevious'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','admin'),
				'roles'=>array('admin'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','admin'),
				'users'=>array('admin'),
			),
			array('deny', // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}


	/**
	 * Find list of results based on parameters
	 */
	public function actionGet()
	{
		$model=TotoResult::model();
		$id=Yii::app()->getRequest()->getQuery('id');
		$date=Yii::app()->getRequest()->getQuery('date');
		$p=array();

		if(!empty($id))
		{
			$p['id']=$id;
		}
		if(!empty($date))
		{
			$p['date']=$date;
		}
		$data=$model->findAllByAttributes($p);
		$listOfLotteries=array();

		foreach ($data as $d)
		{
			$winningGroups=$d['winningGroups'];

			$wg=array_map(function ($arr)
			{
				return $arr->getAttributes();
			},$winningGroups);
			$dataArray=array_merge($d->getAttributes(),array('winning_groups'=>$wg));
			array_push($listOfLotteries,$dataArray);
		}
		echo CJavaScript::jsonEncode($listOfLotteries);
		Yii::app()->end();
	}

	/**
	 * Find next result, based on date parameter
	 * e.g. /getNext/date/2014-04-05 will return result on date 2014-04-06 or later
	 */
	public function actionGetNext()
	{
		$model=TotoResult::model();
		$date=Yii::app()->getRequest()->getQuery('date');
		$p=array();

		if(!empty($date))
		{
			$p[':date']=$date;
		} else
		{
			echo '{"error":"missing date input!"}';
			Yii::app()->end();
		}
		$data=$model->find(array('condition' => 'date > :date ;', 'params' => $p, 'select' => '*', 'limit' => 1));

		if(!$data)
		{
			echo '{"error":"no next result found. Your date is latest"}';
			Yii::app()->end();
		}

		$d=$data;
		$winningGroups=$d['winningGroups'];

		$wg=array_map(function ($arr)
		{
			return $arr->getAttributes();
		},$winningGroups);
		$dataArray=array_merge($d->getAttributes(),array('winning_groups'=>$wg));
		echo CJavaScript::jsonEncode($dataArray);
		Yii::app()->end();
	}


	/**
	 * Find previous result, based on date parameter
	 * e.g. /getPrevious/date/2014-04-05 will return result on date 2014-04-03 or earlier
	 */

	public function actionGetPrevious()
	{
		$model=TotoResult::model();
		$date=Yii::app()->getRequest()->getQuery('date');
		$p=array();

		if(!empty($date))
		{
			$p['date']=$date;
		} else
		{
			echo '{"error":"missing date input!"}';
			Yii::app()->end();
		}
		$data=$model->find(array('condition' => 'date < :date ;', 'params' => $p, 'select' => '*', 'limit' => 1));

		if(!$data)
		{
			echo '{"error":"no result found on this date"}';
			Yii::app()->end();
		}
		if(!$data)
		{
			echo '{"error":"No previous result found. Your date is oldest in our record."}';
			Yii::app()->end();
		}

		$d=$data;
		$winningGroups=$d['winningGroups'];

		$wg=array_map(function ($arr)
		{
			return $arr->getAttributes();
		},$winningGroups);
		$dataArray=array_merge($d->getAttributes(),array('winning_groups'=>$wg));
		echo CJavaScript::jsonEncode($dataArray);
		Yii::app()->end();
	}


	/**
	 * Get latest lottery result
	 */
	public function actionGetLatestResult()
	{
		$data=TotoResult::model()->lastRecord()->find();
		$winningGroups=$data['winningGroups'];

		$wg=array_map(function ($arr)
		{
			return $arr->getAttributes();
		},$winningGroups);
		$dataArray=array_merge($data->getAttributes(),array('winning_groups'=>$wg));
		echo CJavaScript::jsonEncode($dataArray);
		Yii::app()->end();
	}


	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new TotoResult;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TotoResult']))
		{
			$model->attributes=$_POST['TotoResult'];
			if($model->save())
			{
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TotoResult']))
		{
			$model->attributes=$_POST['TotoResult'];
			if($model->save())
			{
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
			{
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
			}
		} else
		{
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
		}
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('TotoResult');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TotoResult('search');
		$model->unsetAttributes(); // clear any default values
		if(isset($_GET['TotoResult']))
		{
			$model->attributes=$_GET['TotoResult'];
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return TotoResult the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=TotoResult::model()->findByPk($id);
		if($model===null)
		{
			throw new CHttpException(404,'The requested page does not exist.');
		}
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param TotoResult $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='toto-result-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}