<?php
/**
 * WooCommerce Admin Onboarding Email Marketing Note Provider.
 *
 * Adds a note to sign up to email marketing after completing the profiler.
 *
 * @package WooCommerce Admin
 */

namespace Automattic\WooCommerce\Admin\Notes;

defined( 'ABSPATH' ) || exit;

/**
 * WC_Admin_Notes_Onboarding_Email_Marketing
 */
class WC_Admin_Notes_Onboarding_Email_Marketing {
	/**
	 * Name of the note for use in the database.
	 */
	const NOTE_NAME = 'wc-admin-onboarding-email-marketing';

	/**
	 * Possibly add email marketing note.
	 */
	public static function possibly_add_onboarding_email_marketing_note() {
		$data_store = \WC_Data_Store::load( 'admin-note' );

		// We already have this note? Then exit, we're done.
		$note_ids = $data_store->get_notes_with_name( self::NOTE_NAME );
		if ( ! empty( $note_ids ) ) {
			return;
		}

		$content = __( 'We\'re here for you - get tips, product updates and inspiration straight to your email box', 'woocommerce' );

		$note = new WC_Admin_Note();
		$note->set_title( __( 'Tips, product updates, and inspiration', 'woocommerce' ) );
		$note->set_content( $content );
		$note->set_content_data( (object) array() );
		$note->set_type( WC_Admin_Note::E_WC_ADMIN_NOTE_INFORMATIONAL );
		$note->set_icon( 'mail' );
		$note->set_name( self::NOTE_NAME );
		$note->set_source( 'woocommerce-admin' );
		$note->add_action( 'yes-please', __( 'Yes please!', 'woocommerce' ), 'https://woocommerce.us8.list-manage.com/subscribe/post?u=2c1434dc56f9506bf3c3ecd21&amp;id=13860df971&amp;SIGNUPPAGE=plugin' );
		$note->save();
	}
}
