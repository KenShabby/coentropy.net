<?php get_header(); ?>

        <!-- Main Content -->
        <main class="site-main">

            <?php while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

                    <header class="single-post-header">
                        <h1 class="single-post-title"><?php the_title(); ?></h1>
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
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>

                    <footer class="post-footer">
                        <?php if (has_tag()) : ?>
                            <div class="post-tags">
                                🏷️ <?php the_tags('', ', ', ''); ?>
                            </div>
                        <?php endif; ?>
                    </footer>

                </article>

                <!-- Post Navigation -->
                <nav class="post-navigation">
                    <div class="nav-previous">
                        <?php if (get_previous_post()) : ?>
                            <span class="nav-label">&larr; Previous</span>
                            <a href="<?php echo get_permalink(get_previous_post()); ?>">
                                <?php echo get_the_title(get_previous_post()); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="nav-next">
                        <?php if (get_next_post()) : ?>
                            <span class="nav-label">Next &rarr;</span>
                            <a href="<?php echo get_permalink(get_next_post()); ?>">
                                <?php echo get_the_title(get_next_post()); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </nav>

                <!-- Comments -->
                <?php
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                ?>

            <?php endwhile; ?>

        </main><!-- .site-main -->

        <!-- Sidebar -->
        <aside class="sidebar">
            <?php if (is_active_sidebar('sidebar-1')) : ?>
                <?php dynamic_sidebar('sidebar-1'); ?>
            <?php else : ?>
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
                <div class="widget">
                    <h3 class="widget-title">Our Services</h3>
                    <ul>
                        <li><a href="https://www.coentropy.net/services.html">Computer Repair</a></li>
                        <li><a href="https://www.coentropy.net/services.html">Network Setup</a></li>
                        <li><a href="https://www.coentropy.net/services.html">Virus Removal</a></li>
                        <li><a href="https://www.coentropy.net/services.html">Data Recovery</a></li>
                        <li><a href="https://www.coentropy.net/pricing.html">Pricing</a></li>
                    </ul>
                </div>
            <?php endif; ?>
        </aside><!-- .sidebar -->

<?php get_footer(); ?>
