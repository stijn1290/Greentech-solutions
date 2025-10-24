<!-- Main template bestand voor het weergeven van blog posts en het inladen van andere thema bestanden -->
<?php
get_header();
?>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Main -->
        <div id="main">
            <?php foreach(get_posts() as $post) : setup_postdata($post)
                                ?>
            <article class="post">
                <header>
                    <div class="title">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                    </div>
                    <div class="meta">
                        <time class="published"
                            datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="author">
                            <span class="name"><?php the_author(); ?></span>
                            <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt="" />
                        </a>
                    </div>
                </header>
                <?php if(has_post_thumbnail()): ?>
                <a href="<?php the_permalink(); ?>" class="image featured"><?php the_post_thumbnail('full'); ?></a>
                <?php endif; ?>
                <p><?php the_excerpt() ?></p>
                <footer>
                    <ul class="actions">
                        <li><a href="<?php the_permalink() ?>" class="button large">Continue Reading</a></li>
                    </ul>
                    <ul class="stats">
                        <?php
                                        $categories = get_the_category();
                                         foreach($categories as $category) :?>
                        <li><a href="<?php get_category_link($category->term_id) ?>"><?php $category->name ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </footer>
            </article>

            <?php
                            endforeach; wp_reset_postdata() ?>
            <!-- Pagination -->
            <ul class="actions pagination">
                <li><a href="" class="disabled button large previous">Previous Page</a></li>
                <li><a href="#" class="button large next">Next Page</a></li>
            </ul>

        </div>

        <!-- Sidebar -->
        <?php get_sidebar(); ?>

    </div>
</body>