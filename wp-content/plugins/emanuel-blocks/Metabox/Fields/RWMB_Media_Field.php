<?php

class RWMB_Media_Field extends RWMB_Field {
	public static function html( $meta, $field ) {
		$title = '';
		if (!empty($meta)) {
			$attachment = get_post($meta);
			$title = basename($attachment->guid);
		}

		return '
		<div data-component="media-field">
		<input type="hidden" data-role="input" name="'.$field['field_name'].'" value="'.$meta.'" />
		<button data-role="open-btn" class="button insert-media add_media">Open Library</button>
		<button data-role="remove-btn" class="submitdelete deletion">Remove</button>
		<span data-role="name">'.$title.'</span>
		</div>
		';
	}
}