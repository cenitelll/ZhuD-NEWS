<?php

get_header();

?>

    <div class="container-main">
        <div class="topHeadlines">
            <div class="left">
                <div class="title">
                    <h2>Breaking News</h2>
                </div>
                <?php
                    $my_posts = get_posts( array(
                        'numberposts' => 1,
                        'category_name'    => 'breaking_news',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'include'     => array(),
                        'exclude'     => array(),
                        'meta_key'    => '',
                        'meta_value'  =>'',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    // global $post;

                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                ?>
                    <div class="img" id="breakingImg">
                    <img src="<?php the_field('main_image') ?>" alt="image">
                    </div>
                    <div class="text" id="breakingNews">
                        <div class="title">
                            <a href="<?php echo get_permalink(); ?>">
                                <h2><?php the_field('title'); ?></h2>
                            </a>
                        </div>
                        <div class="description">
                            <div class="truncate">
                                <p><?php the_field('main_text'); ?></p>
                            </div>
                        </div>
                        <div class="post-date">
                            <?php the_field('posted'); ?>
                        </div>
                    </div>
                <?php
                    }
                    wp_reset_postdata(); // сброс
                ?>
            </div>
            <div class="right">
                <div class="title">
                    <h2>Top Headlines</h2>
                </div>
                <div class="topNews">
                    <?php
                        $my_posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'top_headlines',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'include'     => array(),
                            'exclude'     => array(),
                            'meta_key'    => '',
                            'meta_value'  =>'',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        // global $post;

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                    ?>
                        <div class="news">
                            <div class="img">
                                <img src="<?php the_field('main_image') ?>" alt="image">
                            </div>
                            <div class="text">
                                <div class="title">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <div class="truncate">
                                            <p>
                                                <?php the_field('main_text'); ?>
                                            </p>
                                        </div>
                                    </a>
                                    <div class="post-date">
                                        <?php the_field('posted'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                        wp_reset_postdata(); // сброс
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="page2">
        <div class="container-main">
            <div class="news" id="UkraineNews">
                <div class="title">
                    <h2>Ukraine News</h2>
                </div>
                <div class="newsBox">
                    <?php
                        $my_posts = get_posts( array(
                            'numberposts' => 10,
                            'category_name'    => 'ukraine_news',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'include'     => array(),
                            'exclude'     => array(),
                            'meta_key'    => '',
                            'meta_value'  =>'',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        // global $post;

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                    ?>
                        <div class="newsCard">
                            <div class="img">
                                <img src="<?php the_field('main_image') ?>" alt="image">
                            </div>
                            <div class="text">
                                <div class="title">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <div class="truncate">
                                            <p><?php the_field('main_text'); ?></p>
                                        </div>
                                    </a>
                                    <div class="post-date">
                                        <?php the_field('posted'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                        wp_reset_postdata(); // сброс
                    ?>
                </div>
            </div>
            <div class="news" id="sportsNews">
                <div class="title">
                    <h2>Sports News</h2>
                </div>
                <div class="newsBox">
                        <?php
                            $my_posts = get_posts( array(
                                'numberposts' => 10,
                                'category_name'    => 'sports_news',
                                'orderby'     => 'date',
                                'order'       => 'ASC',
                                'include'     => array(),
                                'exclude'     => array(),
                                'meta_key'    => '',
                                'meta_value'  =>'',
                                'post_type'   => 'post',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );

                            // global $post;

                            foreach( $my_posts as $post ){
                                setup_postdata( $post );
                        ?>
                            <div class="newsCard">
                                <div class="img">
                                    <img src="<?php the_field('main_image') ?>" alt="image">
                                </div>
                                <div class="text">
                                    <div class="title">
                                        <a href="<?php echo get_permalink(); ?>">
                                            <div class="truncate">
                                                <p><?php the_field('main_text'); ?></p>
                                            </div>
                                        </a>
                                        <div class="post-date">
                                            <?php the_field('posted'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                            }
                            wp_reset_postdata(); // сброс
                        ?>
                    </div>
                </div>
            <div class="news" id="businessNews">
                <div class="title">
                    <h2>Business News</h2>
                </div>
                <div class="newsBox">
                    <?php
                        $my_posts = get_posts( array(
                            'numberposts' => 10,
                            'category_name'    => 'business_news',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'include'     => array(),
                            'exclude'     => array(),
                            'meta_key'    => '',
                            'meta_value'  =>'',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        // global $post;

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                        ?>
                        <div class="newsCard">
                            <div class="img">
                                <img src="<?php the_field('main_image') ?>" alt="image">
                            </div>
                            <div class="text">
                                <div class="title">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <div class="truncate">
                                            <p><?php the_field('main_text'); ?></p>
                                        </div>
                                    </a>
                                    <div class="post-date">
                                        <?php the_field('posted'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                        wp_reset_postdata(); // сброс
                    ?>
                </div>
            </div>
            <div class="news" id="techNews">
                <div class="title">
                    <h2>Technology News</h2>
                </div>
                <div class="newsBox">
                    <?php
                        $my_posts = get_posts( array(
                            'numberposts' => 10,
                            'category_name'    => 'technology_news',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'include'     => array(),
                            'exclude'     => array(),
                            'meta_key'    => '',
                            'meta_value'  =>'',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );

                        // global $post;

                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                    ?>
                        <div class="newsCard">
                            <div class="img">
                                <img src="<?php the_field('main_image') ?>" alt="image">
                            </div>
                            <div class="text">
                                <div class="title">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <div class="truncate">
                                            <p><?php the_field('main_text'); ?></p>
                                        </div>
                                    </a>
                                    <div class="post-date">
                                        <?php the_field('posted'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                        wp_reset_postdata(); // сброс
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php

get_footer();

?>
