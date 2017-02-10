  
<header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <?php if (!empty($posts)): ?>
            <?php foreach($posts as $post): ?>
                <div class="post-preview">
                    <a href="<?= yii\helpers\Url::to([
                        'site/view',
                        'alias' => $post->alias
                    ]);
                    ?>">
                        <h2 class="post-title">
                            <?= $post->title; ?>
                        </h2>
                        <h3 class="post-subtitle">

                        </h3>
                    </a>
                    <p class="post-meta">Опубликовал <a href="#">Юрий</a> <?= Yii::$app->formatter->asDatetime($posts->date) ?> </p>
                </div>
                <hr>
            <?php endforeach ?>
        <?php endif; ?>
        </div>
    </div>
  
        <!--<div class="post-preview">
            <a href="post.html">
                <h2 class="post-title">
                    I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                </h2>
            </a>
            <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 18, 2014</p>
        </div>
        <hr>-->
        
        <!-- Pager -->
    </div>
