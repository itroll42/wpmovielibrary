<?php
/**
 * Movie Headbox Details Tab Template view
 *
 * Showing a movie's headbox details tab, AllocinÃ© style.
 *
 * @since    2.1.4
 *
 * @uses    $id
 * @uses    $tagline
 * @uses    $overview
 * @uses    $details
 * @uses    $metas
 */
?>

					<div class="wpmoly headbox allocine movie section">
						<h3 class="wpmoly headbox allocine movie meta sub-title"><?php _e( 'Details', 'wpmovielibrary' ); ?></h3>
						<div class="wpmoly headbox allocine movie subsection full">
							<ul>

<?php foreach ( $metas as $meta ) : ?>
								<li>
									<span class="wpmoly headbox allocine movie meta label">
<?php
	if ($meta['title'] == 'Certification')
	{
?>
	Rated
<?php
	}
	else
	{
?>
	<?php echo $meta['title']; ?>
<?php
	}
?>
&nbsp;</span>
								<span class="wpmoly headbox allocine movie meta value"><?php echo $meta['value']; ?></span>
								</li>

<?php endforeach; ?>
							</ul>
						</div>
					</div>
