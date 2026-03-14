<?php get_header(); ?>

        <!-- Main Content -->
        <main class="site-main">

            <?php if (have_posts()) : ?>

                <?php if (is_home() && !is_front_page()) : ?>
                    <h1>Blog</h1>
                <?php endif; ?>

                <?php while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

                        <header class="post-header">
                            <h2 class="post-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div class="post-meta">
                                <span class="post-date">📅 <?php echo get_the_date(); ?></span>
                                <span class="post-author">✍️ <?php the_author(); ?></span>
                                <?php if (has_category()) : ?>
                                    <span class="post-cats">🗂️ <?php the_category(', '); ?></span>
                                <?php endif; ?>
                            </div>
                        </header>

                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large'); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="post-excerpt">
                            <?php the_excerpt(); ?>
                        </div>

                    </article>

                <?php endwhile; ?>

                <!-- Pagination -->
                <div class="pagination">
                    <?php
                    echo paginate_links(array(
                        'prev_text' => '&larr; Newer',
                        'next_text' => 'Older &rarr;',
                    ));
                    ?>
                </div>

            <?php else : ?>

                <div class="no-results">
                    <h2>Nothing here yet</h2>
                    <p>Looks like the blog is just getting started. Check back soon!</p>
                </div>

            <?php endif; ?>

        </main><!-- .site-main -->

        <!-- Sidebar -->
        <aside class="sidebar">
            <?php if (is_active_sidebar('sidebar-1')) : ?>
                <?php dynamic_sidebar('sidebar-1'); ?>
            <?php else : ?>
                <!-- Default sidebar content before widgets are configured -->
                <div class="widget">
                    <h3 class="widget-title">About This Blog</h3>
                    <p style="font-size:0.9rem; opacity:0.85;">Tech tips, how-tos, and IT advice
                    for home users and small businesses in Sonoma County.</p>
                </div>
                <div class="widget">
                    <h3 class="widget-title">Get Help Now</h3>
                    <p style="font-size:0.9rem; opacity:0.85; margin-bottom:0.8rem;">
                    Need IT support in Santa Rosa or Sonoma County?</p>
                    <a href="tel:+17075950805" style="
                        display:block;
                        background:#25D366;
                        color:#111;
                        text-align:center;
                        padding:0.7rem;
                        border-radius:20px;
                        font-weight:700;
                        font-size:0.9rem;
                        text-decoration:none;">
                        📞 (707) 595-0805
                    </a>
                </div>
            <?php endif; ?>
        </aside><!-- .sidebar -->

<?php get_footer(); ?>
