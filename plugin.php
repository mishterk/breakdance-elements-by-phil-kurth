<?php

/**
 * Plugin Name: Breakdance Elements by Phil Kurth
 * Plugin URI: https://github.com/mishterk/breakdance-elements-by-phil-kurth
 * Description: A custom element library for the Breakdance builder
 * Author: Phil Kurth
 * Author URI: https://philkurth.com.au
 * License: GPLv2
 * Text Domain: breakdance-elements-by-phil-kurth
 * Domain Path: /languages/
 * Version: 0.0.1
 */

namespace BreakdanceElementsByPhilKurth;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action( 'breakdance_loaded', function () {
	\Breakdance\ElementStudio\registerSaveLocation(
		getDirectoryPathRelativeToPluginFolder( __DIR__ ) . '/elements',
		'BreakdanceElementsByPhilKurth',
		'element',
		'Elements by Phil Kurth',
		false
	);

	\Breakdance\ElementStudio\registerSaveLocation(
		getDirectoryPathRelativeToPluginFolder( __DIR__ ) . '/macros',
		'BreakdanceElementsByPhilKurth',
		'macro',
		'Macros by Phil Kurth',
		false,
	);

	\Breakdance\ElementStudio\registerSaveLocation(
		getDirectoryPathRelativeToPluginFolder( __DIR__ ) . '/presets',
		'BreakdanceElementsByPhilKurth',
		'preset',
		'Presets by Phil Kurth',
		false,
	);
},
	// register elements before loading them
	9
);
