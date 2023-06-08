<?php

/**
 * Plugin Name: PDK | Breakdance Custom Elements
 * Plugin URI: https://github.com/mishterk/pdk-breakdance-custom-elements
 * Description: A custom element library for the Breakdance builder
 * Author: Phil Kurth
 * Author URI: https://philkurth.com.au
 * License: GPLv2
 * Text Domain: pdk-breakdance-custom-elements
 * Domain Path: /languages/
 * Version: 0.0.1
 */

namespace PdkBreakdanceCustomElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action( 'breakdance_loaded', function () {
	\Breakdance\ElementStudio\registerSaveLocation(
		getDirectoryPathRelativeToPluginFolder( __DIR__ ) . '/elements',
		'PdkBreakdanceCustomElements',
		'element',
		'PDK Custom Elements',
		false
	);

	\Breakdance\ElementStudio\registerSaveLocation(
		getDirectoryPathRelativeToPluginFolder( __DIR__ ) . '/macros',
		'PdkBreakdanceCustomElements',
		'macro',
		'PDK Custom Macros',
		false,
	);

	\Breakdance\ElementStudio\registerSaveLocation(
		getDirectoryPathRelativeToPluginFolder( __DIR__ ) . '/presets',
		'PdkBreakdanceCustomElements',
		'preset',
		'PDK Custom Presets',
		false,
	);
},
	// register elements before loading them
	9
);
