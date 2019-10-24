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
 * File : lib.php
 * Library file
 */

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

require_once(__ROOT__ . '/theme/fordson/lib/scss_lib.php');
require_once(__ROOT__ . '/theme/fordson/lib/filesettings_lib.php');
require_once(__ROOT__ . '/theme/fordson/lib/fordson_lib.php');


function theme_fordsonucp_css_tree_post_processor($theme) {
    // Load the settings from the parent.
    $theme = theme_config::load('fordson');
    // Call the parent themes get_pre_scss function.
    return theme_fordson_css_tree_post_processor($theme);
}

// Function to return the SCSS to prepend to our main SCSS for this theme.
// Note the function name starts with the component name because this is a global function
// and we don't want namespace clashes.
function theme_fordsonucp_get_pre_scss($theme) {
    // Load the settings from the parent.
    $theme = theme_config::load('fordson');
    // Call the parent themes get_pre_scss function.
    return theme_fordson_get_pre_scss($theme);
}

// Function to return the SCSS to append to our main SCSS for this theme.
// Note the function name starts with the component name because this is a global function
// and we don't want namespace clashes.
function theme_fordsonucp_get_extra_scss($theme) {
    // Load the settings from the parent.
    $theme = theme_config::load('fordson');
    // Call the parent themes get_extra_scss function.
    return theme_fordson_get_extra_scss($theme);
}