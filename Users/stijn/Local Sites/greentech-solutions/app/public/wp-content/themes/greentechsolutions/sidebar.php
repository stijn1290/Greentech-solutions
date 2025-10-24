<!-- Sidebar bestand met site informatie, recente posts (in verschillende formaten) en een korte omschrijving -->
<section id="sidebar">

    <!-- Site informatie -->
    <section id="intro">
        <header>
            <h2><?php bloginfo('name'); ?></h2>
            <p><?php bloginfo('description') ?></p>
        </header>
    </section>

    <!-- Medium posts section -->
    <section>
        <div class="mini-posts">
            <?php foreach(get_posts() as $post):  setup_postdata($post)?>
            <!-- Mini Post -->
            <article class="mini-post">
                <header>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <time class="published" datetime="2015-10-20"><?php echo get_the_date(); ?></time>
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="author">
                        <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt="" />
                    </a>
                </header>
                <?php if(has_post_thumbnail()):?>
                    <a href="<?php the_permalink(); ?>" class="image"><?php the_post_thumbnail('medium'); ?></a>
                <?php endif; ?>
            </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Mini Posts section -->
    <section>
        <ul class="posts">
            <?php foreach(get_posts() as $post) : setup_postdata($post) ?>
            <li>
                <article>
                    <header>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <time class="published" datetime="2015-10-20"><?php echo get_the_date(); ?></time>
                    </header>
                     <?php if(has_post_thumbnail()):?>
                    <a href="<?php the_permalink(); ?>" class="image"><?php the_post_thumbnail('extreme_small'); ?></a>
                <?php endif; ?>
                </article>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <!-- Site omschrijving -->
    <section class="blurb">
        <h2>About</h2>
        <p><?php bloginfo('description') ?></p>
        <ul class="actions">
            <li><a href="https://github.com/stijn1290/Greentech-solutions" class="button">Learn More</a></li>
        </ul>
    </section>

    <?php get_footer(); ?>
</section>