<?php
/**
 * Movie Headbox Overview Tab Template view
 *
 * Showing a movie's headbox overview tab, AllocinÃ© style.
 *
 * @since    2.1.4
 *
 * @uses    $overview
 * @uses    $metas
 */
?>

					<div class="wpmoly headbox allocine movie poster">
<?php if ( ! empty( $poster ) ) : ?>
						<?php echo $poster; ?>

<?php endif; ?>
					</div>
					<div class="wpmoly headbox allocine movie section main">
<?php if ( ! empty( $meta['release_date'] ) ) : ?>
						<div class="wpmoly headbox allocine movie meta release_date">
							<span class="wpmoly headbox allocine movie meta label"><?php _e( 'Release Date', 'wpmovielibrary' ); ?>&nbsp;</span>
							<strong><?php echo $meta['release_date']; ?></strong>
<?php if ( ! empty( $meta['runtime'] ) && '&mdash;' != $meta['runtime'] ) : ?>
							<span class="wpmoly headbox allocine movie meta value">(<?php echo $meta['runtime']; ?>)</span>
<?php endif; ?>
						</div>
<?php endif; ?>
                        <div class="wpmoly headbox allocine movie meta rating">
                            <span class="wpmoly headbox allocine movie meta label"><?php _e( 'Rated', 'wpmovielibrary' ); ?>&nbsp;</span>
                            <span class="wpmoly headbox allocine movie meta value"><?php echo $meta['certification']; ?></span>
                        </div>
						<div class="wpmoly headbox allocine movie meta director">
							<span class="wpmoly headbox allocine movie meta label"><?php _e( 'Directed by', 'wpmovielibrary' ); ?>&nbsp;</span>
							<span class="wpmoly headbox allocine movie meta value"><?php echo $meta['director']; ?></span>
						</div>
<?php if ( ! empty( $meta['cast'] )) :  ?>
						<div class="wpmoly headbox allocine movie meta cast">
							<span class="wpmoly headbox allocine movie meta label"><?php _e( 'Starring', 'wpmovielibrary' ); ?>&nbsp;</span>
							<span class="wpmoly headbox allocine movie meta value"><?php echo $meta['cast']; ?></span>
						</div>
<?php endif; ?>
						<div class="wpmoly headbox allocine movie meta genres">
							<span class="wpmoly headbox allocine movie meta label"><?php _e( 'Genres', 'wpmovielibrary' ); ?>&nbsp;</span>
							<span class="wpmoly headbox allocine movie meta value"><?php echo $meta['genres']; ?></span>
						</div>
<?php if ( ! empty( $meta['format'] )) :  ?>
                        <div class="wpmoly headbox allocine movie meta format">
                            <span class="wpmoly headbox allocine movie meta label"><?php _e( 'Format', 'wpmovielibrary' ); ?>&nbsp;</span>
                            <span class="wpmoly headbox allocine movie meta value"><?php echo $meta['format']; ?></span>
                        </div>
<?php endif; ?>
<?php if ( ! empty( $meta['audio'] )) :  ?>
                        <div class="wpmoly headbox allocine movie meta audio">
                            <span class="wpmoly headbox allocine movie meta label"><?php _e( 'Audio', 'wpmovielibrary' ); ?>&nbsp;</span>
                            <span class="wpmoly headbox allocine movie meta value"><?php echo $meta['audio']; ?></span>
                        </div>
<?php endif; ?>
                        <div class="wpmoly headbox allocine movie meta homepage">
                            <span class="wpmoly headbox allocine movie meta label"><?php _e( 'Homepage', 'wpmovielibrary' ); ?>&nbsp;</span>
                            <span class="wpmoly headbox allocine movie meta value"><?php echo $meta['homepage']; ?></span>
                        </div>

					</div>
					<div class="wpmoly headbox allocine movie section details">
						<h3 class="wpmoly headbox allocine movie meta sub-title"><?php _e( 'Synopsis and Details', 'wpmovielibrary' ); ?></h3>
						<p><?php echo $meta['overview']; ?></p>
					</div>
					<hr />
