<!-- Dashboard Settings panel content -->
<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$js = ' ';

?>
<div class="row">
	<div class="post-social-wrapper clearfix">
		<div class="col-md-12 post-social-item">
			<div class="panel panel-default">
				<div class="panel-heading padding-none">
					<div class="post-social post-social-xs" id="post-social-5">
						<div class="text-center padding-all text-center">
							<div class="textbox text-white   margin-bottom settings-title">
								<?php esc_html_e( 'Google Captcha Settings', 'admin-custom-login' ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel panel-primary panel-default content-panel">
		<div class="panel-body">
			<table class="form-table">
				<tr>
					<th scope="row" ><?php esc_html_e( 'Captcha Display', 'admin-custom-login' ); ?></th>
					<td></td>
				</tr>
				<tr class="radio-span">
					<td>
						<span>
							<input type="radio" name="enable_gacptcha" value="yes" id="login_enable_gcaptcha1" 
							<?php
							if ( $login_enable_gcaptcha == 'yes' ) {
								echo esc_attr( 'checked' );}
							?>
							 />&nbsp;<label for="login_enable_gcaptcha1"><?php esc_html_e( 'Enable', 'admin-custom-login' ); ?></label><br>
						</span>
						<span>
							<input type="radio" name="enable_gacptcha" value="no" id="login_enable_gcaptcha2" 
							<?php
							if ( $login_enable_gcaptcha == 'no' ) {
								echo esc_attr( 'checked' );}
							?>
							 />&nbsp;<label for="login_enable_gcaptcha2"><?php esc_html_e( 'Disable', 'admin-custom-login' ); ?></label><br>
						</span>
						<div class="acl_gcaptcha_info"><strong><?php esc_html_e( 'Note : ', 'admin-custom-login' ); ?></strong> <?php esc_html_e( 'After enable google captcha display please insert site key & secret key.', 'admin-custom-login' ); ?></div>
					</td>
				</tr>

				<tr>
					<th scope="row" ><?php esc_html_e( 'Google Captcha v2 and v3 Settings', 'admin-custom-login' ); ?></th>
					<td></td>
				</tr>
				<tr class="radio-span">
					<td><?php esc_html_e( 'Need Help?', 'admin-custom-login' ); ?>
						<a href="http://www.weblizar.com" target="_blank"><?php esc_html_e( 'Visit Help Center', 'admin-custom-login' ); ?> </a>
						<div class="acl_gcaptcha_sub_label"><?php esc_html_e( 'Authentication', 'admin-custom-login' ); ?></div>
						<div class="acl_gcaptcha_info"><?php esc_html_e( 'Register your website with Google to get required API keys and enter them below.', 'admin-custom-login' ); ?> <a target="_blank" href="https://weblizar.com/blog/how-to-generate-recaptcha-keys-for-your-domain/"><?php esc_html_e( 'Get the API Keys', 'admin-custom-login' ); ?></a></div>
					</td>
				</tr>

				<tr>
					<th scope="row" ><?php esc_html_e( 'Choose Google Captcha Version', 'admin-custom-login' ); ?></th>
					<td></td>
				</tr>
				<tr class="radio-span">
					<td>
						<span>
							<input type="radio" name="v_gacptcha" value="v2" id="login_v_gcaptcha1" 
							<?php
							if ( $login_v_gcaptcha == 'v2' ) {
								echo esc_attr( 'checked' );}
							?>
							 />&nbsp;<label for="login_v_gcaptcha1"><?php esc_html_e( 'v2', 'admin-custom-login' ); ?></label><br>
						</span>
						<span>
							<input type="radio" name="v_gacptcha" value="v3" id="login_v_gcaptcha2" 
							<?php
							if ( $login_v_gcaptcha == 'v3' ) {
								echo esc_attr( 'checked' );}
							?>
							 />&nbsp;<label for="login_v_gcaptcha2"><?php esc_html_e( 'v3', 'admin-custom-login' ); ?></label><br>
						</span>
						<div class="acl_gcaptcha_info"><strong><?php esc_html_e( 'Note :', 'admin-custom-login' ); ?> </strong><?php esc_html_e( 'After select google captcha version please insert site key & secret key.', 'admin-custom-login' ); ?> </div>
					</td>
				</tr>

				<tr class="recaptcha_keys_v2">
					<th scope="row" ><?php esc_html_e( 'Site Key', 'admin-custom-login' ); ?></th>
					<td></td>
				</tr>
				<tr class="radio-span recaptcha_keys_v2">
					<td>
						<input type="text" class="pro_text" id="site-key" name="site-key" placeholder="<?php esc_attr_e( 'Site Key', 'admin-custom-login' ); ?>" size="56" value="<?php echo esc_attr( $site_key ); ?>"/>
					</td>
				</tr>
				<tr class="recaptcha_keys_v2">
					<th scope="row" ><?php esc_html_e( 'Secret Key', 'admin-custom-login' ); ?></th>
					<td></td>
				</tr>
				<tr class="radio-span recaptcha_keys_v2">
					<td>
						<input type="text" class="pro_text" id="secret-key" name="secret-key" placeholder="<?php esc_attr_e( 'Secret Key', 'admin-custom-login' ); ?>" size="56" value="<?php echo esc_attr( $secret_key ); ?>"/>
					</td>
				</tr>
				<tr class="recaptcha_keys_v2">
					<th scope="row" ><?php esc_html_e( 'Captcha Theme', 'admin-custom-login' ); ?></th>
					<td></td>
				</tr>
				<tr class="radio-span recaptcha_keys_v2">
					<td>
						<span>
							<input type="radio" name="acl_gcaptcha_theme" value="yes" id="acl_gcaptcha_theme1" 
							<?php
							if ( $acl_gcaptcha_theme == 'yes' ) {
								echo esc_attr( 'checked' );}
							?>
							 />&nbsp;<label for="acl_gcaptcha_theme1"><?php esc_html_e( 'Light', 'admin-custom-login' ); ?></label><br>
						</span>
						<span>
							<input type="radio" name="acl_gcaptcha_theme" value="no" id="acl_gcaptcha_theme2" 
							<?php
							if ( $acl_gcaptcha_theme == 'no' ) {
								echo esc_attr( 'checked' );}
							?>
							 />&nbsp;<label for="acl_gcaptcha_theme2"><?php esc_html_e( 'Dark', 'admin-custom-login' ); ?></label><br>
						</span>
					</td>
				</tr> 

				<tr class="recaptcha_keys_v3">
					<th scope="row" ><?php esc_html_e( 'Site Key', 'admin-custom-login' ); ?></th>
					<td></td>
				</tr>
				<tr class="radio-span recaptcha_keys_v3">
					<td>
						<input type="text" class="pro_text" id="site-key-v3" name="site-key-v3" placeholder="<?php esc_attr_e( 'Site Key', 'admin-custom-login' ); ?>" size="56" value="<?php echo esc_attr( $site_key_v3 ); ?>"/>
					</td>
				</tr>
				<tr class="recaptcha_keys_v3">
					<th scope="row" ><?php esc_html_e( 'Secret Key', 'admin-custom-login' ); ?></th>
					<td></td>
				</tr>
				<tr class="radio-span recaptcha_keys_v3">
					<td>
						<input type="text" class="pro_text" id="secret-key-v3" name="secret-key-v3" placeholder="<?php esc_attr_e( 'Secret Key', 'admin-custom-login' ); ?>" size="56" value="<?php echo esc_attr( $secret_key_v3 ); ?>"/>
					</td>
				</tr>

			</table>
			<div class="save-button-block">
				<button type="button" onclick="return Custom_gcaptcha('googleSave', '');" class="btn btn-info btn-lg"><?php esc_html_e( 'Save Changes', 'admin-custom-login' ); ?></button>
				<button type="button" onclick="return Custom_gcaptcha('googleReset', '');" class="btn btn-primary btn-lg"><?php esc_html_e( 'Reset Default', 'admin-custom-login' ); ?></button>
			</div>
		</div>
	</div>
	
	<button data-dialog49="somedialog49" class="dialog-button49 d-none"><?php esc_html_e( 'Open Dialog', 'admin-custom-login' ); ?></button>
	<div id="somedialog49" class="dialog dialog-fixed-z">
		<div class="dialog__overlay"></div>
		<div class="dialog__content">
			<div class="morph-shape" data-morph-open="M33,0h41c0,0,0,9.871,0,29.871C74,49.871,74,60,74,60H32.666h-0.125H6c0,0,0-10,0-30S6,0,6,0H33" data-morph-close="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33">
				<svg xmlns="" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
					<path d="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33"></path>
				</svg>
			</div>
			<div class="dialog-inner">
				<h2><strong><?php esc_html_e( 'Google Captcha', 'admin-custom-login' ); ?></strong> <?php esc_html_e( 'Setting Save Successfully', 'admin-custom-login' ); ?></h2><div><button class="action dialog-button-close" data-dialog-close id="dialog-close-button49"><?php esc_html_e( 'Close', 'admin-custom-login' ); ?></button></div>
			</div>
		</div>
	</div>
	<button data-dialog109="somedialog109" class="dialog-button109 d-none"><?php esc_html_e( 'Open Dialog', 'admin-custom-login' ); ?></button>
	<div id="somedialog109" class="dialog dialog-fixed-z">
		<div class="dialog__overlay"></div>
		<div class="dialog__content">
			<div class="morph-shape" data-morph-open="M33,0h41c0,0,0,9.871,0,29.871C74,49.871,74,60,74,60H32.666h-0.125H6c0,0,0-10,0-30S6,0,6,0H33" data-morph-close="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33">
				<svg xmlns="" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
					<path d="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33"></path>
				</svg>
			</div>
			<div class="dialog-inner">
				<h2><strong><?php esc_html_e( 'Google Captcha', 'admin-custom-login' ); ?></strong> <?php esc_html_e( 'Setting Reset Successfully', 'admin-custom-login' ); ?></h2><div><button class="action dialog-button-close" data-dialog-close id="dialog-close-button109"><?php esc_html_e( 'Close', 'admin-custom-login' ); ?></button></div>
			</div>
		</div>
	</div>
</div>
<!-- /row -->
<?php

if ( isset( $_POST['Action'] ) ) {
	$Action = (isset($_POST["Action"]) ? sanitize_text_field($_POST["Action"]) : "");
	if ( ! wp_verify_nonce( $_POST['nonce_ajax'], 'weblizar_admin_nonce' ) ) {
		die( 'Not authorized' );
	} else {
		// Save Page Values
		if ( $Action == 'googleSave' ) {
			$site_key              = (isset($_POST["site_key"]) ? sanitize_text_field($_POST["site_key"]) : "");
			$secret_key            = (isset($_POST["secret_key"]) ? sanitize_text_field($_POST["secret_key"]) : "");
			$site_key_v3           = (isset($_POST["site_key_v3"]) ? sanitize_text_field($_POST["site_key_v3"]) : "");
			$secret_key_v3         = (isset($_POST["secret_key_v3"]) ? sanitize_text_field($_POST["secret_key_v3"]) : "");
			$login_v_gcaptcha      = (isset($_POST["login_v_gcaptcha"]) ? sanitize_text_field($_POST["login_v_gcaptcha"]) : "");
			$login_enable_gcaptcha = (isset($_POST["login_enable_gcaptcha"]) ? sanitize_text_field($_POST["login_enable_gcaptcha"]) : "");
			$acl_gcaptcha_theme    = (isset($_POST["acl_gcaptcha_theme"]) ? sanitize_text_field($_POST["acl_gcaptcha_theme"]) : "");

			// save values in option table
			$g_page = serialize(
				array(
					'site_key'              => $site_key,
					'secret_key'            => $secret_key,
					'site_key_v3'           => $site_key_v3,
					'secret_key_v3'         => $secret_key_v3,
					'login_v_gcaptcha'      => $login_v_gcaptcha,
					'login_enable_gcaptcha' => $login_enable_gcaptcha,
					'acl_gcaptcha_theme'    => $acl_gcaptcha_theme,
				)
			);
			update_option( 'Admin_custome_login_gcaptcha', $g_page );
		}

		// Reset Page Settings
		if ( $Action == 'googleReset' ) {
			$g_page = serialize(
				array(

					'site_key'              => '',
					'secret_key'            => '',
					'site_key_v3'           => '',
					'secret_key_v3'         => '',
					'login_v_gcaptcha'      => 'v2',
					'login_enable_gcaptcha' => 'no',
					'acl_gcaptcha_theme'    => 'yes',

				)
			);
			update_option( 'Admin_custome_login_gcaptcha', $g_page );
		}
	}
}
function add_google_captcha_script() {
	wp_register_script( 'wl-acl-login-gcaptcha', '', array(), WEBLIZAR_ACL_VERSION, true );
	wp_enqueue_script( 'wl-acl-login-gcaptcha' );
	wp_add_inline_script( 'wl-acl-login-gcaptcha', $js );
}
add_action( 'wp_enqueue_scripts', 'add_google_captcha_script' );
