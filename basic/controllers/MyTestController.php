<?php
/**
 * Created by PhpStorm.
 * User: Di13
 * Date: 28.05.2018
 * Time: 16:29
 */
namespace app\controllers;
use app\models\tables\User;
use yii\web\Controller;

class MyTestController extends Controller
{
	public function actionIndex (){

	 return $this->render('index', ['title' => 'My test templates', 'content' => 'Yes!!! All Worked!!! Cool!']);

	}

	public function actionTest (){
		var_dump(\Yii::$app->db);
		exit();
	}

	public  function  actionArTest (){

//		$user = new User();
//		$user->login = "Dmitriy";
//		$user->password = md5('dmitriy');
//		$user->save();

		$user = User::find();
		var_dump($user);

	}
}