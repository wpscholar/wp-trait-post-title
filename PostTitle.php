<?php

namespace wpscholar\WordPress\Traits;

/**
 * Class PostTitle
 *
 * @package wpscholar\WordPress\Traits
 *
 * @property \WP_Post $post
 */
trait PostTitle {

	/**
	 * Get the post title.
	 *
	 * @return string
	 */
	public function postTitle() {
		return get_the_title( $this->post );
	}

}
