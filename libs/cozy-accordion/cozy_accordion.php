<?php

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// This slug will be used on all WiselyThemes plugin to avoid loading duplicate item
defined( 'WT_PREFIX' ) or define( 'WT_PREFIX', 'tx' );

require_once 'shortcode/accordion.php';
require_once 'helper/html.php';

final class WT_CozyAccordion
{

	/**
	 * Hook WordPress
	 */
	public function __construct()
	{
		add_action('media_buttons', array($this, 'addAccordionButton'), 15);
		add_action('wp_enqueue_media', array($this, 'loadAdminScripts'));
		add_action('wp_enqueue_scripts', array($this, 'loadSiteScripts'));
	}
	/**
	 * Add Button On AddMedia area
	 *
	 * @access public
	 * @return void
	 * @since 0.1
	 */
	public function addAccordionButton()
	{
		echo Html::getMediaButtion();
		echo Html::getModal();
	}
	/**
	 * Load Common scripts for frontend and backend
	 *
	 * @access public
	 * @return void
	 * @since 0.1
	 */
	public function loadCommonScripts()
	{
		wp_enqueue_style(
			WT_PREFIX . '-fontawesome',
			get_template_directory_uri() . '/libs/cozy-accordion/assets/vendor/font-awesome/css/font-awesome.min.css',
			array()
		);

		wp_enqueue_script(
			WT_PREFIX . '-bs-transition',
			get_template_directory_uri() . '/libs/cozy-accordion/assets/vendor/bootstrap/js/transition.js',
			array('jquery')
		);

		wp_enqueue_script(
			WT_PREFIX .'-bs-collapse',
			get_template_directory_uri() . '/libs/cozy-accordion/assets/vendor/bootstrap/js/collapse.js',
			array()
		);
	}
	/**
	 * Load Admin Scripts
	 *
	 * @access public
	 * @return void
	 * @since 0.1
	 */
	public function loadAdminScripts()
	{
		$this->loadCommonScripts();

		wp_enqueue_style(
			WT_PREFIX . '-app',
			get_template_directory_uri() . '/libs/cozy-accordion/assets/css/app.min.css',
			array()
		);

		wp_enqueue_script(
			WT_PREFIX .	'-bs-modal',
			get_template_directory_uri() . '/libs/cozy-accordion/assets/vendor/bootstrap/js/modal.js',
			array()
		);

		wp_enqueue_script(
			WT_PREFIX .'-selectize',
			get_template_directory_uri() . '/libs/cozy-accordion/assets/vendor/selectize/js/standalone/selectize.js',
			array()
		);

		wp_enqueue_script(
			WT_PREFIX .'-app',
			get_template_directory_uri() . '/libs/cozy-accordion/assets/js/app.min.js',
			array()
		);
	}
	/**
	 * Load Frontend Scripts
	 *
	 * @access public
	 * @return void
	 * @since 0.1
	 */
	public function loadSiteScripts()
	{
		//$this->loadCommonScripts();

		wp_enqueue_style(
			WT_PREFIX . '-bs-accordion',
			get_template_directory_uri() . '/libs/cozy-accordion/assets/css/accordion.min.css',
			array()
		);
	}
}
// Kickstart the class
new WT_CozyAccordion();
