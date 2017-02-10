<?php

/* @var $this yii\web\View */

use yii\widgets\LinkPager;

$this->title = 'My Yii Application';
$this->title = "мой блог";
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Личный блог'
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Блог, коровко юрий'
]);
?>

<?php
    include "intro_post.php";
?>

<div class="my-pages">
    <?= LinkPager::widget([
        'pagination' => $pagination, 
        'firstPageLabel' =>  'В начало',
        'lastPageLabel' =>  'В конец',
        'prevPageLabel' =>  '&laquo;'
    ]) ?>
</div>

    <!-- Pager -->
  <!-- <ul class="pager">
        <li class="next">
            <a href="#">Older Posts &rarr;</a>
        </li>
    </ul> -->
        
