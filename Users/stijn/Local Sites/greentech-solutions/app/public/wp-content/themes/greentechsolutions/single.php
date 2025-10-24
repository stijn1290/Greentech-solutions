<!-- Template bestand voor het weergeven van een enkele blog post met alle bijbehorende informatie -->
<?php get_header(); ?>
	<body class="single is-preload">

		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Main -->
					<div id="main">
                        <?php if(have_posts()): ?>
                            <?php while(have_posts()) : the_post(); ?>
						<!-- Opgegeven post inladen met desbetreffende informatie -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#"><?php the_title(); ?></a></h2>
									</div>
									<div class="meta">
                                        <time class="published" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="author">
                                            <span class="name"><?php the_author(); ?></span>
                                            <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt="" />
                                        </a>									</div>
								</header>
								<?php if(has_post_thumbnail()): ?>
                                    <a href="<?php the_permalink(); ?>" class="image featured"><?php the_post_thumbnail('full'); ?></a>
                                <?php endif; ?>
								<p><?php the_content() ?></p>
								<footer>
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
                            endwhile;
                         endif; ?>
					</div>

				<?php get_footer(); ?>

			</div>
	</body>