<?php

if ( ! current_user_can( 'manage_options' ) )
	return;

add_action( 'admin_init', 'wpgpxmaps_register_settings' );

function wpgpxmaps__register_settings() {

	register_setting( 'wpgpxmaps_group', 'wpgpxmaps_allow_users_upload');
	register_setting( 'wpgpxmaps_group', 'wpgpxmaps_show_notice');

}

?>

<div id="wpgpxmaps-administration">

	<div class="wpgpxmaps-container-tab-settings">

		<form method="post" action="options.php">
			<?php wp_nonce_field( 'update-options' ); ?>

			<h3 class="title">
				<?php _e( 'User permissions', 'wp-gpx-maps' ); ?>
			</h3>

			<table class="form-table">

				<tr>
					<th scope="row">
						<?php _e( 'Editor & Author upload:', 'wp-gpx-maps' ); ?>
					</th>
					<td>
						<input name="wpgpxmaps_allow_users_upload" type="checkbox" value="1" <?php if ( get_option( 'wpgpxmaps_allow_users_upload' ) == 1) echo 'checked="checked"'; ?>" />
						<i>
							<?php _e( 'Allow Editors & Authors to upload GPX files', 'wp-gpx-maps' ); ?>
						</i>
					</td>
				</tr>

			</table>

			<p class="submit">
				<input type="hidden" name="action" value="update" />
				<input name="page_options" type="hidden" value="wpgpxmaps_allow_users_upload" />
				<input type="submit" class="button-primary" value="<?php _e( 'Save Changes', 'wp-gpx-maps' ); ?>" />
			</p>

		</form>

		<hr />

		<form method="post" action="options.php">
			<?php wp_nonce_field( 'update-options' ); ?>

			<h3 class="title">
				<?php _e( 'Notifications', 'wp-gpx-maps' ); ?>
			</h3>

			<table class="form-table">
				<tr>
					<th scope="row">
						<?php _e( 'Show update notice:', 'wp-gpx-maps' ); ?>
					</th>
					<td>
						<input name="wpgpxmaps_show_notice" type="checkbox" value="1" <?php if ( get_option( 'wpgpxmaps_show_notice' ) == 1) echo 'checked="checked"'; ?>" />
						<i>
							<?php _e( 'Displays the update notices for a new WP GPX Maps version', 'wp-gpx-maps' ); ?>
						</i>
					</td>
				</tr>

			</table>

			<p class="submit">
				<input type="hidden" name="action" value="update" />
				<input name="page_options" type="hidden" value="wpgpxmaps_show_notice" />
				<input type="submit" class="button-primary" value="<?php _e( 'Save Changes', 'wp-gpx-maps' ); ?>" />
			</p>

		</form>

	</div>

</div>
