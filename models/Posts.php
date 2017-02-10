<?php

namespace app\models;
use Yii;
use yii\db\ActiveRecord;

/**
 * Description of Posts
 *
 * @author Юра
 */

class Posts extends ActiveRecord {
    
    public $img;
    public $date;
    public $link;
    
    public static function tableName() {
        return 'posts';
    }

    public function afterFind() {
        //$this->date("j.m.Y", $this->date);
        
        $this->link = Yii::$app->urlManager->createUrl(["site/posts", "id" => $this -> id]);
     
//        ELT( MONTH(date),
//            'Января','Февраля','Марта','Апреля','Мая','Июня',
//            'Июля','Августа','Сентября','Октября','Ноября','Декабря'
//           );
    }
    
   
 
}
