    <?php get_header();?>
        <img class="img-fluid" src="<?php header_image(); ?>" 
        height="<?php echo get_custom_header()->height; ?>"
        width="<?php echo get_custom_header()->width; ?>" />
        <div class="content-area">
            <main>
                <div class="container">
                    <div class="row">
                        <?php
                            if(have_posts()): while(have_posts()): the_post(); 
                        ?>
                        <article>
                            <h2><a href="<?php the_permalink();?>" <?php the_title();?></h2>
                            <div class="post-thumbnail"> 
                                <?php
                                    if(has_post_thumbnail()){
                                        the_post_thumbnail('aprendawp-blog', array('class' => 'img-fluid'));
                                    }
                                ?>
                            </div>
                            <div class="meta">
                                    <p>Postado por <?php the_author_posts_link();?> em <a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a> </p>
                            </div>
                            <div class="content"><?php the_excerpt();?></div>
                        </article>        
                        <?php
                            endwhile;
                            else:
                        ?>        
                        <p> Ainda nao exitem posts por aqui ;) </p>
                        <?php endif; ?>               
                    </div>
                </div>
            </main>
        </div>
    <?php get_footer();?>