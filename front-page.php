<?php get_header(); ?>

<div class="row h-100">
    <div class="col-sm-12 my-auto">

        <!-- TOP -->
        <div class="top">
            <div class="container logo">
                <img class="img-fluid" src="http://trocha.net.pl/gogomedia/wordpress/wp-content/themes/gogomedia/images/logo.png">
            </div>
        </div>

        <!-- CONTENT1 -->
        <div class="content1">
            <div class="container">
                <h1><?php the_field('content1-title'); ?></h1>
                <h4><?php the_field('content1-subtitle'); ?></h4>

                <div class="boxes" id="box">
                    <div class="box" data-u="slides">
                        <?php $boxes = get_field('relationship');
                        foreach( (array) $boxes as $box): ?> 
                            <div>
                                <img data-u="image" src="http://trocha.net.pl/gogomedia/wordpress/wp-content/themes/gogomedia/images/empty.png" />
                                <div class="box-white">
                                    <h3><?php the_field('boxes-content1-title', $box); ?></h3>
                                    <h5 class="p-.75"><?php the_field('boxes-content1-content', $box); ?></h5>
                                    <img src="<?php echo get_field('boxes-content1-image', $box); ?>">
                                </div>
                            </div>
                        <?php endforeach; ?> 
                    </div>                 
                    <!-- Arrow Navigator -->
                    <div data-u="arrowleft" class="prevNext" style="left:0px;"><</div>
                    <div data-u="arrowright" class="prevNext" style="right:0px;">></div>
                </div>
                
            </div>
        </div>

        <div class="dot"></div>

        <!-- CONTENT2 -->
        <div class="content2">
            <div class="container">
                <h1><?php the_field('content2-title'); ?></h1>
                <h4><?php the_field('content2-subtitle'); ?></h4>
                <h2 style="padding-top:36px;"><?php the_field('content2-little-title'); ?></h2>

                <div class="row justify-content-center p-2">
                    <?php $boxesContent2 = get_field('relationship-content2');
                    foreach( (array) $boxesContent2 as $boxContent2): ?> 
                        <div class="box-white">
                            <h3><?php the_field('boxes-content2-title', $boxContent2); ?></h3>
                            <h5 class="p-.75"><?php the_field('boxes-content2-content', $boxContent2); ?></h5>
                            <img src="<?php echo get_field('boxes-content2-image', $boxContent2); ?>">
                        </div>
                    <?php endforeach; ?> 
                </div>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>