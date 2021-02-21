<?php get_header();?>
        <img class="img-fluid" src="<?php header_image(); ?>" 
        height="<?php echo get_custom_header()->height; ?>"
        width="<?php echo get_custom_header()->width; ?>" />
        <div class="content-area">
            <main>
                <div class="container">
                    <div class="row">
                        <?php
                            while(have_posts()): the_post(); 
                        ?>
                        <article  id="post-<?php the_ID();?>" <?php post_class();?>>
                            <header>
                            <h1> <?php the_title();?> </h1>
                            </header>
                            <div class="meta">
                                    <p>Postado por <?php the_author_posts_link();?> em <a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a> 
                                <br />
                                <?php if( has_category() ): ?>
                                    Categorias: <span> <?php the_category('');?></span>
                                <br />
                                <?php endif; ?>
                                <?php if( has_tag() ): ?>
                                    Tags: <span> <?php the_tags(", ', '");?></span>
                                <?php endif; ?>
                                </p>
                            </div>
                            <div class="post-thumbnail"> 
                                <?php
                                    if(has_post_thumbnail()){
                                        the_post_thumbnail('aprendawp-blog', array('class' => 'img-fluid'));
                                    }
                                ?>
                            </div>
                            
                            <div class="content">
                                <?php the_content();?>
                            </div>
                        </article>        
                        <?php
                            endwhile;
                        ?>        
                        <p> Ainda nao exitem posts por aqui ;) </p>               
                    </div>
                </div>
            </main>
        </div>
    <?php get_footer();?>