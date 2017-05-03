<?php if ( ! is_null( $debug ) ) : ?>
				<div>
					<strong>$main_args:</strong><br />
					<pre><?php print_r( $debug['main_args'] ); ?></pre>
					<strong>$permalinks_args:</strong><br />
					<pre><?php print_r( $debug['permalinks_args'] ); ?></pre>
				</div>
<?php endif; ?>

<div id="movieList" class="wpmoly block headbox allocine contained theme-epik position-top">

    <?php
    global $post;
    if ( ! empty( $movies ) ) :
    	foreach ( $movies as $post ) :
    		setup_postdata( $post );

            $runtime = wpmoly_get_movie_meta( get_the_ID(), 'runtime' );
            $homepage = wpmoly_get_movie_meta( get_the_ID(), 'homepage' );
            $audio = wpmoly_get_movie_meta( get_the_ID(), 'audio' );
            $cast = wpmoly_get_movie_meta( get_the_ID(), 'cast' );
            $releaseDate = apply_filters( 'wpmoly_format_movie_release_date', wpmoly_get_movie_meta( get_the_ID(), 'local_release_date'), 'm/d/Y' );

            $todayDate = date("m/d/Y");
            $dateTimestamp1 = strtotime($todayDate);
            $dateTimestamp2 = strtotime($releaseDate);
            if ($dateTimestamp1 < $dateTimestamp2) :
    ?>
    <div id="movie" class="wpmoly headbox allocine movie singleMovieRecord">
        <div class="wpmoly headbox allocine movie content">
            <div class="wpmoly headbox allocine movie content tab main">
                <div class="wpmoly headbox allocine movie poster">
                    <?php echo the_post_thumbnail( 'medium' ); ?>
                </div>
                <div class="wpmoly headbox allocine movie section main">
                    <div style="display:none" id="releaseDate"> <?php
                        echo $releaseDate;
                        ?>
                    </div>
                    <div style="display:none" id="test">
                        <?php echo $dateTimestamp1; ?><br>
                        <?php echo $dateTimestamp2; ?><br>
                        <?php echo $dateTimestamp1 < $dateTimestamp2; ?>
                    </div>
                    <div id="title">
                        <h4 class="wpmoly grid movie title"><?php echo apply_filters( 'wpmoly_format_movie_title', wpmoly_get_movie_meta( get_the_ID(), 'title' )); ?><?php echo apply_filters( 'wpmoly_format_movie_format', wpmoly_get_movie_meta( get_the_ID(), 'format' )); ?></h4>
                    </div>
                    <div class="wpmoly headbox allocine movie meta release_date">
                        <span class="wpmoly headbox allocine movie meta label"><?php _e( 'Release Date', 'wpmovielibrary' ); ?>&nbsp;</span>
                        <strong><?php echo apply_filters( 'wpmoly_format_movie_release_date', wpmoly_get_movie_meta( get_the_ID(), 'local_release_date' ), 'M d, Y');
                         ?></strong>
            <?php if ( ! empty($runtime) && '&mdash;' != $runtime) : ?>
                        <span class="wpmoly headbox allocine movie meta value">(Running Time: <?php echo $runtime; ?>)</span>
            <?php endif; ?>
                    </div>
                    <div class="wpmoly headbox allocine movie meta rating">
                        <span class="wpmoly headbox allocine movie meta label"><?php _e( 'Rated', 'wpmovielibrary' ); ?>&nbsp;</span>
                        <span class="wpmoly headbox allocine movie meta value"><?php echo wpmoly_get_movie_meta( get_the_ID(), 'certification' ); ?></span>
                    </div>
            <?php /** if ( ! empty( $cast )) :  ?>
                    <div class="wpmoly headbox allocine movie meta cast">
                        <span class="wpmoly headbox allocine movie meta label"><?php _e( 'Starring', 'wpmovielibrary' ); ?>&nbsp;</span>
                        <span class="wpmoly headbox allocine movie meta value"><?php echo $cast; ?></span>
                    </div>
            <?php endif; ?>**/ ?>
                    <div class="wpmoly headbox allocine movie meta genres">
                        <span class="wpmoly headbox allocine movie meta label"><?php _e( 'Genres', 'wpmovielibrary' ); ?>&nbsp;</span>
                        <span class="wpmoly headbox allocine movie meta value"><?php echo wpmoly_get_movie_meta( get_the_ID(), 'genres' ); ?></span>
                    </div>
            <?php if ( ! empty( $audio )) :  ?>
                    <div class="wpmoly headbox allocine movie meta audio">
                        <span class="wpmoly headbox allocine movie meta label"><?php _e( 'Formats', 'wpmovielibrary' ); ?>&nbsp;</span>
                        <span class="wpmoly headbox allocine movie meta value"><?php echo apply_filters( 'wpmoly_format_movie_audio', $audio); ?></span>
                    </div>
            <?php endif; ?>
                    <div class="wpmoly headbox allocine movie meta homepage">
                        <span class="wpmoly headbox allocine movie meta label"><?php _e( 'Homepage', 'wpmovielibrary' ); ?>&nbsp;</span>
                        <span class="wpmoly headbox allocine movie meta value"><a target="_newwindow" href="<?php echo $homepage; ?>"><?php echo $homepage; ?></a></span>
                    </div>
                </div>
                <div class="wpmoly headbox allocine movie section details">
                    <h3 class="wpmoly headbox allocine movie meta sub-title"><?php _e( 'Synopsis and Details', 'wpmovielibrary' ); ?></h3>
                    <p><?php echo wpmoly_get_movie_meta( get_the_ID(), 'overview'); ?></p>
                </div>
            </div>
        </div>
    </div>

    <?php
        endif;
    	endforeach;
    	wp_reset_postdata();
    else :
    ?>
    					<h5><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'wpmovielibrary' ); ?></h5>
    					<p><?php _e( 'We could&rsquo;t find any movie matching your criteria.', 'wpmovielibrary' ); ?></p>
    <?php endif; ?>
</div>
