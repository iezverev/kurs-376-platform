<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Comment;

class SiteController extends Controller
{

	public function actionName($id)
	{

		$model = new Comment();
		$comment = Comment::find()->all();
		$subjectinfo = Subject::findOne($id);

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
	            
	                $this->redirect('pagename');  
	            }
	    return $this->render('view', compact('model', 'comment', 'subjectinfo'));
	}
}