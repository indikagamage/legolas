<?php
$posts_section_atts = get_query_var( 'posts_section_atts' );
$query              = new WP_Query( array(
	'post_type'      => 'post',
	'cat'            => $posts_section_atts['category'],
	'posts_per_page' => $posts_section_atts['posts_per_page'],
) );

if ( $query->have_posts() ) :
	$category = get_category( $posts_section_atts['category'] );
	$html           = '';
	$count          = 0;
	?>
	<div class="latest-posts lp-type3 clearfix">
		<?php if ( isset( $category->name ) ) : ?>
			<div class="col-md-12">
				<div class="lp-category-name-wrap">
					<h2 class="lp-category-name"><?php echo wp_kses( $category->name, the_journal_allowed_html() ); ?></h2>
				</div>
			</div>
		<?php endif; ?>
		<div class="lp-content clearfix">
			<?php while ( $query->have_posts() ) : $query->the_post();
				++ $count; ?>
				<?php if ( $count <= 2 ) : ?>
					<div class="col-md-6 col-sm-6">
						<div class="lp-item">
							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>" class="lp-thumb">
									<?php the_post_thumbnail(); ?>
								</a>
							<?php endif; ?>
							<div class="lp-item-content">
								<div class="lp-meta">
									<?php the_journal_posted_on(); ?>
									<a href="<?php the_permalink(); ?>#comments"
									   class="lp-comments-link"><span><?php echo wp_kses( get_comments_number(), the_journal_allowed_html() ); ?></span></a>
								</div>
								<h4 class="lp-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h4>
								<div class="lp-text">
									<?php the_excerpt(); ?>
								</div>
							</div>
						</div>
					</div>
					<?php if ( $count == 2 ) : ?>
						<div class="clearfix"></div>
					<?php endif; ?>
				<?php else :
					$html .= '<div class="col-md-6 col-sm-6">
						<div class="lp-other-posts">
							<div class="lp-other-posts-item">';

					if ( has_post_thumbnail() ) :
						$html .= '<a href="' . esc_url( get_permalink() ) . '" class="lp-other-posts-thumb">
										' . get_the_post_thumbnail( null, 'thumbnail' ) . '
									</a>';
					endif;

					$html .= '<div class="lp-other-posts-content">
									<h4 class="lp-other-posts-title">
										<a href="' . esc_url( get_permalink() ) . '">' . get_the_title() . '</a>
									</h4>
									<div class="lp-other-posts-text">
										' . get_the_excerpt() . '
									</div>
									<div class="lp-other-posts-meta">' . the_journal_posted_on( true ) . '</div>
								</div>';

					$html .= '</div><!-- /.lp-other-posts-item -->
						</div><!-- /.lp-other-posts -->
					</div><!-- /.col-md-6 -->';
					if ( $count % 2 == 0 ) :
						$html .= '<div class="clearfix"></div>';
					endif;
				endif; ?>
			<?php endwhile; ?>
			<?php echo $html; ?>
		</div>
	</div>
<?php else :
	get_template_part( 'content', 'none' );
endif;