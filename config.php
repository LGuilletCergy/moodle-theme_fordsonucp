<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Initially developped for :
 * Université de Cergy-Pontoise
 * 33, boulevard du Port
 * 95011 Cergy-Pontoise cedex
 * FRANCE
 *
 * UCP fordson based theme
 *
 * @package   theme_fordsonucp
 * @copyright 2019 Laurent Guillet <laurent.guillet@u-cergy.fr>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * File : config.php
 * Configuration file
 */

defined('MOODLE_INTERNAL') || die();

// Call the theme lib file.
require_once(__DIR__ . '/lib.php');

$THEME->name = 'fordsonucp';

// This is a critical setting. We want to inherit from theme_fordson because it is the theme used on the main site.
// We could add more than one parent here to inherit from multiple parents, and if we did they would be processed in
// order of importance (later themes overriding earlier ones). Things we will inherit from the parent theme include
// styles and mustache templates and some (not all) settings.
$THEME->parents = ['boost', 'fordson'];

// This setting list the style sheets we want to include in our theme. Because we want to use SCSS instead of CSS - we won't
// list any style sheets. If we did we would list the name of a file in the /style/ folder for our theme without any css file
// extensions.
$THEME->sheets = [''];

// This is a setting that can be used to provide some styling to the content in the TinyMCE text editor. This is no longer the
// default text editor and "Atto" does not need this setting so we won't provide anything. If we did it would work the same
// as the previous setting - listing a file in the /styles/ folder.
$THEME->editor_sheets = [''];

// Toggle display of blocks
$THEME->layouts = [
    // The site home page.
    'frontpage' => [
        'theme' => 'boost',
        'file' => 'frontpage.php',
        'regions' => ['side-pre', 'fp-a', 'fp-b', 'fp-c'],
        'defaultregion' => 'fp-c',
        'options' => ['nonavbar' => true, 'langmenu' => true],
    ],
    // Main course page.
    'course' => [
        'theme' => 'boost',
        'file' => 'course.php',
        'regions' => ['side-pre', 'fp-a', 'fp-b', 'fp-c'],
        'defaultregion' => 'fp-c',
    ],
    'incourse' => [
        'theme' => 'boost',
        'file' => 'course.php',
        'regions' => ['side-pre'],
        'defaultregion' => 'side-pre',
    ],
    'coursecategory' => [
        'theme' => 'boost',
        'file' => 'columns2.php',
        'regions' => ['side-pre'],
        'defaultregion' => 'side-pre',
    ],
    // Server administration scripts.
    'admin' => [
        'theme' => 'boost',
        'file' => 'columns2.php',
        'regions' => ['side-pre', 'fp-c'],
        'defaultregion' => 'fp-c',
    ],
];
if ($THEME->settings->blockdisplay == 2) {
    $THEME->layouts['course'] = [
        'file' => 'course.php',
        'regions' => ['side-pre'],
        'defaultregion' => 'side-pre',
    ];
    $THEME->layouts['frontpage'] = [
        'file' => 'frontpage.php',
        'regions' => ['side-pre'],
        'defaultregion' => 'side-pre',
    ];
}

// This setting defines the main scss file for our theme to be compiled. We could set it to a static file in the scss folder or to a function which returns the SCSS based on theme settings.
$THEME->scss = function($theme) {

    // We need to load the config for our parent theme because that is where the preset setting is defined.
    $parentconfig = theme_config::load('fordson');
    // Call a function from our parent themes lib.php file to fetch the content of the themes main SCSS file based on it's own config, not ours.
    return theme_fordson_get_main_scss_content($parentconfig);
};

// Call css/scss processing functions and renderers.
$THEME->csstreepostprocessor = 'theme_fordson_css_tree_post_processor';
$THEME->prescsscallback = 'theme_fordsonucp_get_pre_scss';
$THEME->extrascsscallback = 'theme_fordsonucp_get_extra_scss';
// Most themes will use this rendererfactory as this is the one that allows the theme to override any other renderer.
$THEME->rendererfactory = 'theme_overridden_renderer_factory';

// Toggle display of blocks
if ($THEME->settings->blockdisplay == 1) {
    $THEME->addblockposition = BLOCK_ADDBLOCK_POSITION_DEFAULT;
} else {
    $THEME->addblockposition = BLOCK_ADDBLOCK_POSITION_FLATNAV;
}

$THEME->iconsystem = \core\output\icon_system::FONTAWESOME;

// A dock is a way to take blocks out of the page and put them in a persistent floating area on the side of the page. Boost
// does not support a dock so we won't either - but look at bootstrapbase for an example of a theme with a dock.
$THEME->enable_dock = false;

// This is an old setting used to load specific CSS for some YUI JS. We don't need it in Boost based themes because Boost
// provides default styling for the YUI modules that we use. It is not recommended to use this setting anymore.
$THEME->yuicssmodules = array();



// This is a list of blocks that are required to exist on all pages for this theme to function correctly. For example
// bootstrap base requires the settings and navigation blocks because otherwise there would be no way to navigate to all the
// pages in Moodle. Boost does not require these blocks because it provides other ways to navigate built into the theme.
$THEME->requiredblocks = '';
