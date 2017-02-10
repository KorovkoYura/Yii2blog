<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Posts;


class SiteController extends Controller
{
    /**
     * @inheritdoc
     */

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    
    public function actionIndex()
    {
        $query = Posts::find()->groupBy('id');
        //$date = Posts::find()->select(date_format("2008-11-19", "%d %M %Y %T"));
        $pagination = new \yii\data\Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $query->count(),
            'pageSizeParam' => false,
            'forcePageParam' => false
        ]);
        
        $posts = $query -> orderBy(['date' => SORT_DESC ])
                -> offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();
        
        return $this->render('index', [
            'posts' => $posts,
            'active_page' => Yii::$app->request->get("page", 1),
            'count_pages' => $pagination->getPageCount(),
            'pagination' => $pagination
           // 'date' => $date
        ]);
    }
    
    public function actionView() {
        $id = Yii::$app->request->get('alias');
        $post = Posts::find()->where('alias = :id')->addParams([':id' => $id])->one();
        
        if(empty($post)) throw new \yii\web\HttpException(404, 'Такой страницы нет...');

        return $this->render('view', compact('post'));
    }
    
    public function actionAbout() {
        
        return $this->render('about');
        
    }
    
    public function actionContact() {
        
        return $this->render('contact');
        
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    

    /**
     * Login action.
     *
     * @return string
     */
   
    
    
    
    
    
    
}
