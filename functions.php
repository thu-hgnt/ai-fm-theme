<?php
/**
 * appside functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package appside
 */

/**
 * Define Appside Folder Path & Url Const
 * @since 1.0.0
 * */
define('AIFM_THEME_ROOT',get_template_directory());
define('AIFM_THEME_ROOT_URL',get_template_directory_uri());
define('AIFM_INC',AIFM_THEME_ROOT .'/inc');
define('AIFM_THEME_SETTINGS',AIFM_INC.'/theme-settings');
define('AIFM_THEME_SETTINGS_IMAGES',AIFM_THEME_ROOT_URL.'/inc/theme-settings/images');
define('AIFM_TGMA',AIFM_INC.'/plugins/tgma');
define('AIFM_DYNAMIC_STYLESHEETS',AIFM_INC.'/dynamic-stylesheets');
define('AIFM_CSS',AIFM_THEME_ROOT_URL.'/assets/css');
define('AIFM_JS',AIFM_THEME_ROOT_URL.'/assets/js');
define('AIFM_ASSETS',AIFM_THEME_ROOT_URL.'/assets');

include 'inc/generate-page.php';