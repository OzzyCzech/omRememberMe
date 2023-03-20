<?php
namespace omRememberMe;
/**
 * Plugin Name: omRememberMe
 * Plugin URI: https://ozana.cz
 * Description: Always remember Wordpress user for ever
 * Version: 1.0
 * Author: Roman Ožana
 * Author URI: https://ozana.cz/kontakt
 */

class omRememberMe {

	public function __construct() {
		add_action('login_form_login', array(&$this, 'rememberme'));
		add_action('login_form', array(&$this, 'hide_forgetmenot'));
	}

	/**
	 * Zapamatovat si uživatele na pořád
	 */
	public function rememberme() {
		$_POST['rememberme'] = 1;
	}

	public function hide_forgetmenot() {
		?>
		<style type="text/css">
			.forgetmenot {
				display: none;
			}
		</style>
	<?
	}
}

$omRememberMe = new omRememberMe();