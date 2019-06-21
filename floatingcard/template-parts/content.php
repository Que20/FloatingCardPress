<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sidebar
 */

if ( ! is_active_sidebar( 'sidebar-main' ) ) {
 	$sidebar_col_class = "col-md-4 col-sm-4 col-xs-12";
}
else {
 	$sidebar_col_class = "col-md-6 col-sm-6 col-xs-12";
}

$colors = Array("blue","orange","purple","pink","gray","green");
$color = $colors[array_rand($colors)];
$imageurl = get_the_post_thumbnail_url();
$bgImageCSS = "";

if ( !empty( $imageurl ) ) {
    $bgImageCSS = "background-image: linear-gradient(to bottom, rgba(198, 198, 198, 0.5), rgba(0, 0, 0, 0.73)), url('".$imageurl."');background-size: cover;color:black";
}

$tagurl = home_url( '/tag/' )
?>


<div class="<?php echo esc_attr($sidebar_col_class); ?>">
    <article class="card <?php echo $color; ?>" style="<?php echo $bgImageCSS; ?>">
        <!-- <article id="post-<?php the_ID(); ?>" <?php post_class('post card_one'); ?>> -->
                <?php if ( is_sticky() ) {  ?>                            
                    <div class="ribbon"><span><?php echo esc_html('STICKY', 'sidebar'); ?></span></div>
                <?php } ?>                         
                <!-- <div class="img_holder">
                    <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                        <?php the_post_thumbnail('sidebar-featured', array('class' => 'img-responsive card_one_img')); ?>
                    </a>                                            
                </div> -->
                <!-- <div class="text_holder">
                    <p class="category">
                        <?php            
                            $categories = get_the_category();
                            if ( !empty( $categories ) ) {
                        ?>
                                <span><?php echo esc_html( $categories[0]->name ); ?></span>
                        <?php } ?>        
                        <span class="separator"><?php echo esc_html('|', 'sidebar'); ?></span>
                        <span class="date"><?php echo get_the_date(get_option( 'date-format' ) ); ?></span>
                    </p>
                    <a class="entry-title" href="<?php the_permalink(); ?>">This is <?php the_title(); ?></a>
                    
                    <?php the_excerpt(); ?>
                </div> -->
                <a href="<?php the_permalink(); ?>">
                    <div class='card-title'>
                        <?php the_title(); ?>
                    </div>

                    <div class='card-description'>

                        <?php the_excerpt(); ?>
                        <br>
                        <?php echo get_the_date(get_option( 'date-format' ) ); ?>
                    </div>

                    <div class="card-tag-list">
                        <!-- <div class="card-tag">
                            <?php            
                                $categories = get_the_category();
                                if ( !empty( $categories ) ) {
                            ?>
                                    <span><?php echo esc_html( $categories[0]->name ); ?></span>
                            <?php } ?>
                        </div> -->
                        <?php
                            $posttags = get_the_tags();
                            if ($posttags) {
                                foreach($posttags as $tag) {
                                    $tagname = $tag->name . ' ';
                                    ?>
                                    <a href="<?php echo $tagurl.$tagname; ?>">
                                        <div class="card-tag"> 
                                            <?php echo $tagname; ?>    
                                        </div>
                                    </a>
                                    <?php 
                                }
                            }
                        ?>
                    </div>
                </a>
    </article>		
</div>
					<!-- #post-<?php the_ID(); ?> -->                                                