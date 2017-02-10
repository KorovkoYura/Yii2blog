
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="post-heading">
                            <h1><?= $post->title; ?></h1>
                            <h2 class="subheading"></h2>
                            <span class="meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</span>
                        </div>
                    </div>
                </div>
            </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                    <p><?= $post->intro; ?></p>
                   
                    
                    
                    <!-- <h2 class="section-heading">The Final Frontier</h2>-->

                    <?= $post->text; ?>

                    <!--<blockquote>The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.</blockquote>-->


                    <!--<a href="#">
                        <img class="img-responsive" src="img/post-sample-image.jpg" alt="">
                    </a>-->
                    <!--<span class="caption text-muted">To go places and do things that have never been done before – that’s what living is all about.</span>-->

                   
                    <p>Placeholder text by <a href="http://spaceipsum.com/">Space Ipsum</a>. Photographs by <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>.</p>
                </div>
            </div>
        </div>
    </article>