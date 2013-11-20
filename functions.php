<?php
/**
 * Twenty Eleven child functions and definitions
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 * For more information on child themes, see http://codex.wordpress.org/Child_Themes
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

if ( ! function_exists( 'twentyeleven_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 * Create your own twentyeleven_posted_on to override in a child theme
 *
 * @author Oliver Raduner <blog@raduner.ch>
 * @since Twenty Eleven 1.0
 */
function twentyeleven_posted_on()
{
	printf( __( '<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'twentyeleven' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_the_author_meta( 'jabber', get_the_author_ID() ) ),
		esc_html( sprintf( __( "View %s's Profile on Google+", "twentyeleven" ), get_the_author() ) ),
		esc_attr( get_the_author() )
	);
}
endif;
