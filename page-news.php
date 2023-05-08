<?php

// Template Name: News
// Template Post Type: post, pages

?>

<?php

get_header();

?>

    <div class="container-main">
        <div class="NewsHeadlines">
            <div class="left">
                <div class="title">
                    <h2><?php the_field('title') ?></h2>
                    <div class="post-date-news">
                        <dl>
                            <dd>Situation Report</dd>
                            <dt>Posted</dt>
                            <dd><?php the_field('posted') ?></dd>
                            <dt>Originally published</dt>
                            <dd><?php the_field('originally_published') ?></dd>
                            <dt>Origin</dt>
                            <dd><a class="original" href="<?php the_field('origin') ?>">View
                                    original</a></dd>
                        </dl>
                    </div>
                </div>
                <hr>
                <div class="img" id="breakingImg">
                    <img src="<?php the_field('main_image') ?>" alt="image">
                </div>
                <div class="text" id="breakingNews">
                    <div class="title">
                        <h2><?php the_field('title_smaller') ?></h2>
                    </div>
                    <div class="description">
                        <p><?php the_field('main_text') ?></p>
                    </div>
                </div>
                <div class="author-container">
                    <div class="author-box-container">
                        <div class="author-image">
                            <img src="<?php the_field('reporter_photo') ?>" alt="">
                        </div>

                        <div class="author-info">
                            <h3><?php the_field('reporter_name') ?></h3>
                            <p class="description"><?php the_field('about_reporter') ?></p>
                            <div class="social">
                                <a href="#">
                                    <i class="fa-brands fa-square-facebook"></i>
                                </a>

                                <a href="#">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>

                                <a href="#">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php

get_footer();

?>
