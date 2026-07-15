<?php
/**
 * Plugin Name: Spry Breakdance Elements
 * Plugin URI: https://sprywebtech.com/
 * Description: A reusable collection of custom Breakdance elements by Spry Web Tech.
 * Author: Spry Web Tech
 * Author URI: https://sprywebtech.com/
 * License: GPLv2 or later
 * Text Domain: spry-breakdance-elements
 * Version: 1.0.1
 */

namespace SpryWebTechBreakdanceElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

if (!defined('ABSPATH')) {
    exit;
}

add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'SpryWebTechBreakdanceElements',
        'element',
        'Spry Web Tech',
        false
    );
}, 9);
